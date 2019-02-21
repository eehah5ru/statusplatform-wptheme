<?php
/*
   Template Name: Terms Of Use
 */

get_header(); ?>
<div class="main-container">
  <div class="main-grid">
    <aside class="sidebar">
    </aside>
    <main class="main-content terms-of-use">
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
