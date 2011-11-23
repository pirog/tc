<?php
	// load fields
	$title= $fields['subject']->content;
  $posted = $fields['timestamp']->content;
	$comment = $fields['comment']->content;
?>



<?php // use below for diagnostic ?>
<?php //print_r($view); ?>
<div class="foot_com">
		<div class="title"><?php print $title; ?> </div>
		<div class="comment"><?php print $comment; ?></div>
		<div class="time"><?php print $posted; ?> </div>
</div>