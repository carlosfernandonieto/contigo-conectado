<?php
namespace App\Controllers\Landings;

/**
 * Controlador de Suscripciones
 */

use Herbert\Framework\Http;

class LandingPagesController
{
	public function viewContigoConectados(Http $request)
	{
		$ciudad = $request->input("ciudad");
		if($ciudad == null){
			$ciudad = "pereira";
		}

		if(strcmp($ciudad,"bogota")==0){
			$ciudad = "pereira";
		}

		if(strcmp($ciudad,"medellin")==0){
			$ciudad = "pereira";
		}

		if(strcmp($ciudad,"cali")==0){
			$ciudad = "pereira";
		}

		if(strcmp($ciudad,"barranquilla")==0){
			$ciudad = "pereira";
		}

		if(strcmp($ciudad,"cartagena")==0){
			$ciudad = "pereira";
		}

		if(strcmp($ciudad,"bucaramanga")==0){
			$ciudad = "pereira";
		}

		return view('@App/Tigo/contigo_conectados.twig',["ciudad"=>$ciudad]);
	}
	
	public function viewContigoConectadosStreaming()
	{
		header('Location: https://www.facebook.com/Tigo.Col/videos/1763353723712342/');
		return view('@App/Tigo/contigo_conectados_streaming.twig',[]);
	}

	public function viewContigoConectadosCalendar()
	{
		
		return view('@App/Tigo/contigo_conectados_calendar.twig',[]);
	}

	public function viewResult()
	{
		return redirect('/resultados');
	}

	public function viewHome()
	{
		header("Location: https://phpstack-293961-914032.cloudwaysapps.com/",true);
		exit;
	}

}
