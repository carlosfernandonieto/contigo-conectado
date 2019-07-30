<?php
/**
 * HubSpot
 */
class HubSpot
{
	private $grantType = "authorization_code";
	private $clientId;
	private $clientSecret;
	private $redirectUri;
	private $code;
	
	public function getGrantType()
	{
		return $this->grantType;
	}

	public function setGrantType($grantType)
	{
		$this->grantType = $grantType;
	}

	public function getClientId()
	{
		return $this->clientId;
	}

	public function getClientSecret()
	{
		return $this->clientSecret;
	}

	public function getRedirectUri()
	{
		return $this->redirectUri;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function getToken()
	{
		try{
			$postdata = http_build_query(array(
				"grant_type"=>$this->getGrantType(),
				"client_id"=>$this->getClientId(),
				"client_secret"=>$this->getClientSecret(),
				"redirect_uri"=>$this->getRedirectUri(),
				"code"=>$this->getCode();
			));

			$opts = array('http' =>
			    array(
			        'method'  => 'POST',
			        'header'  => 'Content-type: application/x-www-form-urlencoded',
			        'content' => $postdata
			    )
			);

			$context  = stream_context_create($opts);

			$token = file_get_contents('https://api.hubapi.com/oauth/v1/token', false, $context);

		}catch(\Exception $e)
		{
			return array("error"=>true,"message"=>$e->getMessage());
		}
	}
}