<article class="preview 1 <?php echo srp_get_post_format(); ?>">
  <a href="<?php echo get_permalink(); ?>">
    <img data-interchange="[<?php the_post_thumbnail_url( 'small' ); ?>, small], [<?php the_post_thumbnail_url( 'medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'large' ); ?>, large], [<?php the_post_thumbnail_url( 'xlarge' ); ?>, xlarge]"/>
  </a>
  <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
    <p><?php echo get_the_excerpt() ?></p>
</article>
