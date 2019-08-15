// JavaScript Document


function esconderflechas(){
		$( ".flecha_video" ).css( {'opacity':'0'} );		
	}
	
	$( document ).ready(function() {

	var altocont1 = $("body").height();
	var altocont2 = $(".cont_videos_list").height();
	var altocont = (altocont1 - altocont2)-150;
	//alert (altocont2);

		
		$( "#video_conti_01" ).click(function() {
			$(".cont_video_izq").html('<div class="video-responsive">'+
				'<iframe width="560" height="315" src="https://www.youtube.com/embed/Rx2Rk42xMtU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>'+
				'<div class="desc_video_izq"><div class="nombre_video_izq">#ContigoConectados</div>'+
				'<div class="desc_video_izq ">En TigoUne desarrollamos una investigación sobre los riesgos y oportunidades del uso de Internet en niños y adolescentes de Colombia, donde logramos reconocer la importancia y el impacto que tiene en la vida cotidiana. Gracias a los resultados fue posible la edificación de nuestra estrategia de Responsabilidad Social Empresarial.</div></div>'
			);
			esconderflechas();
			$( "#video_conti_01 .flecha_video" ).css( {'opacity':'1'} );
			jQuery("html, body").animate({ scrollTop: altocont }, "fast");
		});
		
		$( "#video_conti_02" ).click(function() {
			$(".cont_video_izq").html('<div class="video-responsive">'+
				'<iframe width="560" height="315" src="https://www.youtube.com/embed/mSBFu-dpzjM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>'+
				'<div class="desc_video_izq"><div class="nombre_video_izq">Marcelo Cataldo</div>'+
				'<div class="desc_video_izq ">De la mano de la universidad EAFIT realizamos una investigación sobre la relación de los niños y adolescentes colombianos con el Internet, lo que nos permitió enfocar nuestra estrategia de RSE en promocionar su uso responsable y creativo.</div></div>'
			);
			esconderflechas();
			$( "#video_conti_02 .flecha_video" ).css( {'opacity':'1'} );
			jQuery("html, body").animate({ scrollTop: altocont }, "fast");
		});
		
		$( "#video_conti_03" ).click(function() {
			$(".cont_video_izq").html('<div class="video-responsive">'+
				'<iframe width="560" height="315" src="https://www.youtube.com/embed/93UvNKUmjak?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>'+
				'<div class="desc_video_izq"><div class="nombre_video_izq">Viviana Limpias</div>'+
				'<div class="desc_video_izq ">Directora de Unicef para Colombia, forma parte del grupo de ponentes en la presentación de nuestra estrategia de Responsabilidad Social Empresarial, presentando un análisis global sobre el aumento de la influencia del Internet a través de un debate académico entre las oportunidades y las amenazas que representa el uso de éste para los niños y adolescentes.</div></div>'
			);
			esconderflechas();
			$( "#video_conti_03 .flecha_video" ).css( {'opacity':'1'} );
			jQuery("html, body").animate({ scrollTop: altocont }, "fast");
		});
		
		$( "#video_conti_04" ).click(function() {
			$(".cont_video_izq").html('<div class="video-responsive">'+
				'<iframe width="560" height="315" src="https://www.youtube.com/embed/lNLbtFirpdo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>'+
				'<div class="desc_video_izq"><div class="nombre_video_izq">Charo Sádaba</div>'+
				'<div class="desc_video_izq ">Decana de la Facultad de Comunicaciones de la Universidad de Navarra, España, experta en menores y pantallas, es ponente en la presentación de la nueva estrategia de Responsabilidad Social Empresarial de TigoUne 2018, y nos habla sobre el papel de los padres y cuidadores en el mundo digital.</div></div>'
			);
			esconderflechas();
			$( "#video_conti_04 .flecha_video" ).css( {'opacity':'1'} );
			jQuery("html, body").animate({ scrollTop: altocont }, "fast");
		});
		
		$( "#video_conti_05" ).click(function() {
			$(".cont_video_izq").html('<div class="video-responsive">'+
				'<iframe width="560" height="315" src="https://www.youtube.com/embed/IN1KgyoAr4I?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>'+
				'<div class="desc_video_izq"><div class="nombre_video_izq">Gustavo Entrala</div>'+
				'<div class="desc_video_izq ">Experto en tendencias, innovación y branding, es uno de los ponentes en la presentación de la nueva estrategia de responsabilidad social empresarial de TigoUne en el 2018. En esta ocasión, nos habla sobre sus planteamiento en ciudadanía digital y los diferentes comportamientos en Internet.</div></div>'
			);
			esconderflechas();
			$( "#video_conti_05 .flecha_video" ).css( {'opacity':'1'} );
			jQuery("html, body").animate({ scrollTop: altocont }, "fast");
		});
		
		$( "#video_conti_06" ).click(function() {
			$(".cont_video_izq").html('<div class="video-responsive">'+
				'<iframe width="560" height="315" src="https://www.youtube.com/embed/VdNi0J4hs60?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>'+
				'<div class="desc_video_izq"><div class="nombre_video_izq">Xavier Carbonell</div>'+
				'<div class="desc_video_izq ">Doctor en psicología y profesor de la Universidad Ramón Llull, nos da una consideración crítica sobre el uso de celulares, redes sociales y videojuegos como conductas adictivas en la presentación de la estrategia de Responsabilidad Social Empresarial de TigoUne de 2018.</div></div>'
			);
			esconderflechas();
			$( "#video_conti_06 .flecha_video" ).css( {'opacity':'1'} );
			jQuery("html, body").animate({ scrollTop: altocont }, "fast");
		});
		
});