<?php
	// load fields
	$image = $fields['field_blog_img_fid']->content;
	$title = $fields['title']->content;
  $desc = $fields['body']->content;
  $posted = $fields['created']->content;
	$links = '| '.$fields['edit_node']->content.' | '.$fields['delete_node']->content;
	$footer = $fields['view_node']->content;
?>


<?php // use below for diagnostic ?>
<?php //print_r($view); ?>
<div class="media_50_item">
  <div class="media_50_left">
    <div class="image"><?php print $image; ?></div>
  </div>
  <div class="media_50_right">
    <h2><?php print $title; ?></h2>
		<div class="posted"><?php print $posted; ?></div>
		<div class="desc"><?php print $desc; ?></div>
		<div class="links"><?php print $footer; ?>
		<?php 
				if (($fields['edit_node']->content)&&($fields['delete_node']->content)) {
					print $links;
				}
		?>
		<?php print ' | '.trim($fields['comments_link']->content); ?>
		</div>
  </div>
</div>
