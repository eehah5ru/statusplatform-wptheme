<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();?>

<?php //get_template_part( 'template-parts/featured-image' );
?>
<div class="main-container">
	<div class="main-grid sidebar-left">
    <aside class="sidebar <?php echo srp_get_post_format(); ?>">      
      <?php get_template_part( 'template-parts/aside', srp_aside_tpl() ); ?>
    </aside>      
		<main class="main-content <?php echo srp_get_post_format(); ?>">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php // the_post_navigation(); ?>
			<?php endwhile; ?>
		</main>
    <?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
