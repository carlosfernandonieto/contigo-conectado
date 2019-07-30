<?php
namespace App\Controllers\Forms;

use App\Forms\HubSpotForms;
use Herbert\Framework\Http;

/**
 * Controlador de Suscripciones
 */
class LandingPageController
{
	public function saveUser(Http $http)
	{
		try{
			header('Access-Control-Allow-Origin: *');
			$fields = $http->input("fields");
			$strFields = "";
			$formId = 0;
			foreach ($fields as $key => $field) {
				if(strcmp($field["name"], "formId")==0)
				{
					$formId = $field["value"];
				}else{
					if(strcmp($strFields, "")==0)
					{
						$strFields = $field["name"]."=".urlencode($field["value"]);
					}else{
						$strFields .= "&".$field["name"]."=".urlencode($field["value"]);
					}
				}
				
			}

			return (new HubSpotForms())->submitLanding($strFields,$formId);
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage());
		}
	}
}
