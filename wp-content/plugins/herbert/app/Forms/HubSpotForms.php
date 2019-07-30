<?php
namespace App\Forms;
/**
 * Clase para hacer submit a los formularios de hubspot
 */
class HubSpotForms
{
	private $portalId = "2638078";

	public function getPortalId()
	{
		return $this->portalId;
	}

	public function getUrlForm($formId, $portalId=0)
	{
		$portal = ($portalId == 0)?$this->getPortalId():$portalId;
		return 'https://forms.hubspot.com/uploads/form/v2/'.$portal.'/'.$formId;
	}


	public function getContext()
	{
		$hubspotutk      = $_COOKIE['hubspotutk'];
		$ip_addr         = $_SERVER['REMOTE_ADDR'];

		$hs_context      = array(
		    'hutk' => $hubspotutk,
		    'ipAddress' => $ip_addr,
		    'pageUrl' => 'https://blog.tigounebusiness.co',
		    'pageName' => 'TigoUne Business'
		);

		return $hs_context;
	}

	public function submitSuscription($data)
	{

		try{
			$formId = "cfcf10ae-f3bc-4d49-a80c-9aea9885faf5";
			$form = $this->getUrlForm($formId);

			$str_post = "firstname=" . urlencode($data["firstname"]) 
		    . "&lastname=" . urlencode($data["lastname"]) 
		    . "&email=" . urlencode($data["email"]) 
		    . "&username=" . urlencode($data["username"])
		    . "&hs_analytics_first_touch_converting_campaign=". urlencode("63033c87-c248-4b17-9e9d-9b4d5c762c32");
			$ch = @curl_init();
				@curl_setopt($ch, CURLOPT_POST, true);
				@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
				@curl_setopt($ch, CURLOPT_URL, $form);
				@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				    'Content-Type: application/x-www-form-urlencoded'
			));

			@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response    = @curl_exec($ch);
			$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
			@curl_close($ch);
			return $status_code . " " . $response;

		}catch(\Exception $e)
		{
			return array("error"=>true,"message"=>$e->getMessage());
		}
	}

	public function submitLanding($data,$formId)
	{

		try{
			$form = $this->getUrlForm($formId,4059876);

			$ch = @curl_init();
				@curl_setopt($ch, CURLOPT_POST, true);
				@curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				@curl_setopt($ch, CURLOPT_URL, $form);
				@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				    'Content-Type: application/x-www-form-urlencoded'
			));

			@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response    = @curl_exec($ch);
			$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
			@curl_close($ch);
			return $status_code . " " . $response;

		}catch(\Exception $e)
		{
			return array("error"=>true,"message"=>$e->getMessage());
		}
	}
}