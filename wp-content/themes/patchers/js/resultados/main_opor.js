//USO Y ACCESO----------------------- valores y textos

var valores_total = ['85','50','15','62'];
var valores_barra = ['81','43','18','49'];
var valores_bogot = ['88','41','14','74'];
var valores_bucar = ['80','57','22','70'];
var valores_calii = ['89','54', '0','48'];
var valores_carta = ['77','27', '8','42'];
var valores_maniz = ['88','67', '8','46'];
var valores_medel = ['87','55','18','66'];
var valores_perei = ['88','49','22','93'];
var valores_hombr = ['88','51','14','65'];
var valores_mujer = ['82','49','15','59'];
var valores_edad1 = ['59','25','11','30'];
var valores_edad2 = ['86','50','13','58'];
var valores_edad3 = ['95','59','15','72'];
var valores_edad4 = ['98','65','19','87'];


var valores_total_2 = ['61','36','19','71'];
var valores_barra_2 = ['55','44','20','85'];
var valores_bogot_2 = ['81','46','25','92'];
var valores_bucar_2 = ['92','47','23','90'];
var valores_calii_2 = ['43','41','19','70'];
var valores_carta_2 = ['52','13', '6','44'];
var valores_maniz_2 = ['42','29','50','54'];
var valores_medel_2 = ['62','33','15','66'];
var valores_perei_2 = ['37','52','35','65'];
var valores_hombr_2 = ['62','42','21','68'];
var valores_mujer_2 = ['59','30','18','74'];
var valores_edad1_2 = ['50','21', '8','70'];
var valores_edad2_2 = ['55','33','17','75'];
var valores_edad3_2 = ['61','39','14','68'];
var valores_edad4_2 = ['78','52','37','69'];


var valores_total_3 = ['72', '94','67','35','79','58','47'];
var valores_barra_3 = ['81', '94','69','28','25','58','96'];
var valores_bogot_3 = ['82', '90','77','32','93','71','41'];
var valores_bucar_3 = ['80', '96','75','43','96','71','43'];
var valores_calii_3 = ['72', '96','66','39','92','60','29'];
var valores_carta_3 = ['77', '94','69','32','73','56','100'];
var valores_maniz_3 = ['71', '96','33','25','88','58','21'];
var valores_medel_3 = ['66', '94','66','36','82','51','35'];
var valores_perei_3 = ['67', '89','60','42','75','58','38'];
var valores_hombr_3 = ['74', '92','60','45','85','57','54'];
var valores_mujer_3 = ['70', '95','73','24','72','59','41'];
var valores_edad1_3 = ['67', '85','56','35','90','42','49'];
var valores_edad2_3 = ['69', '93','69','40','80','51','53'];
var valores_edad3_3 = ['75', '97','71','33','74','62','44'];
var valores_edad4_3 = ['78','100','72','31','71','78','44'];


var valores_total_4 = [ '88','76','40','49','51','21'];
var valores_barra_4 = [ '80','67','35','46','56','20'];
var valores_bogot_4 = ['100','84','44','61','37','31'];
var valores_bucar_4 = [ '98','76','54','49','67','31'];
var valores_calii_4 = [ '76','84','34','31','42','17'];
var valores_carta_4 = [ '91','39','28','43','57','19'];
var valores_maniz_4 = [ '92','87','50','17','29','21'];
var valores_medel_4 = [ '84','80','39','55','51','19'];
var valores_perei_4 = [ '96','96','44','53','67','13'];
var valores_hombr_4 = ['87','80','45','52','63','26'];
var valores_mujer_4 = ['89','72','35','46','54','15'];
var valores_edad1_4 = ['81','61','22','31','48','8'];
var valores_edad2_4 = ['90','72','28','47','53','12'];
var valores_edad3_4 = ['85','85','43','56','43','27'];
var valores_edad4_4 = ['95','85','68','61','58','39'];


var valores_total_5 = ['69','75','89','33','21','21'];
var valores_barra_5 = ['71','67','90','44','22','22'];
var valores_bogot_5 = ['72','72','92','54','39','39'];
var valores_bucar_5 = ['74','80','84','39','33','33'];
var valores_calii_5 = ['72','85','97','23','17','17'];
var valores_carta_5 = ['74','78','82','26','13','13'];
var valores_maniz_5 = ['63','83','92','13', '8', '8'];
var valores_medel_5 = ['64','73','89','32','18','17'];
var valores_perei_5 = ['31','65','96','34','12','12'];
var valores_hombr_5 = ['72','77','92','34','24','24'];
var valores_mujer_5 = ['65','73','87','32','17','17'];
var valores_edad1_5 = ['40','53','73','16','3','3'];
var valores_edad2_5 = ['68','74','88','26','12','12'];
var valores_edad3_5 = ['83','85','97','36','24','24'];
var valores_edad4_5 = ['86','89','99','53','43','43'];



jQuery(document).ready(function(){
    /*Activador de la primer tab*/
    document.getElementById("defaultOpen1").click();
})
function openCity1(evt, cityName1) {
    var i, tabcontent, tablinks1;
    tabcontent = document.getElementsByClassName("resultados1");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";		
    }
    tablinks1 = document.getElementsByClassName("tablinks1");
    for (i = 0; i < tablinks1.length; i++) {
        tablinks1[i].className = tablinks1[i].className.replace(" active","");
    }
    document.getElementById(cityName1).style.display = "block";
	
	for(var i = 0; i < 9 ;i++)
	{
		$('#nacional1 .valor_valor_'+(i+1)).animateNumber({ number: valores_total[i] });
		$('#barranquilla1 .valor_valor_'+(i+1)).animateNumber({ number: valores_barra[i] });
		$('#bogota1 .valor_valor_'+(i+1)).animateNumber({ number: valores_bogot[i] });	
		$('#bucaramanga1 .valor_valor_'+(i+1)).animateNumber({ number: valores_bucar[i] });
		$('#cali1 .valor_valor_'+(i+1)).animateNumber({ number: valores_calii[i] });
		$('#cartagena1 .valor_valor_'+(i+1)).animateNumber({ number: valores_carta[i] });
		$('#manizales1 .valor_valor_'+(i+1)).animateNumber({ number: valores_maniz[i] });
		$('#medellin1 .valor_valor_'+(i+1)).animateNumber({ number: valores_medel[i] });
		$('#pereira1 .valor_valor_'+(i+1)).animateNumber({ number: valores_perei[i] });
	}
	
    evt.currentTarget.className += " active";
	
}

jQuery(document).ready(function(){
    /*Activador de la primer tab*/
    document.getElementById("defaultOpen2").click();
})
function openCity2(evt2, cityName2) {
    var i2, tabcontent2, tablinks2;
    tabcontent2 = document.getElementsByClassName("resultados2");
    for (i2 = 0; i2 < tabcontent2.length; i2++) {
        tabcontent2[i2].style.display = "none";
    }
    tablinks2 = document.getElementsByClassName("tablinks2");
    for (i2 = 0; i2 < tablinks2.length; i2++) {
        tablinks2[i2].className = tablinks2[i2].className.replace(" active","");
    }
    document.getElementById(cityName2).style.display = "block";
	
	for(var i = 0; i < 9 ;i++)
	{
		$('#nacional2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_2[i] });
		$('#barranquilla2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_2[i] });
		$('#bogota2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_2[i] });	
		$('#bucaramanga2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_2[i] });
		$('#cali2 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_2[i] });
		$('#cartagena2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_2[i] });
		$('#manizales2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_2[i] });
		$('#medellin2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_2[i] });
		$('#pereira2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_2[i] });
	}	
    evt2.currentTarget.className += " active";
}

jQuery(document).ready(function(){
    /*Activador de la primer tab*/
    document.getElementById("defaultOpen3").click();
})
function openCity3(evt3, cityName3) {
    var i3, tabcontent3, tablinks3;
    tabcontent3 = document.getElementsByClassName("resultados3");
    for (i3 = 0; i3 < tabcontent3.length; i3++) {
        tabcontent3[i3].style.display = "none";		
    }
    tablinks3 = document.getElementsByClassName("tablinks3");
    for (i3 = 0; i3 < tablinks3.length; i3++) {
        tablinks3[i3].className = tablinks3[i3].className.replace(" active","");
    }
    document.getElementById(cityName3).style.display = "block";
	
	for(var i = 0; i < 9 ;i++)
	{
		$('#nacional3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_3[i] });
		$('#barranquilla3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_3[i] });
		$('#bogota3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_3[i] });	
		$('#bucaramanga3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_3[i] });
		$('#cali3 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_3[i] });
		$('#cartagena3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_3[i] });
		$('#manizales3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_3[i] });
		$('#medellin3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_3[i] });
		$('#pereira3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_3[i] });
	}	
    evt3.currentTarget.className += " active";	
	
}

jQuery(document).ready(function(){
    /*Activador de la primer tab*/
    document.getElementById("defaultOpen4").click();
})
function openCity4(evt4, cityName4) {
    var i4, tabcontent4, tablinks4;
    tabcontent4 = document.getElementsByClassName("resultados4");
    for (i4 = 0; i4 < tabcontent4.length; i4++) {
        tabcontent4[i4].style.display = "none";
    }
    tablinks4 = document.getElementsByClassName("tablinks4");
    for (i4 = 0; i4 < tablinks4.length; i4++) {
        tablinks4[i4].className = tablinks4[i4].className.replace(" active","");
    }
    document.getElementById(cityName4).style.display = "block";
	
	for(var i = 0; i < 9 ;i++)
	{
		$('#nacional4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_4[i] });
		$('#barranquilla4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_4[i] });
		$('#bogota4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_4[i] });	
		$('#bucaramanga4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_4[i] });
		$('#cali4 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_4[i] });
		$('#cartagena4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_4[i] });
		$('#manizales4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_4[i] });
		$('#medellin4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_4[i] });
		$('#pereira4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_4[i] });
	}

    evt4.currentTarget.className += " active";
}

jQuery(document).ready(function(){
    /*Activador de la primer tab*/
    document.getElementById("defaultOpen5").click();
})
function openCity5(evt5, cityName5) {
    var i5, tabcontent5, tablinks5;
    tabcontent5 = document.getElementsByClassName("resultados5");
    for (i5 = 0; i5 < tabcontent5.length; i5++) {
        tabcontent5[i5].style.display = "none";
    }
    tablinks5 = document.getElementsByClassName("tablinks5");
    for (i5 = 0; i5 < tablinks5.length; i5++) {
        tablinks5[i5].className = tablinks5[i5].className.replace(" active","");
    }
    document.getElementById(cityName5).style.display = "block";
	
	for(var i = 0; i < 9 ;i++)
	{
		$('#nacional5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_5[i] });
		$('#barranquilla5 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_5[i] });
		$('#bogota5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_5[i] });	
		$('#bucaramanga5 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_5[i] });
		$('#cali5 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_5[i] });
		$('#cartagena5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_5[i] });
		$('#manizales5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_5[i] });
		$('#medellin5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_5[i] });
		$('#pereira5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_5[i] });
	}
	
    evt5.currentTarget.className += " active";
}

//Menu flotante---------------------------------------------------------------------------------------

function no_listaVisible(){	
	for(var i = 0; i < 15 ;i++){			
		$('#nacional'+i)	.css("display", "none");
		$('#barranquilla'+i).css("display", "none");
		$('#bogota'+i)		.css("display", "none");
		$('#bucaramanga'+i)	.css("display", "none");
		$('#cali'+i)		.css("display", "none");
		$('#cartagena'+i)	.css("display", "none");
		$('#manizales'+i)	.css("display", "none");
		$('#medellin'+i)	.css("display", "none");
		$('#pereira'+i)		.css("display", "none");
		$('#hombre'+i)		.css("display", "none");
		$('#mujer'+i)		.css("display", "none");
		$('#edad1_'+i)		.css("display", "none");
		$('#edad2_'+i)		.css("display", "none");
		$('#edad3_'+i)		.css("display", "none");
		$('#edad4_'+i)		.css("display", "none");
	}		
}

function menugris(){
	$(".nacional_flo")		.css("filter", "grayscale(100)");
	$(".barranquilla_flo")	.css("filter", "grayscale(100)");
	$(".bogota_flo")		.css("filter", "grayscale(100)");
	$(".bucaramanga_flo")	.css("filter", "grayscale(100)");
	$(".cali_flo")			.css("filter", "grayscale(100)");
	$(".cartagena_flo")		.css("filter", "grayscale(100)");
	$(".manizales_flo")		.css("filter", "grayscale(100)");
	$(".medellin_flo")		.css("filter", "grayscale(100)");
	$(".pereira_flo" )		.css("filter", "grayscale(100)");
	$('.genero_h')			.css("filter", "grayscale(100)");
	$('.genero_m')			.css("filter", "grayscale(100)");
	$('.edad_1')			.css("filter", "grayscale(100)");
	$('.edad_2')			.css("filter", "grayscale(100)");
	$('.edad_3')			.css("filter", "grayscale(100)");
	$('.edad_4')			.css("filter", "grayscale(100)");
}

function listaVisible(id_city){
	for(var i = 0; i < 16 ;i++){
		$(id_city+i).css("display", "inherit");			
	}
}

function for_cambio(){
	esconder_menu();
	
	for(var i = 0 ; i < 15 ;i++){					
		$('#nacional1		.valor_valor_'+(i+1)).animateNumber({ number: valores_total[i] });
		$('#barranquilla1 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra[i] });
		$('#bogota1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot[i] });	
		$('#bucaramanga1 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar[i] });
		$('#cali1 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii[i] });
		$('#cartagena1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta[i] });
		$('#manizales1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz[i] });
		$('#medellin1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel[i] });
		$('#pereira1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei[i] });
		$('#hombre1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr[i] });
		$('#mujer1 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer[i] });
		$('#edad1_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1[i] });
		$('#edad2_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2[i] });
		$('#edad3_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3[i] });
		$('#edad4_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4[i] });
	}
		
	for(var i = 0 ; i < 15 ;i++){					
		$('#nacional2		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_2[i] });
		$('#barranquilla2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_2[i] });
		$('#bogota2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_2[i] });	
		$('#bucaramanga2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_2[i] });
		$('#cali2 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_2[i] });
		$('#cartagena2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_2[i] });
		$('#manizales2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_2[i] });
		$('#medellin2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_2[i] });
		$('#pereira2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_2[i] });
		$('#hombre2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_2[i] });
		$('#mujer2 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_2[i] });
		$('#edad1_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_2[i] });
		$('#edad2_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_2[i] });
		$('#edad3_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_2[i] });
		$('#edad4_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_2[i] });
	}
		
	for(var i = 0 ; i < 15 ;i++){					
		$('#nacional3		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_3[i] });
		$('#barranquilla3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_3[i] });
		$('#bogota3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_3[i] });	
		$('#bucaramanga3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_3[i] });
		$('#cali3 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_3[i] });
		$('#cartagena3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_3[i] });
		$('#manizales3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_3[i] });
		$('#medellin3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_3[i] });
		$('#pereira3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_3[i] });
		$('#hombre3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_3[i] });
		$('#mujer3 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_3[i] });
		$('#edad1_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_3[i] });
		$('#edad2_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_3[i] });
		$('#edad3_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_3[i] });
		$('#edad4_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_3[i] });
	}
	
	for(var i = 0 ; i < 15 ;i++){					
		$('#nacional4		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_4[i] });
		$('#barranquilla4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_4[i] });
		$('#bogota4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_4[i] });	
		$('#bucaramanga4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_4[i] });
		$('#cali4 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_4[i] });
		$('#cartagena4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_4[i] });
		$('#manizales4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_4[i] });
		$('#medellin4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_4[i] });
		$('#pereira4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_4[i] });
		$('#hombre4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_4[i] });
		$('#mujer4 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_4[i] });
		$('#edad1_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_4[i] });
		$('#edad2_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_4[i] });
		$('#edad3_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_4[i] });
		$('#edad4_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_4[i] });
	}
	
	for(var i = 0 ; i < 15 ;i++){					
		$('#nacional5		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_5[i] });
		$('#barranquilla5 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_5[i] });
		$('#bogota5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_5[i] });	
		$('#bucaramanga5 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_5[i] });
		$('#cali5 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_5[i] });
		$('#cartagena5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_5[i] });
		$('#manizales5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_5[i] });
		$('#medellin5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_5[i] });
		$('#pereira5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_5[i] });
		$('#hombre5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_5[i] });
		$('#mujer5 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_5[i] });
		$('#edad1_5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_5[i] });
		$('#edad2_5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_5[i] });
		$('#edad3_5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_5[i] });
		$('#edad4_5 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_5[i] });
	}	
	
}

function apagar_pesta(){
	$(".bt_ciudad, .bt_genero, .bt_edad").removeClass("bt_on");
	$(".menuCiudad, .menuGenero, .menuEdad").css("display", "none");
	$(".menuFlotante").css("margin-bottom", "0");
}

function esconder_menu(){
	var alturaMenu = $(".menuFlotante").height();	
	$(".menuFlotante").css("margin-bottom", (-(alturaMenu))+10);	
}

jQuery(document).ready(function(){
	
	$(".nacional_flo").css("filter", "none");
	
	$(".bt_ciudad").click(function(){
		apagar_pesta();
		$(".bt_ciudad").addClass("bt_on" );
		$(".menuCiudad").css("display", "inherit");	
	});
	
	$(".bt_genero").click(function(){
		apagar_pesta()
		$(".bt_genero").addClass( "bt_on" );
		$(".menuGenero").css("display", "inherit");
	});
	
	$(".bt_edad").click(function(){
		apagar_pesta()
		$( ".bt_edad").addClass( "bt_on" );
		$(".menuEdad").css("display", "inherit");	
	});
	
	//-----------------------------------------------------------------------------------------------
	
	$(".nacional_flo").click(function(){		
		menugris();
		$(".nacional_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#nacional');
		for_cambio();		
	});
	
	$(".barranquilla_flo").click(function(){
		menugris();
		$(".barranquilla_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#barranquilla');
		for_cambio();
		
	});
	
	$(".bogota_flo").click(function(){
		menugris();
		$(".bogota_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#bogota');
		for_cambio();		
	});
	
	$(".bucaramanga_flo").click(function(){
		menugris();
		$(".bucaramanga_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#bucaramanga');
		for_cambio();		
	});
	
	$(".cali_flo").click(function(){
		menugris();
		$(".cali_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#cali');
		for_cambio();		
	});
	
	$(".cartagena_flo").click(function(){
		menugris();
		$(".cartagena_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#cartagena');
		for_cambio();		
	});
	
	$(".manizales_flo").click(function(){
		menugris();
		$(".manizales_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#manizales');
		for_cambio();		
	});
	
	$(".medellin_flo").click(function(){
		menugris();
		$(".medellin_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#medellin');
		for_cambio();		
	});
	
	$(".pereira_flo").click(function(){
		menugris();
		$(".pereira_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#pereira');
		for_cambio();		
	});	
	
	$(".genero_h").click(function(){
		menugris();
		$(".genero_h").css("filter", "none");
		no_listaVisible();
		listaVisible('#hombre');
		for_cambio();		
	});
	
	$(".genero_m").click(function(){
		menugris();
		$(".genero_m").css("filter", "none");
		no_listaVisible();
		listaVisible('#mujer');
		for_cambio();		
	});
	
	$(".edad_1").click(function(){		
		menugris();
		$(".edad_1").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad1_');
		for_cambio();		
	});
	
	$(".edad_2").click(function(){
		menugris();
		$(".edad_2").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad2_');
		for_cambio();
		
	});
	
	$(".edad_3").click(function(){
		menugris();
		$(".edad_3").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad3_');
		for_cambio();		
	});
	
	$(".edad_4").click(function(){
		menugris();
		$(".edad_4").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad4_');
		for_cambio();		
	});
	
	
})