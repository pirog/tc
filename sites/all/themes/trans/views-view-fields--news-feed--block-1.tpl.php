<?php
	// load fields
	$title = $fields['title']->content;
	$time = $fields['timestamp']->content;

?>




<?php // use below for diagnostic ?>
<?php //print_r($view); ?>
<div class="news_feed">
	<div class="title"><?php print $title; ?></div>
	<div class="time"><?php print $time; ?></div>
</div>