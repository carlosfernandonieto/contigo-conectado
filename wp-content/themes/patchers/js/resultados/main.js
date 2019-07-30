//USO Y ACCESO----------------------- valores y textos

var valores_total = ['55','28','75','53','11','33','43','19','43'];
var valores_barra = ['69','50','58','47','41','92','28','54','69'];
var valores_bogot = ['61','25','75','48','18','30','50','25','46'];
var valores_bucar = ['65','24','72','63', '2','37','43','14','35'];
var valores_calii = ['61','28','72','63', '2','17','51','10','45'];
var valores_carta = ['37','18','69','40', '8','27','44', '6','27'];
var valores_maniz = ['50','21','92','46', '4','38','46','17','42'];
var valores_medel = ['50','27','79','52', '8','22','43','17','40'];
var valores_perei = ['63','33','80','64', '8','16','48','13','45'];
var valores_hombr = ['56','27','74','54','13','32','43','21','59'];
var valores_mujer = ['55','30','75','52', '9','35','44','18','26'];
var valores_edad1 = ['61','22','62','53', '8','32','34','18','48'];
var valores_edad2 = ['57','22','74','50', '8','37','46','17','39'];
var valores_edad3 = ['57','35','82','53','12','32','40','21','41'];
var valores_edad4 = ['47','36','82','55','15','33','53','22','44'];


var valores_total_2 = ['46','36','18'];
var valores_barra_2 = ['42','37','21'];
var valores_bogot_2 = ['48','48', '4'];
var valores_bucar_2 = ['45','36','18'];
var valores_calii_2 = ['56','36', '8'];
var valores_carta_2 = ['43','43','14'];
var valores_maniz_2 = ['50','25','25'];
var valores_medel_2 = ['47','31','22'];
var valores_perei_2 = ['37','38','26'];
var valores_hombr_2 = ['47','36','17'];
var valores_mujer_2 = ['46','36','18'];
var valores_edad1_2 = ['26','41','33'];
var valores_edad2_2 = ['28','50','22'];
var valores_edad3_2 = ['53','38','9'];
var valores_edad4_2 = ['79','15','7'];


var valores_total_3 = ['75','85','42','43','25','69','82','46'];
var valores_barra_3 = ['87','49','37', '6','70','88','39', '0'];
var valores_bogot_3 = ['84','94','44','33','14','67','85','37'];
var valores_bucar_3 = ['63','86','51','55', '6','76','88','65'];
var valores_calii_3 = ['72','92','27','51','10','66','92','58'];
var valores_carta_3 = ['54','83','16','47', '4','57','88','36'];
var valores_maniz_3 = ['50','83','67','75', '8','63','96','54'];
var valores_medel_3 = ['83','90','47','45','33','58','83','41'];
var valores_perei_3 = ['64','81','48','56','17','68','88','53'];
var valores_hombr_3 = ['70','86','43','49','25','71','80','50'];
var valores_mujer_3 = ['80','84','41','38','24','67','83','42'];
var valores_edad1_3 = ['62','78','25','41','24','50','76','22'];
var valores_edad2_3 = ['68','81','37','47','26','60','82','39'];
var valores_edad3_3 = ['79','89','48','44','23','78','84','64'];
var valores_edad4_3 = ['90','90','60','42','27','88','84','59'];


var valores_total_4 = ['3','31'];
var valores_barra_4 = ['2','58'];
var valores_bogot_4 = ['3','26'];
var valores_bucar_4 = ['3','9'];
var valores_calii_4 = ['4','3'];
var valores_carta_4 = ['3','22'];
var valores_maniz_4 = ['3','16'];
var valores_medel_4 = ['3','42'];
var valores_perei_4 = ['3','13'];
var valores_hombr_4 = ['3','33'];
var valores_mujer_4 = ['3','27'];
var valores_edad1_4 = ['1','46'];
var valores_edad2_4 = ['2','34'];
var valores_edad3_4 = ['4','19'];
var valores_edad4_4 = ['5','5'];



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
	
	for(var i = 0; i < 15 ;i++)
	{
		jQuery('#nacional1		.valor_valor_'+(i+1)).animateNumber({ number: valores_total[i] });
		jQuery('#barranquilla1 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra[i] });
		jQuery('#bogota1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot[i] });	
		jQuery('#bucaramanga1 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar[i] });
		jQuery('#cali1 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii[i] });
		jQuery('#cartagena1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta[i] });
		jQuery('#manizales1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz[i] });
		jQuery('#medellin1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel[i] });
		jQuery('#pereira1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei[i] });
		
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
	
	for(var i = 0; i < 15 ;i++)
	{
		jQuery('#nacional2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_2[i] });
		jQuery('#barranquilla2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_2[i] });
		jQuery('#bogota2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_2[i] });	
		jQuery('#bucaramanga2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_2[i] });
		jQuery('#cali2 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_2[i] });
		jQuery('#cartagena2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_2[i] });
		jQuery('#manizales2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_2[i] });
		jQuery('#medellin2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_2[i] });
		jQuery('#pereira2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_2[i] });
		
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
	
	for(var i = 0; i < 15 ;i++)
	{
		jQuery('#nacional3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_3[i] });
		jQuery('#barranquilla3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_3[i] });
		jQuery('#bogota3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_3[i] });	
		jQuery('#bucaramanga3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_3[i] });
		jQuery('#cali3 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_3[i] });
		jQuery('#cartagena3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_3[i] });
		jQuery('#manizales3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_3[i] });
		jQuery('#medellin3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_3[i] });
		jQuery('#pereira3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_3[i] });
		
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
	
	for(var i = 0; i < 15 ;i++)
	{
		jQuery('#nacional4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_4[i] });
		jQuery('#barranquilla4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_4[i] });
		jQuery('#bogota4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_4[i] });	
		jQuery('#bucaramanga4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_4[i] });
		jQuery('#cali4 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_4[i] });
		jQuery('#cartagena4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_4[i] });
		jQuery('#manizales4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_4[i] });
		jQuery('#medellin4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_4[i] });
		jQuery('#pereira4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_4[i] });		
	}

    evt4.currentTarget.className += " active";
}

//Menu flotante---------------------------------------------------------------------------------------

function no_listaVisible(){	
	for(var i = 0; i < 5 ;i++){			
		jQuery('#nacional'+i)	.css("display", "none");
		jQuery('#barranquilla'+i).css("display", "none");
		jQuery('#bogota'+i)		.css("display", "none");
		jQuery('#bucaramanga'+i)	.css("display", "none");
		jQuery('#cali'+i)		.css("display", "none");
		jQuery('#cartagena'+i)	.css("display", "none");
		jQuery('#manizales'+i)	.css("display", "none");
		jQuery('#medellin'+i)	.css("display", "none");
		jQuery('#pereira'+i)		.css("display", "none");
		jQuery('#hombre'+i)		.css("display", "none");
		jQuery('#mujer'+i)		.css("display", "none");
		jQuery('#edad1_'+i)		.css("display", "none");
		jQuery('#edad2_'+i)		.css("display", "none");
		jQuery('#edad3_'+i)		.css("display", "none");
		jQuery('#edad4_'+i)		.css("display", "none");
	}		
}

function menugris(){
	jQuery(".nacional_flo")		.css("filter", "grayscale(100)");
	jQuery(".barranquilla_flo")	.css("filter", "grayscale(100)");
	jQuery(".bogota_flo")		.css("filter", "grayscale(100)");
	jQuery(".bucaramanga_flo")	.css("filter", "grayscale(100)");
	jQuery(".cali_flo")			.css("filter", "grayscale(100)");
	jQuery(".cartagena_flo")		.css("filter", "grayscale(100)");
	jQuery(".manizales_flo")		.css("filter", "grayscale(100)");
	jQuery(".medellin_flo")		.css("filter", "grayscale(100)");
	jQuery(".pereira_flo" )		.css("filter", "grayscale(100)");
	jQuery('.genero_h')			.css("filter", "grayscale(100)");
	jQuery('.genero_m')			.css("filter", "grayscale(100)");
	jQuery('.edad_1')			.css("filter", "grayscale(100)");
	jQuery('.edad_2')			.css("filter", "grayscale(100)");
	jQuery('.edad_3')			.css("filter", "grayscale(100)");
	jQuery('.edad_4')			.css("filter", "grayscale(100)");
}

function listaVisible(id_city){
	for(var i = 0; i < 16 ;i++){
		jQuery(id_city+i).css("display", "inherit");			
	}
}

function for_cambio(){
	esconder_menu();
	
	for(var i = 0 ; i < 15 ;i++){					
		jQuery('#nacional1		.valor_valor_'+(i+1)).animateNumber({ number: valores_total[i] });
		jQuery('#barranquilla1 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra[i] });
		jQuery('#bogota1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot[i] });	
		jQuery('#bucaramanga1 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar[i] });
		jQuery('#cali1 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii[i] });
		jQuery('#cartagena1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta[i] });
		jQuery('#manizales1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz[i] });
		jQuery('#medellin1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel[i] });
		jQuery('#pereira1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei[i] });
		jQuery('#hombre1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr[i] });
		jQuery('#mujer1 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer[i] });
		jQuery('#edad1_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1[i] });
		jQuery('#edad2_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2[i] });
		jQuery('#edad3_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3[i] });
		jQuery('#edad4_1 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4[i] });
	}
		
	for(var i = 0 ; i < 15 ;i++){					
		jQuery('#nacional2		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_2[i] });
		jQuery('#barranquilla2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_2[i] });
		jQuery('#bogota2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_2[i] });	
		jQuery('#bucaramanga2 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_2[i] });
		jQuery('#cali2 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_2[i] });
		jQuery('#cartagena2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_2[i] });
		jQuery('#manizales2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_2[i] });
		jQuery('#medellin2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_2[i] });
		jQuery('#pereira2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_2[i] });
		jQuery('#hombre2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_2[i] });
		jQuery('#mujer2 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_2[i] });
		jQuery('#edad1_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_2[i] });
		jQuery('#edad2_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_2[i] });
		jQuery('#edad3_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_2[i] });
		jQuery('#edad4_2 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_2[i] });
	}
		
	for(var i = 0 ; i < 15 ;i++){					
		jQuery('#nacional3		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_3[i] });
		jQuery('#barranquilla3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_3[i] });
		jQuery('#bogota3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_3[i] });	
		jQuery('#bucaramanga3 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_3[i] });
		jQuery('#cali3 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_3[i] });
		jQuery('#cartagena3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_3[i] });
		jQuery('#manizales3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_3[i] });
		jQuery('#medellin3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_3[i] });
		jQuery('#pereira3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_3[i] });
		jQuery('#hombre3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_3[i] });
		jQuery('#mujer3 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_3[i] });
		jQuery('#edad1_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_3[i] });
		jQuery('#edad2_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_3[i] });
		jQuery('#edad3_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_3[i] });
		jQuery('#edad4_3 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_3[i] });
	}
	
	for(var i = 0 ; i < 15 ;i++){					
		jQuery('#nacional4		.valor_valor_'+(i+1)).animateNumber({ number: valores_total_4[i] });
		jQuery('#barranquilla4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_barra_4[i] });
		jQuery('#bogota4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_bogot_4[i] });	
		jQuery('#bucaramanga4 	.valor_valor_'+(i+1)).animateNumber({ number: valores_bucar_4[i] });
		jQuery('#cali4 			.valor_valor_'+(i+1)).animateNumber({ number: valores_calii_4[i] });
		jQuery('#cartagena4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_carta_4[i] });
		jQuery('#manizales4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_maniz_4[i] });
		jQuery('#medellin4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_medel_4[i] });
		jQuery('#pereira4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_perei_4[i] });
		jQuery('#hombre4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_hombr_4[i] });
		jQuery('#mujer4 			.valor_valor_'+(i+1)).animateNumber({ number: valores_mujer_4[i] });
		jQuery('#edad1_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad1_4[i] });
		jQuery('#edad2_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad2_4[i] });
		jQuery('#edad3_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad3_4[i] });
		jQuery('#edad4_4 		.valor_valor_'+(i+1)).animateNumber({ number: valores_edad4_4[i] });
	}
	
}

function apagar_pesta(){
	jQuery(".bt_ciudad, .bt_genero, .bt_edad").removeClass("bt_on");
	jQuery(".menuCiudad, .menuGenero, .menuEdad").css("display", "none");
	jQuery(".menuFlotante").css("margin-bottom", "0");
}

function esconder_menu(){
	var alturaMenu = jQuery(".menuFlotante").height();	
	jQuery(".menuFlotante").css("margin-bottom", (-(alturaMenu))+10);	
}

jQuery(document).ready(function(){
	
	jQuery(".nacional_flo").css("filter", "none");
	
	jQuery(".bt_ciudad").click(function(){
		apagar_pesta();
		jQuery(".bt_ciudad").addClass("bt_on" );
		jQuery(".menuCiudad").css("display", "inherit");	
	});
	
	jQuery(".bt_genero").click(function(){
		apagar_pesta()
		jQuery(".bt_genero").addClass( "bt_on" );
		jQuery(".menuGenero").css("display", "inherit");
	});
	
	jQuery(".bt_edad").click(function(){
		apagar_pesta()
		jQuery( ".bt_edad").addClass( "bt_on" );
		jQuery(".menuEdad").css("display", "inherit");	
	});
	
	//-----------------------------------------------------------------------------------------------
	
	jQuery(".nacional_flo").click(function(){		
		menugris();
		jQuery(".nacional_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#nacional');
		for_cambio();		
	});
	
	jQuery(".barranquilla_flo").click(function(){
		menugris();
		jQuery(".barranquilla_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#barranquilla');
		for_cambio();
		
	});
	
	jQuery(".bogota_flo").click(function(){
		menugris();
		jQuery(".bogota_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#bogota');
		for_cambio();		
	});
	
	jQuery(".bucaramanga_flo").click(function(){
		menugris();
		jQuery(".bucaramanga_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#bucaramanga');
		for_cambio();		
	});
	
	jQuery(".cali_flo").click(function(){
		menugris();
		jQuery(".cali_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#cali');
		for_cambio();		
	});
	
	jQuery(".cartagena_flo").click(function(){
		menugris();
		jQuery(".cartagena_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#cartagena');
		for_cambio();		
	});
	
	jQuery(".manizales_flo").click(function(){
		menugris();
		jQuery(".manizales_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#manizales');
		for_cambio();		
	});
	
	jQuery(".medellin_flo").click(function(){
		menugris();
		jQuery(".medellin_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#medellin');
		for_cambio();		
	});
	
	jQuery(".pereira_flo").click(function(){
		menugris();
		jQuery(".pereira_flo").css("filter", "none");
		no_listaVisible();
		listaVisible('#pereira');
		for_cambio();		
	});	
	
	jQuery(".genero_h").click(function(){
		menugris();
		jQuery(".genero_h").css("filter", "none");
		no_listaVisible();
		listaVisible('#hombre');
		for_cambio();		
	});
	
	jQuery(".genero_m").click(function(){
		menugris();
		jQuery(".genero_m").css("filter", "none");
		no_listaVisible();
		listaVisible('#mujer');
		for_cambio();		
	});
	
	jQuery(".edad_1").click(function(){		
		menugris();
		jQuery(".edad_1").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad1_');
		for_cambio();		
	});
	
	jQuery(".edad_2").click(function(){
		menugris();
		jQuery(".edad_2").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad2_');
		for_cambio();
		
	});
	
	jQuery(".edad_3").click(function(){
		menugris();
		jQuery(".edad_3").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad3_');
		for_cambio();		
	});
	
	jQuery(".edad_4").click(function(){
		menugris();
		jQuery(".edad_4").css("filter", "none");
		no_listaVisible();
		listaVisible('#edad4_');
		for_cambio();		
	});
	
	
})