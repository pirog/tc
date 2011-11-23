<?php
  // check for OTHER thumbnail\
	$image = $fields['field_media_video_embed']->content;
	if ($fields['field_media_other_thumb_fid']->content) {
	  $image = $fields['field_media_other_thumb_fid']->content;
	}
	
	// load other fields
	$title = $fields['title']->content;

?>

<?php // use below for diagnostic ?>
<?php //print_r($view); ?>

	<?php print $image; ?>
  <?php print $title; ?>

