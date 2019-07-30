<?php
/**
 * @wordpress-plugin
 *
 * Plugin Name:       Envio de email Ariadna
 * Description:       Plugin para envio de email en ariadna
 * Version:           1.0
 * Author:            Carlos Martes
 * License:           © Copyright 2017 All Rights Reserved.
 */
//include_once "./Mailin.php"; 

add_filter('wp_mail', 'handle_wp_mail');
function handle_wp_mail($args) {

	if(strcmp("Welcome to TigoUne Business!", $args['subject']) == 0)
	{
		$user = get_user_by('email',$args['to']);
		$welcomemail = "<table style='width: 100%; background: #e1e1e1;' cellpadding='0' cellspacing='0'>
		<tbody>
			<tr>
				<td style='padding: 20px 0;'>
					<table style='width: 100%; color: #949494; max-width: 600px; margin: 0 auto; font-size: 13px; background: white;' cellpadding='0' cellspacing='0'>
		<tbody>
			<tr>
				<td><h1 style='margin-left: 5%; color:#00377b; font-size: 1.6em; line-height: 100%; width: 70%'>Gracias por suscribirse al blog de TigoUne Business</h1></td>
				<td style='width: 30%;'>
					<a href='https://blog.tigounebusiness.co/'>
						<img style='width: 100px;' src='https://blog.tigounebusiness.co/wp-content/uploads/2018/06/favicon.png'>
					</a>
				</td>
			</tr>
			<tr>
				<td style='width: 100%;' colspan='2'>
					<img style='width: 100%;' src='https://blog.tigounebusiness.co/wp-content/uploads/2018/06/600_260_bienvenido_1.jpg'>
				</td>
  			</tr>
			<tr>
				<td colspan='2' style='width: 100%; text-align: center;' align='center'>
					<div style='font-size: 1.2em; padding-bottom: 20px; position: relative; margin-top: 20px; border-collapse: collapse !important; background: #fff;'>
						<h1 style='font-size: 26px; line-height: 126%; margin: 30px 0; font-weight: normal;'>Hola, <strong>".$user->user_login."</strong></h1>
						<div style='    box-shadow: 0 0 10px #0000002b; width: 85%; height: 100%; padding: 1% 0; margin: 0 auto;'>
						<p style='    display: block; line-height: 126%; margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; font-weight: normal; width: 90%;  margin: 25px 0; font-size: 1.1em; border-right: 10px solid #00377B; padding: 0 5%; color:#00377B;'>
							Le damos la bienvenida a nuestro blog TigoUne Business. Cada mes, recibirá una actualización con lo mejor en información de tecnología, para apoyarlo en la transformación digital que su negocio necesita.
						</p>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan='2' style='width: 100%; border:5px solid #E1E1E1; background: #E1E1E1;'>
				</td>
			</tr>
			<tr>
				<td colspan='2' style='width: 100%;'>
					<p style='color: #00377b; font-size: 1.2em; font-weight: bold; width: 85%; margin: 0 auto; margin-top: 5%; margin-bottom: 5%;'>
						Disfrute de nuestros artículos más populares:
					</p>
				</td>
			</tr>
			<tr>
				<td colspan='2' style='width: 100%; font-size: 1em;'>
					<a style='color:#949494;' href='https://cta-redirect.hubspot.com/cta/redirect/2638078/d171a388-fe78-4b23-82d2-6c930d4a49a8'>
						<div style='width: 32.3%; float: left;'>
							<img src='https://blog.tigounebusiness.co/wp-content/uploads/2018/07/consideraciones-tigo-une.jpg' style='width: 100%;'>
							<h4 style='display: block; line-height: 126%; margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; font-weight: normal;  font-size: 13px; width: 90%; text-align: left; padding-left: 5%;'>
								¿Cómo elegir el mejor servicio de colocación?
							</h4>
							<h5 style='display:block; line-height:126%; margin-top:0; margin-right:0; margin-bottom:10px; margin-left:0; font-weight:normal; font-size:11px; text-align:left; width:90%; color:#66cafe; padding-left:5%; padding-bottom:15px' align='left' width='90%'>+ Leer más</h5>
						</div>
					</a>
					<a style='color:#949494;' href='https://cta-redirect.hubspot.com/cta/redirect/2638078/8ba3e4fb-8261-4a84-b430-e56b905cad84'>
						<div style='width: 32.3%; float: left; margin: 0 1.55%;'>
							<img src='https://blog.tigounebusiness.co/wp-content/uploads/2018/06/cambio-nueva-normalidad.jpg' style='width: 100%;'>
							<h4 style='display: block; line-height: 126%; margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; font-weight: normal;  font-size: 13px; width: 90%; text-align: left; padding-left: 5%;'>
								El cambio es la nueva normalidad, 7 consejos para afrontarlo.
							</h4>
							<h5 style='display:block; line-height:126%; margin-top:0; margin-right:0; margin-bottom:10px; margin-left:0; font-weight:normal; font-size:11px; text-align:left; width:90%; color:#66cafe; padding-left:5%; padding-bottom:15px' align='left' width='90%'>+ Leer más</h5>
						</div>
					</a>
					<a style='color:#949494;' href='https://cta-redirect.hubspot.com/cta/redirect/2638078/5cf61ae5-13bb-4de7-8e42-a64ada38cc55'>
						<div style='width: 32.3%; float: left;'>
							<img src='https://blog.tigounebusiness.co/wp-content/uploads/2018/07/consideraciones-tigo-une.jpg' style='width: 100%;'>
							<h4 style='display: block; line-height: 126%; margin-top: 0; margin-right: 0; margin-bottom: 10px; margin-left: 0; font-weight: normal;  font-size: 13px; width: 90%; text-align: left; padding-left: 5%;'>
								5 consideraciones claves para elegir un proveedor en la Nube 
							</h4>
							<h5 style='display:block; line-height:126%; margin-top:0; margin-right:0; margin-bottom:10px; margin-left:0; font-weight:normal; font-size:11px; text-align:left; width:90%; color:#66cafe; padding-left:5%; padding-bottom:15px' align='left' width='90%'>+ Leer más</h5>
						</div>
					</a>
					<div style='clear: both;'></div>
				</td>
			</tr>
			<tr>
				<td colspan='2' style='width: 100%;'>
					<h3 style='text-align: center; display:block; line-height:126%; margin-top:0; margin-right:0; margin-bottom:10px; margin-left:0; font-weight:normal; font-size:18px; width:100%; margin:0; padding:0 0 22px 0;'>Encuentre siempre, con nosotros, información relevante en tecnología para negocios.</h3>
				</td>				
			</tr>
			<tr>
				<td colspan='2'>
					<table border='0' cellpadding='0' cellspacing='0' width='100%' id='footerTable' style='-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; mso-table-lspace:0pt; mso-table-rspace:0pt; border-collapse:collapse !important; background-color:#edf0f7; color:#999999; font-family:sans-serif; font-size:12px; line-height:120%; padding-top:20px; padding-right:20px; padding-bottom:20px; padding-left:20px; text-align:center' bgcolor='#edf0f7' align='center'>

                                    <tbody><tr>

<td align='left' valign='top' class='bodyContent' width='100%' colspan='12' style='-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; mso-table-lspace:0pt; mso-table-rspace:0pt; color:#444444; font-family:Roboto; font-size:15px; line-height:150%; text-align:left'>

<table cellpadding='0' cellspacing='0' border='0' width='100%' class='templateColumnWrapper' style='-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; mso-table-lspace:0pt; mso-table-rspace:0pt; border-collapse:collapse !important'>

            <tbody><tr>

<td valign='top' colspan='12' width='100.0%' class='column' style='-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; mso-table-lspace:0pt; mso-table-rspace:0pt; width:100.0%; text-align:left; padding:0; font-family:sans-serif; font-size:15px; line-height:1.5em; color:#444444; border-top:1px solid #66cafe' align='left'>



<div class='widget-span widget-type-email_can_spam' style='' data-widget-type='email_can_spam'>

<p id='footer' style='margin-bottom: 1em; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; font-family:Geneva, Verdana, Arial, Helvetica, sans-serif; text-align:center; font-size:12px; line-height:1.34em; color:#999999; display:block; padding:0 4%' align='center'><span style='display: none;'>ARIADNA CG &nbsp;&nbsp;carrera 43c No 4 sur 199 &nbsp;carrera 43c No 4 sur 199 &nbsp;Medellin &nbsp;Antioquia &nbsp;&nbsp;57411 &nbsp;&nbsp;Colombia<br></span> Tigo Copyright ©. Colombia Móvil S.A. E.S.P. Todos los derechos reservados.<br> &nbsp;<a class='hubspot-mergetag' data-unsubscribe='true' href='https://hs-2638078.s.hubspotemail.net/hs/manage-preferences/unsubscribe-all-test?d=eyJlYSI6ImV4YW1wbGVAZXhhbXBsZS5jb20ifQ%3D%3D&amp;v=1' style='-ms-text-size-adjust:100%; -webkit-text-size-adjust:none; font-weight:normal; text-decoration:underline; whitespace:nowrap; color:#999999' data-hs-link-id='0' target='_blank'>Haz clic aquí</a> si no deseas recibir más notificaciones de Tigo.</p>

	<p style='margin-bottom: 1em; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; text-align:center' align='center'><span style='padding: 0 5px; cursor: pointer;'><a href='https://www.facebook.com/TigoUneCol' style='-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; color:#999999' data-hs-link-id='0' target='_blank'><img style='vertical-align:bottom; -ms-interpolation-mode:bicubic; max-width:31px' src='https://cdn2.hubspot.net/hub/2638078/hubfs/062618_Recursos_Mail_LPage/facebook-icono.png?t=1530914772945&amp;width=31&amp;height=31&amp;name=facebook-icono.png' width='31' height='31' alt='tigo-une'></a></span><span style='padding: 0 5px; cursor: pointer;'><a href='https://twitter.com/Tigo_Colombia' style='-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; color:#999999' data-hs-link-id='0' target='_blank'><img style='vertical-align:bottom; -ms-interpolation-mode:bicubic; max-width:31px' src='https://cdn2.hubspot.net/hub/2638078/hubfs/062618_Recursos_Mail_LPage/twitter-icono.png?t=1530914772945&amp;width=31&amp;height=31&amp;name=twitter-icono.png' width='31' height='31' alt='tigo-une'></a></span></p>

</div><!--end widget-span -->

   </td>

           </tr>

    </tbody></table>

   </td>

</tr>

<!--end footer wrapper -->

                                    <tr>

                                        <td style='-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; mso-table-lspace:0pt; mso-table-rspace:0pt'></td>

                                    </tr>

                                </tbody></table>
				</td>
			</tr>
		</tbody>
		</table>
					</td>
				</tr>
			</tbody>
		</table>";


			/*$mailin = new Mailin('roberto.striedinger@ariadnacg.com', 'ZGQr4DCsBWKHO9Yv');
			$mailin->
			addTo('carlosmiguel782@gmail.com', 'Roberto Striedinger')->
			setFrom('tigoune@tigounebusiness.co', 'TigoUne')->
			setSubject('Escriba el asunto aquí')->
			setText('Hola')->
			setHtml('<strong>Hola</strong>');
			$res = $mailin->send();*/
/**
El mensaje de éxito se enviará de esta forma:
{'result' => true, 'message' => 'E-MAILS enviados'} */

			$new_wp_mail = array(
					'to'          => $args['to'],
					'subject'     => "Bienvenido a TigoUne Business",
					'message'     => $args['message'],
					'headers'     => 'From: Tigo Une <tigoune@tigounebusiness.co>',
					'attachments' => $args['attachments'],
					'message' => $welcomemail
				);
		
		return $new_wp_mail;
	}else{
		$new_wp_mail = array(
			'to'          => $args['to'],
			'subject'     => $args['subject'],
			'message'     => $args['message'],
			'headers'     => 'From: Tigo Une <tigoune@tigounebusiness.co>',
			'attachments' => $args['attachments'],
		);
		
		return $new_wp_mail;
	}
  
}