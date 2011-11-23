<?php
	$name = $fields['title']->content;
  $image = $fields['field_staff_pic_fid']->content;
  $title = $fields['field_staff_title_value']->content;
  $bio = $fields['field_staff_bio_value']->content;
	$links = $fields['edit_node']->content.' | '.$fields['delete_node']->content;
?>

<?php 
 if ($title) {
 		$titlecomp = ' - ['.$title.']';
 } 
 else {
    $titlecomp = '';
 }
?>



<div class="staff_item">
  <div class="staff_left">
    <div class="image"><?php print $image; ?></div>
  </div>
  <div class="staff_right">
    <h2><?php print $name.$titlecomp; ?></h2>
		<?php print $bio; ?>
		<?php 
				if (($fields['edit_node']->content)&&($fields['delete_node']->content)) {
					print $links; 
				}
		?>
  </div>
</div>
