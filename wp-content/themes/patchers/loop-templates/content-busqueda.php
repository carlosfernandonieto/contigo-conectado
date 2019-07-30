<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('mb-4'); ?> id="post-<?php the_ID(); ?>">

	<div class="container">
        <div class="row">
        <div class="col-12 col-lg-4 px-0">
        <?php the_post_thumbnail('full', array('class' => 'h-100')); ?>
        </div>
        <div class="col-12 col-lg-8 border">
            <header class="entry-header">
                <?php
                the_title(
                    sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                    '</a></h2>'
                );
                ?>
                <?php if ( 'post' == get_post_type() ) : ?>

                <?php endif; ?>
            </header><!-- .entry-header -->
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        </div>
        </div>
    </div>

</article><!-- #post-## -->
