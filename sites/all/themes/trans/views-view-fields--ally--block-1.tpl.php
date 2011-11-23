<?php
	// load fields
	$image = $fields['field_partner_logo_fid']->content;
	$title = $fields['title']->content;

?>




<?php // use below for diagnostic ?>
<?php //print_r($view); ?>
<div class="foot_ally">
	<div class="image"><?php print $image; ?></div>
	<div class="title"><?php print $title; ?></div>
</div>