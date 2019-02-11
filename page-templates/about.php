<?php
/*
   Template Name: About
 */

get_header(); ?>
<div class="main-container">
  <div class="main-grid">
    <main class="main-content-full-width about">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <header>
		        <h2 class="entry-title"><?php the_title(); ?></h2>
	        </header>
	        <div class="entry-content">
		        <?php the_content(); ?>
	        </div>
        </article>
      <?php endwhile; ?>
    </main>
  </div>
</div>
<?php get_footer();
