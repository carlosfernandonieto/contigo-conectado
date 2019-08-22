//USO Y ACCESO----------------------- valores y textos

var valores_total = ['56','84','70','45','60'];
var valores_barra = ['46','76','76','54','54'];
var valores_bogot = ['47','65','70','35','57'];
var valores_bucar = ['71','74','75','44','76'];
var valores_calii = ['61','77','55','51','72'];
var valores_carta = ['60','63','70','53','59'];
var valores_maniz = ['50','71','58','42','67'];
var valores_medel = ['57','77','71','42','54'];
var valores_perei = ['49','74','76','50','68'];
var valores_hombr = ['54','77','64','37','58'];
var valores_mujer = ['58','71','77','54','63'];
var valores_edad1 = ['62','67','72','52','62'];
var valores_edad2 = ['54','83','72','47','61'];
var valores_edad3 = ['48','63','68','37','58'];
var valores_edad4 = ['52','83','69','45','60'];


var valores_total_2 = ['65','77','67','42','64'];
var valores_barra_2 = ['52','72','47','26','34'];
var valores_bogot_2 = ['63','69','53','49','71'];
var valores_bucar_2 = ['72','82','70','36','72'];
var valores_calii_2 = ['70','82','77','41','71'];
var valores_carta_2 = ['70','85','64','56','66'];
var valores_maniz_2 = ['67','71','71','38','63'];
var valores_medel_2 = ['62','75','69','40','64'];
var valores_perei_2 = ['81','86','88','69','83'];
var valores_hombr_2 = ['63','71','61','39','59'];
var valores_mujer_2 = ['67','82','72','45','70'];
var valores_edad1_2 = ['81','84','64','42','65'];
var valores_edad2_2 = ['70','79','73','39','70'];
var valores_edad3_2 = ['63','76','71','47','64'];
var valores_edad4_2 = ['47','68','59','41','57'];


var valores_total_3 = ['85','94','82','83','27','75'];
var valores_barra_3 = ['81','94','84','79','34','59'];
var valores_bogot_3 = ['83','92','88','77','21','71'];
var valores_bucar_3 = ['84','96','88','84','33','85'];
var valores_calii_3 = ['86','94','90','87','33','83'];
var valores_carta_3 = ['88','96','86','77','39','74'];
var valores_maniz_3 = ['79','96','88','79','25','79'];
var valores_medel_3 = ['85','94','74','85','23','76'];
var valores_perei_3 = ['88','89','80','88', '6','71'];
var valores_hombr_3 = ['86','93','86','85','28','78'];
var valores_mujer_3 = ['83','95','79','80','25','72'];
var valores_edad1_3 = ['61','89','74','53', '9','48'];
var valores_edad2_3 = ['84','93','80','84','17','72'];
var valores_edad3_3 = ['96','95','84','94','41','88'];
var valores_edad4_3 = ['98','98','92','99','40','90'];


var valores_total_4 = ['65','43','43','40','35'];
var valores_barra_4 = ['77','38','42','38','38'];
var valores_bogot_4 = ['63','37','48','29','38'];
var valores_bucar_4 = ['57','38','44','51','28'];
var valores_calii_4 = ['68','39','31','31','31'];
var valores_carta_4 = ['46','34','43','43','38'];
var valores_maniz_4 = ['71','33','38','50','38'];
var valores_medel_4 = ['68','49','42','41','32'];
var valores_perei_4 = ['62','51','52','45','51'];
var valores_hombr_4 = ['61','42','54','38','44'];
var valores_mujer_4 = ['70','43','50','43','58'];
var valores_edad1_4 = ['50','37','33','30','33'];
var valores_edad2_4 = ['54','42','83','38','50'];
var valores_edad3_4 = ['76','44','25','48','88'];
var valores_edad4_4 = ['81','48','67','45','33'];


var valores_total_5 = ['63','63','70','73','57','43','28','51'];
var valores_barra_5 = ['66','51','70','68','65','41','30','41'];
var valores_bogot_5 = ['67','65','65','74','51','35','45','57'];
var valores_bucar_5 = ['66','73','65','77','63','63','16','53'];
var valores_calii_5 = ['66','55','66','68','49','27','25','60'];
var valores_carta_5 = ['67','49','55','73','58','61','46','54'];
var valores_maniz_5 = ['33','63','58','50','50','50','17','46'];
var valores_medel_5 = ['61','69','78','76','57','38','23','50'];
var valores_perei_5 = ['73','57','69','80','60','54','35','51'];
var valores_hombr_5 = ['61','63','69','73','54','47','29','50'];
var valores_mujer_5 = ['65','63','70','73','60','40','27','53'];
var valores_edad1_5 = ['60','65','73','76','57','36','24','46'];
var valores_edad2_5 = ['56','55','66','67','57','38','31','55'];
var valores_edad3_5 = ['70','69','72','74','59','51','31','55'];
var valores_edad4_5 = ['66','63','68','75','55','48','25','49'];


var valores_total_6 = [ '9', '9', '6','39'];
var valores_barra_6 = ['10','11','14','42'];
var valores_bogot_6 = ['21', '6', '4','46'];
var valores_bucar_6 = [ '6','21', '4','49'];
var valores_calii_6 = [ '8', '8', '2','21'];
var valores_carta_6 = [ '7', '4', '2','16'];
var valores_maniz_6 = [ '0', '0', '0','25'];
var valores_medel_6 = [ '7', '7', '8','46'];
var valores_perei_6 = ['13','16', '4','40'];
var valores_hombr_6 = [ '8', '8', '5','40'];
var valores_mujer_6 = [ '9', '9', '7','38'];
var valores_edad1_6 = [ '8', '8', '7','29'];
var valores_edad2_6 = [ '9', '12','7','37'];
var valores_edad3_6 = ['11', '12','7','41'];
var valores_edad4_6 = [ '7', '3', '4','50'];


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

jQuery(document).ready(function(){
    /*Activador de la primer tab*/
    document.getElementById("defaultOpen6").click();
})
function openCity6(evt6, cityName6) {
    var i6, tabcontent6, tablinks6;
    tabcontent6 = document.getElementsByClassName("resultados6");
    for (i6 = 0; i6 < tabcontent6.length; i6++) {
        tabcontent6[i6].style.display = "none";
    }
    tablinks6 = document.getElementsByClassName("tablinks6");
    for (i6 = 0; i6 < tablinks6.length; i6++) {
        tablinks6[i6].className = tablinks6[i6].className.replace(" active","");
    }
    document.getElementById(cityName6).style.display = "block";
	
	for(var i = 0; i < 9 ;i++)
	{
		$('#nacional6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_6[i] });
		$('#barranquilla6 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_6[i] });
		$('#bogota6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_6[i] });	
		$('#bucaramanga6 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_6[i] });
		$('#cali6 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_6[i] });
		$('#cartagena6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_6[i] });
		$('#manizales6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_6[i] });
		$('#medellin6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_6[i] });
		$('#pereira6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_6[i] });
	}
	
    evt6.currentTarget.className += " active";
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
	
	for(var i = 0 ; i < 15 ;i++){					
		$('#nacional6		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_6[i] });
		$('#barranquilla6 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_6[i] });
		$('#bogota6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_6[i] });	
		$('#bucaramanga6 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_6[i] });
		$('#cali6 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_6[i] });
		$('#cartagena6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_6[i] });
		$('#manizales6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_6[i] });
		$('#medellin6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_6[i] });
		$('#pereira6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_6[i] });
		$('#hombre6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_6[i] });
		$('#mujer6 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_6[i] });
		$('#edad1_6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_6[i] });
		$('#edad2_6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_6[i] });
		$('#edad3_6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_6[i] });
		$('#edad4_6 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_6[i] });
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
		console.log('Click Genero');

		$(".bt_genero").addClass( "bt_on" );
		$(".menuGenero").css("display", "inherit");
	});
	
	$(".bt_edad").click(function(){
		apagar_pesta()
		console.log('Click Edad');

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