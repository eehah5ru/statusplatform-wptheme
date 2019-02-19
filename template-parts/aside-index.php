<h2><a href="<?php srp_the_permalink_by_path('about'); ?>"><?php pll_e('About'); ?></a></h2>

<h2><a href="<?php srp_the_permalink_by_path('community'); ?>"><?php pll_e('Community'); ?></a></h2>

<h2 class="search"><?php pll_e('Search'); ?></h2>

<?php $tags = get_tags(); if ( $tags ) { ?>
  <p cass="tags">
    <?php foreach($tags as $tag) {?>
      <a class="tag <?php if(is_tag() && (get_queried_object()->term_id == $tag->term_id)): echo "active"; endif; ?>" href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo trim($tag->name); ?></a>
    <?php } ?>
  </p>
<?php } ?>
