<?php
	// load other fields
	$image = $fields['field_partner_logo_fid']->content;
	$title = $fields['title']->content;
  $desc = $fields['field_partner_desc_value']->content;
	$links = ' | '.$fields['edit_node']->content.' | '.$fields['delete_node']->content;
	$footer = $fields['nothing']->content;
	

?>

<?php // use below for diagnostic ?>
<?php //print_r($view); ?>
<div class="media_item">
  <div class="media_left">
    <div class="image"><?php print $image; ?></div>
  </div>
  <div class="media_right">
    <h2><?php print $title; ?></h2>
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
