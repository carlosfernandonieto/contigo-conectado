//USO Y ACCESO----------------------- valores y textos

var valores_total = ['84'];
var valores_barra = ['77'];
var valores_bogot = ['85'];
var valores_bucar = ['80'];
var valores_calii = ['85'];
var valores_carta = ['82'];
var valores_maniz = ['88'];
var valores_medel = ['87'];
var valores_perei = ['88'];
var valores_hombr = ['87'];
var valores_mujer = ['81'];
var valores_edad1 = ['56'];
var valores_edad2 = ['88'];
var valores_edad3 = ['96'];
var valores_edad4 = ['98'];


var valores_total_2 = ['14', '7','22','16','18','15', '5', '3', '0', '3'];
var valores_barra_2 = [' 0','15','10','34','19','21', '0', '3', '0', '0'];
var valores_bogot_2 = ['15','14','18','14','15','19', '0', '4', '0', '2'];
var valores_bucar_2 = ['20', '4','21','14','26', '6', '8', '0', '0', '0'];
var valores_calii_2 = ['16', '0','20','19','21','13', '2', '0', '0','11'];
var valores_carta_2 = ['19', '2','20','16','15','18', '4', '2', '0', '4'];
var valores_maniz_2 = ['13', '0','33','17','25', '8', '4', '0', '0', '0'];
var valores_medel_2 = ['13', '8','25','12','14','15', '7', '4', '0', '3'];
var valores_perei_2 = ['13', '8','21','16','28','12', '3', '0', '0', '0'];
var valores_hombr_2 = ['11', '7','22','15','18','15', '6', '2', '0', '4'];
var valores_mujer_2 = ['16', '6','22','17','18','14', '3', '3', '0', '1'];
var valores_edad1_2 = ['42','15','27', '9', '4', '0', '0', '0', '0', '4'];
var valores_edad2_2 = ['11', '8','33','17','17', '9', '2', '0', '0', '3'];
var valores_edad3_2 = [ '2', '2','14','13','27','30', '4', '6', '0', '3'];
var valores_edad4_2 = [ '1', '3','13','24','23','19','13', '4', '0', '2'];


var valores_total_3 = ['26','1','1', '7','37', '8', '7','1','14'];
var valores_barra_3 = ['26','0','0', '9','33','10','22','0', '0'];
var valores_bogot_3 = ['29','2','0','11','21', '6','14','0','17'];
var valores_bucar_3 = ['23','0','2', '2','49', '2', '0','2','20'];
var valores_calii_3 = ['25','0','0', '8','40', '4', '8','0','16'];
var valores_carta_3 = ['19','0','0', '4','22','30', '7','0','19'];
var valores_maniz_3 = ['33','0','0', '8','42', '0', '4','0','13'];
var valores_medel_3 = ['29','1','0', '6','40', '6', '5','1','13'];
var valores_perei_3 = ['13','0','0','12','44','16', '4','0','13'];
var valores_hombr_3 = ['24','1','0', '6','42', '8', '9','1','11'];
var valores_mujer_3 = ['29','1','1', '8','32', '9', '4','1','17'];
var valores_edad1_3 = ['20','1','0', '3','21', '2','12','0','42'];
var valores_edad2_3 = ['23','0','0', '7','44', '8', '8','0','12'];
var valores_edad3_3 = ['22','1','1', '7','50','14', '5','0', '2'];
var valores_edad4_3 = ['41','0','0','11','33','11', '2','2', '1'];


var valores_total_4 = ['87','38','59','49','64','51','57','79'];
var valores_barra_4 = ['90','43','54','52','71','49','56','75'];
var valores_bogot_4 = ['94','32','73','55','70','46','66','82'];
var valores_bucar_4 = ['98','49','55','57','56','59','72','88'];
var valores_calii_4 = ['98','37','70','60','74','74','47','86'];
var valores_carta_4 = ['92','40','65','44','70','55','58','82'];
var valores_maniz_4 = ['75','29',' 8','46','71','50','46','75'];
var valores_medel_4 = ['80','35','54','43','60','43','54','75'];
var valores_perei_4 = ['82','40',' 6','53','56','55','68','84'];
var valores_hombr_4 = ['88','41','63','48','63','47','61','78'];
var valores_mujer_4 = ['87','34','56','50','66','54','54','80'];
var valores_edad1_4 = ['76','13','29','32','34','14','48','57'];
var valores_edad2_4 = ['84','21','48','39','55','40','48','77'];
var valores_edad3_4 = ['93','50','75','62','81','68','60','88'];
var valores_edad4_4 = ['95','66','85','64','86','81','73','96'];



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
	
	for(var i = 0; i < 10 ;i++)
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
	
	$(".nacional_flo").css("text-decoration", "underline");
	
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
		$(".nacional_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#nacional');
		for_cambio();		
	});
	
	$(".barranquilla_flo").click(function(){
		menugris();
		$(".barranquilla_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#barranquilla');
		for_cambio();
		
	});
	
	$(".bogota_flo").click(function(){
		menugris();
		$(".bogota_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#bogota');
		for_cambio();		
	});
	
	$(".bucaramanga_flo").click(function(){
		menugris();
		$(".bucaramanga_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#bucaramanga');
		for_cambio();		
	});
	
	$(".cali_flo").click(function(){
		menugris();
		$(".cali_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#cali');
		for_cambio();		
	});
	
	$(".cartagena_flo").click(function(){
		menugris();
		$(".cartagena_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#cartagena');
		for_cambio();		
	});
	
	$(".manizales_flo").click(function(){
		menugris();
		$(".manizales_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#manizales');
		for_cambio();		
	});
	
	$(".medellin_flo").click(function(){
		menugris();
		$(".medellin_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#medellin');
		for_cambio();		
	});
	
	$(".pereira_flo").click(function(){
		menugris();
		$(".pereira_flo").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#pereira');
		for_cambio();		
	});	
	
	$(".genero_h").click(function(){
		menugris();
		$(".genero_h").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#hombre');
		for_cambio();		
	});
	
	$(".genero_m").click(function(){
		menugris();
		$(".genero_m").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#mujer');
		for_cambio();		
	});
	
	$(".edad_1").click(function(){		
		menugris();
		$(".edad_1").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#edad1_');
		for_cambio();		
	});
	
	$(".edad_2").click(function(){
		menugris();
		$(".edad_2").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#edad2_');
		for_cambio();
		
	});
	
	$(".edad_3").click(function(){
		menugris();
		$(".edad_3").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#edad3_');
		for_cambio();		
	});
	
	$(".edad_4").click(function(){
		menugris();
		$(".edad_4").css("text-decoration", "underline");
		no_listaVisible();
		listaVisible('#edad4_');
		for_cambio();		
	});
	
	
})