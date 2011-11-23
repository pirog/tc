<?php
/*
    * [comments_link] == Node: Add comment link
    * [body] == Node: Body
    * [delete_node] == Node: Delete link
    * [edit_node] == Node: Edit link
    * [view_node] == Node: Link
    * [created] == Node: Post date
    * [title] == Node: Title
    * [field_media_desc_value] == Content: Brief Description (field_media_desc)
    * [field_blog_img_fid] == Content: Image Teaser (field_blog_img)
    * [field_media_other_thumb_fid] == Content: Other Thumb (field_media_other_thumb)
    * [field_media_podcast_embed] == Content: Podcast (field_media_podcast)
    * [field_media_video_embed] == Content: Video (field_media_video)
    * [field_media_type_value] == Content: Media Type (field_media_type)
    * [type] == Node: Type

*/
	
  // check for OTHER thumbnail\
	if ($fields['type']->content=='blog') {
	  $image = $fields['field_blog_img_fid']->content;
		$desc = $fields['body']->content;
	}
	else {
	 if ($fields['field_media_type_value']->content=='Video') {
	 		$desc = $fields['field_media_desc_value']->content;
			$image = $fields['field_media_video_embed']->content;
			if ($fields['field_media_other_thumb_fid']->content) {
    	  $image = $fields['field_media_other_thumb_fid']->content;
    	}
	 }
	 else if ($fields['field_media_type_value']->content=='Podcast') {
	    $desc = $fields['field_media_desc_value']->content;
	 		$image = $fields['field_media_podcast_embed']->content;
			if ($fields['field_media_other_thumb_fid']->content) {
    	  $image = $fields['field_media_other_thumb_fid']->content;
    	}
	 }
	}

	// load other fields
	$title = $fields['title']->content;
  $posted = $fields['created']->content;
	$links = '| '.$fields['edit_node']->content.' | '.$fields['delete_node']->content;
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
		<?php if ($fields['comments_link']->content) {
		  print ' | '.$fields['comments_link']->content; 
		}	
		?>
		</div>
  </div>
</div>