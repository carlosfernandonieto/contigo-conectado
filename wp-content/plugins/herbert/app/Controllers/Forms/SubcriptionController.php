<?php
namespace App\Controllers\Forms;

use App\Forms\HubSpotForms;
use App\Clients\Mailin;

/**
 * Controlador de Suscripciones
 */
class SubcriptionController
{
	public function saveUser($user_id)
	{
		try{
			$user = get_user_by('ID', $user_id);
			$userMeta = get_user_meta($user_id);
			$data = array(
				"username"=>$user->user_login,
				"firstname"=>$userMeta["first_name"][0],
				"lastname"=>$userMeta["last_name"][0],
				"email"=>$user->user_email
			);
			$result = (new HubSpotForms())->submitSuscription($data);
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage());
		}
	}

	public function test()
	{
		try{
			$mailin = new Mailin('roberto.striedinger@ariadnacg.com', 'ZGQr4DCsBWKHO9Yv');
			$mailin->
			addTo('carlosmiguel782@gmail.com', 'Carlos Martes')->
			setFrom('tigoune@tigounebusiness.co', 'Tigo Une')->
			setReplyTo('roberto.striedinger@ariadnacg.com','Roberto Striedinger')->
			setSubject('Prueba SMTP')->
			setText('Hola')->
			setHtml('<strong>Hola</strong>');
			$res = $mailin->send();
			var_dump($res);
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage());
		}
	}
}
