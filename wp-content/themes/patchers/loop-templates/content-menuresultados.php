<?php
/**
 * Blank content partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<div class="container text-center">
<!--Menu-->
        <?php 
        wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container_class' => 'navbar-collapse my-4',
                'container_id'    => '',
                'menu_class'      => 'nav justify-content-center',
                'fallback_cb'     => '',
                'menu'         => 'categorias_resultados',
                'depth'           => 1,
                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        ) );
        ?>
</div>