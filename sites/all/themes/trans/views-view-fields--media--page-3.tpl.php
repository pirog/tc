<?php
	
  // check for OTHER thumbnail\
	$image = $fields['field_media_podcast_embed']->content;
	if ($fields['field_media_other_thumb_fid']->content) {
	  $image = $fields['field_media_other_thumb_fid']->content;
	}
	
	// load other fields
	$title = $fields['title']->content;
  $desc = $fields['field_media_desc_value']->content;
  $posted = $fields['created']->content;
	$links = ' | '.$fields['edit_node']->content.' | '.$fields['delete_node']->content;
	$footer = $fields['view_node']->content;
	

?>

<?php // use below for diagnostic ?>
<?php //print_r($view); ?>
<div class="media_item">
  <div class="media_left">
    <div class="image"><?php print $image; ?></div>
  </div>
  <div class="media_right">
    <h2><?php print $title; ?></h2>
		<div class="posted"><?php print $posted; ?></div>
		<div class="desc"><?php print $desc; ?></div>
		<div class="links"><?php print $footer; ?>
		<?php 
				if (($fields['edit_node']->content)&&($fields['delete_node']->content)) {
					print $links; 
				}
		?>
		</div>
  </div>
</div>
