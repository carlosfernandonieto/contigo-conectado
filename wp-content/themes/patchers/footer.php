<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="py-4" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
		<button class="open-button"><i class="fa fa-envelope"></i></button>
		<div class="form-popup bg-primary c-blanco" id="myForm">
			<a href="#" class="close-btn-f c-blanco d-block text-right pr-2 pt-2"><i class="fa fa-times"></i></a>
			<?php echo do_shortcode( '[sibwp_form id=1]' ); ?>
		</div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer c-blanco text-center" id="colophon">

					<div class="site-info">

					<?php dynamic_sidebar( 'footer-widget' ); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

