<?php

/**
 * @wordpress-plugin
 * Plugin Name:       AriadnaHubSpot
 * Plugin URI:        http://plugin-name.com/
 * Description:       A plugin.
 * Version:           1.0.0
 * Author:            Author
 * Author URI:        http://author.com/
 * License:           MIT
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/getherbert/framework/bootstrap/autoload.php';

use App\Controllers\Forms\SubcriptionController;
use App\Controllers\ReadLater\ReadLaterController;

add_action( 'user_register', 'save_update_user', 10, 1 );
add_action( 'profile_update', 'save_update_user', 10, 1 );
function save_update_user( $user_id ) {
	(new SubcriptionController())->saveUser($user_id);
}

function get_list_by_user_id_and_post_id( $user_id,$post_id ) {
	return (new ReadLaterController())->getListByUserIdAndPostId($user_id,$post_id);
}

function get_list_by_user_id( $user_id ) {
	return (new ReadLaterController())->getListByUserId($user_id);
}

function getCategoriesPost($postId)
{
	$categories = wp_get_post_categories($postId);
	$allCategories = array();
	foreach($categories as $category)
	{
		$cat = get_category( $category );
		$allCategories[] = array( 'id'=>$cat->term_id,'name' => $cat->name, 'slug' => $cat->slug );
	}

	return $allCategories;
}

function getPostTags($postId)
{
	$tag_ids = wp_get_post_tags( $postId, array( 'fields' => 'ids' ) );
	$allTags = array();
	foreach($tag_ids as $id)
	{
		$tag = get_tag($id);
		$allTags[] = array( 'id'=>$tag->term_id,'name' => $tag->name, 'slug' => $tag->slug );
	}

	return $allTags;
}
