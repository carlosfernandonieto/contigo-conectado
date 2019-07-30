<?php
namespace App\Controllers\ReadLater;

use App\Models\ReadLater;
use Herbert\Framework\Http;

/**
 * Controlador de Suscripciones
 */
class ReadLaterController
{
	public function getList(Http $http)
	{
		try{

			$list = $this->getListByUserIdAndPostId($http->input("user_id"),$http->input("post_id"));
			return $list;
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage());
		}
	}

	public function getListByUserIdAndPostId($user_id,$post_id)
	{
		try{

			$list = ReadLater::where("user_id","=",$user_id)
			->where("post_id","=",$post_id)->get()->toArray();
			return $list;
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage());
		}
	}

	public function getListByUserId($user_id)
	{
		try{

			$list = ReadLater::where("user_id","=",$user_id)->get()->toArray();
			return $list;
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage());
		}
	}

	public function addPost(Http $http)
	{
		try{
			if(count($this->getListByUserIdAndPostId($http->input("user_id"),$http->input("post_id"))) == 0)
			{
				$result = (new ReadLater())->create(array(
					"user_id"=>$http->input("user_id"),
					"post_id"=>$http->input("post_id")
				));
				$this->updateCategoriesHubSpot();
				return array("status"=>200,"message"=>$result);
			}else{
				return $this->deletePostReadLater($http);
			}
			
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage()); 
		}
	}

	public function deletePostReadLater(Http $http){
		try{

			if(count($this->getListByUserIdAndPostId($http->input("user_id"),$http->input("post_id"))) == 0)
			{
				$rtn = $this->addPost($http);
				$this->updateCategoriesHubSpot();
				return $rtn;
			}else{
				$result = ReadLater::where("user_id","=",$http->input("user_id"))->where("post_id","=",$http->input("post_id"))->first();
				$rtn = $result->delete();
				$this->updateCategoriesHubSpot();
				return array("status"=>200,"message"=>$rtn );
			}
			
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage()); 
		}
	}

	public function updateCategoriesHubSpot()
	{
		try{

			$list = get_list_by_user_id(get_current_user_id());
			$user = get_userdata( get_current_user_id() );
			$allCategories = array();
			foreach ($list as $key => $article)
			{
				$categories = wp_get_post_categories($article["post_id"]);
				foreach($categories as $category)
				{
					$allCategories[] = $category->name;
				}
			}

			$allCategories = array_unique($allCategories);
			$sAllCategories = "";
			foreach($allCategories as $category)
			{
				
				if(strcmp($sAllCategories,"") == 0)
				{
					$sAllCategories = $category;
				}else{
					$sAllCategories = ",".$category;
				}
			}

			$str_post = "email=" . urlencode($user->user_email) 
			. "&categories=" . urlencode($sAllCategories);
			
			//replace the values in this URL with your portal ID and your form GUID
			$endpoint = 'https://forms.hubspot.com/uploads/form/v2/2638078/1e467886-0470-4564-bf2d-d481797d79ce';

			$ch = @curl_init();
			@curl_setopt($ch, CURLOPT_POST, true);
			@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
			@curl_setopt($ch, CURLOPT_URL, $endpoint);
			@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/x-www-form-urlencoded'
			));
			@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
			$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
			@curl_close($ch);
			
		}catch(\Exception $e)
		{
			return array("error"=>error,"message"=>$e->getMessage()); 
		}
	}


}
