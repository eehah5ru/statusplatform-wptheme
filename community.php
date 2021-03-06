<?php
/*
   Template Name: Community
 */

global $post;

get_header(); ?>


<div class="main-container">
  <div class="main-grid sidebar-left">
    <aside class="sidebar community">
      <h2><?php pll_e('Groups'); ?></h2>
      <?php query_posts(array('category_name' => 'groups', 'posts_per_page'=> -1, 'orderby' => 'title', 'order' => 'ASC')); ?>
      <?php while (have_posts()) : the_post(); ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </aside>
    <main class="main-content community">
      <h2><?php pll_e('People'); ?></h2>
      <?php query_posts(array('category_name' => 'people', 'posts_per_page'=> -1, 'orderby' => 'title', 'order' => 'ASC')); ?>
      <?php while (have_posts()) : the_post(); ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </main>
  </div>
</div>
<?php get_footer();
