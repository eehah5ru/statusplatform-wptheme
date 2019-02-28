<?php
/*
   Template Name: Home
*/

global $post;

get_header(); ?>

<div class="main-container">
    <div class="main-grid sidebar-left">
    <aside class="sidebar index home">
      <?php get_template_part( 'template-parts/aside', 'index' ); ?>
    </aside>
        <main class="main-content index">
      <?php query_posts(array('category_name' => 'texts')); ?>
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
