<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php print $picture ?>

<?php if (!$page): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
	<div class="content">
    <?php print $content ?>
  </div>
<?php else: ?>

  <div class="content">
	<div class="blog_content">
    <?php print $content ?>
	</div>
  </div>
<hr>
  <?php if ($terms): ?>
    <div class="terms terms-inline"><?php print $terms ?></div>
  <?php endif;?>

  <?php print $links; ?>

<?php endif; ?>

</div>
<br />
<hr>