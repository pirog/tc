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
    <?php 
					if ($node->field_media_type[0]['value']=='video') {
						 print $node->field_media_video[0]['view'];
					}
					else {
						 print $node->field_media_podcast[0]['view'];
					}
					print $node->field_media_other[0]['view'];
		?>
		<div>
				 <div class="posted"><?php print date('l, F j, Y', $node->created); ?></div>
				 <?php print $node->field_media_desc[0]['view']; ?>
		</div>
	</div>
  </div>
	<br />
<hr>
  <?php if ($terms): ?>
    <div class="terms terms-inline"><?php print $terms ?></div>
  <?php endif;?>

  <?php print $links; ?>

<?php endif; ?>

</div>
<br />
<hr>