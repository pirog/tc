<?php
/*
    * [title] == Node: Title
    * [delete_node] == Node: Delete link
    * [edit_node] == Node: Edit link
    * [created] == Node: Post date
    * [field_blog_img_fid] == Content: Image Teaser (field_blog_img)
    * [field_media_other_thumb_fid] == Content: Other Thumb (field_media_other_thumb)
    * [field_media_podcast_embed] == Content: Podcast (field_media_podcast)
    * [field_media_video_embed] == Content: Video (field_media_video)
    * [type] == Node: Type
    * [field_media_type_value] == Content: Media Type (field_media_type)
*/
	
  // check for OTHER thumbnail\
	if ($fields['type']->content=='blog') {
	  $image = $fields['field_blog_img_fid']->content;
	}
	else {
	 if ($fields['field_media_type_value']->content=='Video') {
	 		$image = $fields['field_media_video_embed']->content;
			if ($fields['field_media_other_thumb_fid']->content) {
    	  $image = $fields['field_media_other_thumb_fid']->content;
    	}
	 }
	 else if ($fields['field_media_type_value']->content=='Podcast') {
	 		$image = $fields['field_media_podcast_embed']->content;
			if ($fields['field_media_other_thumb_fid']->content) {
    	  $image = $fields['field_media_other_thumb_fid']->content;
    	}
	 }
	}

	// load other fields
	$title = $fields['title']->content;
  $posted = $fields['created']->content;
	$links = $fields['edit_node']->content.' | '.$fields['delete_node']->content;
?>

<?php // use below for diagnostic ?>
<?php //print_r($view); ?>
<div class="related">
    <div class="image"><?php print $image; ?></div>
    <div class="title-small"><?php print $title; ?></div>
    <div class="posted"><?php print $posted; ?></div>
		<div class="links">
		<?php 
				if (($fields['edit_node']->content)&&($fields['delete_node']->content)) {
					print $links; 
				}
		?>
		</div>
</div>
