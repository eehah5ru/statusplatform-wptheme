<h2 class="<?php echo("group" == srp_get_post_format() ? 'active' : ''); ?>">
  GROUPS
</h2>
<?php $groups = get_posts(array("category_name" => "groups")); ?>
<div class="groups">
  <?php foreach($groups as $group): ?>
    <a class="group <?php echo srp_active_class($group) ?>" href="<?php echo get_permalink($group); ?>"><?php echo trim($group->post_title); ?></a>
  <?php endforeach; ?>
</div>


<h2 class="<?php echo("person" == srp_get_post_format() ? 'active' : ''); ?>">
  People
</h2>
<?php $people = get_posts(array("category_name" => "people")); ?>
<div class="people">
  <?php foreach($people as $person): ?>
    <a class="person <?php echo srp_active_class($person) ?>" href="<?php echo get_permalink($person); ?>"><?php echo trim($person->post_title); ?></a>
  <?php endforeach; ?>
</div>
