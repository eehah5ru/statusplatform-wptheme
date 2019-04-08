<h1 class="community-link"><a href="<?php srp_the_permalink_by_path('community'); ?>"><?php pll_e('Community'); ?>:</a></h1>

<header class="small-title">
  <h2><a href="<?php srp_the_permalink_by_path('community'); ?>"><?php pll_e('Community'); ?></a> / </h2>
  <h2 class="entry-title">
    <?php the_title(); ?>
  </h2>
</header>

<h2 class="groups-label <?php echo("group" == srp_get_post_format() ? 'active' : ''); ?>">
  <?php pll_e('GROUPS'); ?>
</h2>
<?php $groups = get_posts(array("category_name" => "groups", 'posts_per_page'=> -1, 'orderby' => 'title', 'order' => 'ASC')); ?>
<div class="groups">
  <?php foreach($groups as $group): ?>
    <a class="group <?php echo srp_active_class($group) ?>" href="<?php echo get_permalink($group); ?>"><?php echo trim($group->post_title); ?></a>
  <?php endforeach; ?>
</div>


<h2 class="people-label <?php echo("person" == srp_get_post_format() ? 'active' : ''); ?>">
  <?php pll_e('People'); ?>
</h2>
<?php $people = get_posts(array("category_name" => "people", 'posts_per_page'=> -1, 'orderby' => 'title', 'order' => 'ASC')); ?>
<div class="people">
  <?php foreach($people as $person): ?>
    <a class="person <?php echo srp_active_class($person) ?>" href="<?php echo get_permalink($person); ?>"><?php echo trim($person->post_title); ?></a>
  <?php endforeach; ?>
</div>
