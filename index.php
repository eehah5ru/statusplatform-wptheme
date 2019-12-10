<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

global $post;

get_header(); ?>

<div class="main-container">
	<div class="main-grid sidebar-left">
    <aside class="sidebar index home">
      <?php get_template_part( 'template-parts/aside', 'index' ); ?>
    </aside>
		<main class="main-content index">
      <?php query_posts(array('category_name' => 'texts', 'posts_per_page'=> -1)); ?>
		  <?php if ( have_posts() ) : ?>
			  <?php /* Start the Loop */ ?>
			  <?php while ( have_posts() ) : the_post(); ?>
				  <?php get_template_part( 'template-parts/preview', srp_get_post_format() ); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?> 
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>
		</main>
	</div>
</div>
<?php get_footer();
