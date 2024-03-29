var captchaRes = '';
var sibVerifyCallback = function(response){
    captchaRes = response;
    if(captchaRes)
    {
        jQuery('.sib_signup_form').trigger('submit');
    }
};

jQuery(document).ready(function(){
    // run MA script identify() when submit on any forms with email field
    jQuery(document).on('submit', 'form', function(e){
        if(!jQuery(this).hasClass('sib_signup_form')) {
            var email = jQuery(this).find('input[type=email]').val();
            var emailPattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (typeof sendinblue != 'undefined' && email != null && emailPattern.test(email)) {
                var postData = jQuery(this).serializeObject();
                sendinblue.identify(email, postData);
            }
        }
        else
        {
            e.preventDefault();
            var form = jQuery(this).closest('form');
            /**
             * For safari
             * Not support required attribute
             */

            var required_fileds = [];
            var err_index = 0;
            jQuery.each(form.find('input[required="required"]'), function(){
                if(jQuery(this).val() == '')
                {
                    required_fileds[err_index] = jQuery(this).attr('name');
                    err_index++;
                }
            });
            if(err_index > 0)
            {
                form.find('.sib_msg_disp').html('<p class="sib-alert-message sib-alert-message-warning ">' + sibErrMsg.requiredField + '</p>').show();
                return;
            }
            err_index=0;
            jQuery.each(form.find('input[type="email"]'), function(){
                var Email = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i;
                if (!Email.test(jQuery(this).val()))
                {
                    err_index++;
                }
            });
            if(err_index > 0)
            {
                form.find('.sib_msg_disp').html('<p class="sib-alert-message sib-alert-message-warning ">' + sibErrMsg.invalidMail + '</p>').show();
                return;
            }

            /**
             * Check dateformat
             */
            err_index = 0;
            jQuery.each(form.find('.sib-date') , function(){
                var dateFormat = jQuery(this).data('format');
                var date = jQuery(this).val();
                var filter = '';
                if(dateFormat == 'dd/mm/yyyy')
                {
                    filter = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
                }

                if(dateFormat == 'dd-mm-yyyy')
                {
                    filter = /^(((0[1-9]|[12]\d|3[01])-(0[13578]|1[02])-((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)-(0[13456789]|1[012])-((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])-02-((19|[2-9]\d)\d{2}))|(29-02-((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
                }
                else if(dateFormat == 'mm-dd-yyyy')
                {
                    filter = /^(((0[13578]|1[02])-(0[1-9]|[12]\d|3[01])-((19|[2-9]\d)\d{2}))|((0[13456789]|1[012])-(0[1-9]|[12]\d|30)-((19|[2-9]\d)\d{2}))|(02-(0[1-9]|1\d|2[0-8])-((19|[2-9]\d)\d{2}))|(02-29-((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
                }

                if (filter == '' || !filter.test(date))
                {
                    err_index++;
                }
            });

            if(err_index > 0)
            {
                form.find('.sib_msg_disp').html('<p class="sib-alert-message sib-alert-message-warning ">' + sibErrMsg.invalidDateFormat + '</p>').show();
                return;
            }

            // Check sms validation
            err_index = 0;
            jQuery.each(form.find('.sib-sms'), function () {
                var sms = jQuery(this).val();
                if ( is_valid_sms(sms) == false && sms != '' ) {
                    err_index ++;
                }
            });
            if(err_index > 0)
            {
                form.find('.sib_msg_disp').html('<p class="sib-alert-message sib-alert-message-warning ">' + sibErrMsg.invalidSMSFormat + '</p>').show();
                return;
            }
            form.find('.sib_loader').show();
            jQuery('.sib_msg_disp').hide();
            var postData = form.serializeArray();
            if( captchaRes != '')
            {
                postData.push({"name": "g-recaptcha-response", "value": captchaRes});
            }
            var formURL = form.attr("action");
            form.addClass('sib_processing');

            postData.push({ "name": "security", "value": ajax_sib_front_object.ajax_nonce });
            jQuery.ajax(
                {
                    url: formURL,
                    type: "POST",
                    dataType: "json",
                    data: postData,
                    success: function (data, textStatus, jqXHR) {
                        jQuery('.sib_loader').hide();
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else if (data.status === 'success' || data.status === 'update') {
                            var cdata = '<p class="sib-alert-message sib-alert-message-success ">' + data.msg.successMsg + '</p>';
                            form.find('.sib_msg_disp').html(cdata).show();
                        } else if (data.status === 'failure') {
                            var cdata = '<p class="sib-alert-message sib-alert-message-error ">' + data.msg.errorMsg + '</p>';
                            form.find('.sib_msg_disp').html(cdata).show();
                        } else if (data.status === 'already_exist') {
                            var cdata = '<p class="sib-alert-message sib-alert-message-warning ">' + data.msg.existMsg + '</p>';
                            form.find('.sib_msg_disp').html(cdata).show();
                        } else if (data.status === 'invalid') {
                            var cdata = '<p class="sib-alert-message sib-alert-message-error ">' + data.msg.invalidMsg + '</p>';
                            form.find('.sib_msg_disp').html(cdata).show();
                        } else if (data.status === 'gcaptchaEmpty') {
                            var cdata = '<p class="sib-alert-message sib-alert-message-error ">' + data.msg + '</p>';
                            form.find('.sib_msg_disp').html(cdata).show();
                        } else if (data.status === 'gcaptchaFail') {
                            var cdata = '<p class="sib-alert-message sib-alert-message-error ">' + data.msg + '</p>';
                            form.find('.sib_msg_disp').html(cdata).show();
                        }
                        form[0].reset();
                        var previous_code = form.find('.sib-cflags').data('dial-code');
                        form.find('.sib-sms').val('+' + previous_code);
                        // run MA script identify() when subscribe on SIB forms
                        if (typeof sendinblue != 'undefined') {
                            var email = form.find('input[name=email]').val();
                            var postData = form.serializeObject();
                            if (data.status === 'success' || data.status === 'update' || data.status === 'already_exist') {
                                sendinblue.identify(email, postData);
                            }
                        }
                        jQuery(".sib-alert-message").delay(2000).hide('slow');
                        form.removeClass('sib_processing');
                        if (typeof grecaptcha != 'undefined')
                        {
                            grecaptcha.reset(gCaptchaSibWidget);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        form.find('.sib_msg_disp').html(jqXHR).show();
                        if (typeof grecaptcha != 'undefined')
                        {
                            grecaptcha.reset(gCaptchaSibWidget);
                        }
                    }
                });
        }
    });
    jQuery('.sib-country-block').on('click', function () {
       jQuery('.sib-country-list').toggle();
    });
    jQuery('.sib-country-list').ready( function () {
        var country_list_box = jQuery(this);
        var data = {
            action : 'sib_get_country_prefix',
            security: ajax_sib_front_object.ajax_nonce,
        };
        jQuery.post( ajax_sib_front_object.ajax_url, data, function (respond) {
            jQuery('.sib-country-list').html(respond);
        });
    });

    jQuery('body').on('click', function(e){
        if ( jQuery('.sib-sms-field .sib-country-list').length > 0 && !jQuery('.sib-sms-field .sib-country-list').is(e.target) && jQuery('.sib-sms-field .sib-country-list').has(e.target).length === 0 && jQuery('.sib-sms-field .sib-country-block').has(e.target).length === 0 ) {
            jQuery('.sib-sms-field .sib-country-list').hide();
        }
    });

    jQuery('.sib-country-list').on( 'click', 'li' , function () {
        var country_code = jQuery(this).data('country-code').toLowerCase();
        var dial_code = jQuery(this).data('dial-code');
        jQuery(this).closest('.sib-sms-field').find('.sib-sms').val('+' + dial_code );
        jQuery(this).closest('.sib-sms-field').find('.sib-cflags').css('background-image', 'url(' + ajax_sib_front_object.flag_url + country_code + '.png)');
        jQuery(this).closest('.sib-sms-field').find('.sib-cflags').data('dial-code', dial_code);
        jQuery(this).closest('.sib-country-list').hide();
    });
    jQuery(".sib-sms").on('keypress', function (event){
        validateInteger(event, 'sms');
    });
    // allow to input 0-9 and - only for date field
    jQuery(".sib-date").on('keypress', function(event) {
        validateInteger(event, 'date');
    });
    function is_valid_sms( sms ) {
        sms = sms.replace(/\b(0(?!\b))+/g, "");

        var tempSms = sms.replace(/( |\(|\)|\.|\-)/g, '');

        if (tempSms.length > 19  || tempSms.length < 6 || tempSms.charAt(0) != '+'){
            return false;
        }
        return true;
    }
    function validateInteger(evt,type) {
        var theEvent = evt || window.event;
        var key = theEvent.charCode || theEvent.which;

        key = String.fromCharCode( key );
        // 0-9, +/-, space, brackets
        var regex = /[ +0-9()-]/;
        var smsLength = 0;
        if( type == 'date' ) {
            regex = /[ 0-9-]/;
        }
        if( !regex.test(key)) {
            theEvent.returnValue = false;
            key = theEvent.keyCode;
            // ignore input for del,tab, back, left, right, home amd end
            if(theEvent.preventDefault && key != 9 && key != 8 ) theEvent.preventDefault();
        }
    }


});
// get serialized data form subscribe form
jQuery.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    jQuery.each(a, function() {
        if(this.name == 'sib_form_action' || this.name == 'sib_form_id' || this.name == 'email')
            return true; // continue
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
