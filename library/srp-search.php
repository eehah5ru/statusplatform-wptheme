<?php
// customize search results
function srp_search_customize($auery) {
  if ($query->is_search) {
    // disable limit
    $query->set('posts_per_page', -1);
  }

  return $query;
}
add_filter( 'pre_get_posts','srp_search_customize' );
?>
