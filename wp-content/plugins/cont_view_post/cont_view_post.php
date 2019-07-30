<?php

/**
 * @wordpress-plugin
 * Plugin Name:       AriadnaCountViewPost
 * Plugin URI:        
 * Description:       Plugin para contar las vista de los post
 * Version:           1.0.0
 * Author:            Carlos Miguel Martes
 * Author URI:        
 * License:           
 */

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return 0;
    }
    return $count;
}


function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}



add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Vistas');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
        echo round(getPostViews(get_the_ID())/2, 0, PHP_ROUND_HALF_UP);
    }
}