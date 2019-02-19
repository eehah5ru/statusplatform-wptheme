<?php $authors = get_post_meta(get_the_ID(), "authors", false); ?>

<?php if (!empty($authors)): ?>
  <div class="authors">
    <?php foreach ( $authors as $author) : $author_page = get_page_by_title(trim($author),  "OBJECT", 'post'); ?>
      <a class="author" href="<?php echo post_permalink($author_page->ID); ?>"><?php echo trim($author); ?></a>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<?php foundationpress_entry_meta(); ?>

<?php $tags = get_the_tags(); if ( $tags ) { ?>
  <p cass="tags">
    <?php foreach($tags as $tag) {?>
      <a class="tag" href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo trim($tag->name); ?></a>
    <?php } ?>
  </p>
<?php } ?>
