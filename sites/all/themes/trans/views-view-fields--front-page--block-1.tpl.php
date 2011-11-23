<?php
	$title = $fields['title']->content;
  $body = $fields['field_front_editorial_value']->content;
  $image = $fields['field_front_image_fid']->content;
  $source = $fields['field_front_link_url']->content;
  $credit = $fields['field_front_credit_value']->content;
	$footer = $fields['field_front_footer_value']->content;
  $links = $fields['edit_node']->content.' | '.$fields['delete_node']->content;
?>

<div class="promo_item">
  <div class="promo_left">
    <h1><?php print $title; ?></h1>
    <div class="teaser"><?php print $body; ?></div>
		<div class="footer"><?php print $footer; ?></div>
		<?php 
				if (($fields['edit_node']->content)&&($fields['delete_node']->content)) {
					print $links; 
				}
		?>
  </div>
  <div class="promo_right">
    <?php   print $image; ?>
    <div class="source"><?php print $credit; ?></div>
  </div>
</div>