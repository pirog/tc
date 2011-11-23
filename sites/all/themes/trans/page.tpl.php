<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <!--[if IE]>
    <link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . $directory; ?>/ie.css"/>
  <![endif]-->
  <!--[if IE 6]>
    <link type="text/css" rel="stylesheet" media="all" href="<?php print $base_path . $directory; ?>/ie6.css"/>
  <![endif]-->
  <?php print $scripts ?>
  <script type="text/javascript"></script>
</head>

<body class="<?php print $body_classes; ?>">

  <?php if ($primary_links) {?> 
    <div id="primary">
    <?php print preg_replace('/<a (.*?)>(.*?)<\\/a>/i','<a \\1><span>\\2</span></a>',theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist'))); ?>
		</div>

  <?php } ?>

    <div id="header-region">
		    <div id="headmid">
				<?php if ($logo) {?>			
							<a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
				<?php } ?>
				</div>
        <?php print $header ?>
    </div>
  <div id="header">
			<div id="headmid">
					 <?php print $breadcrumb; ?>
			</div>
    <span class="clear"></span>
</div>
 <?php if ($content_slider) { ?>
   <div id="content_slider">
    <?php print $content_slider; ?>
   </div>
 	 <span class="clear"></span>
<?php } ?>
 <div id="wrapper">
  
    <?php if ($left) {
 ?>
      <div id="sidebar-left" class="clearfix">
      <?php print $left ?>
      </div>
    <?php } ?>

    <div id="main" class="clearfix"><div id="main-inner"><div id="main-inner2">

      <div class="inner">
        <h1 class="title"><?php print $title ?></h1>
        <?php if ($tabs){
 ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
        <?php print $help ?>
        <?php if ($show_messages && $messages) print $messages; ?>
				<?php print $content_top; ?>
				<?php print $content; ?>
				<?php print $content_bottom; ?>
				<?php print $feed_icons; ?>

        
      </div>
    </div></div></div>

    <?php if ($right): ?>
      <div id="sidebar-right" class="clearfix">
      <?php print $right ?>
      </div>
    <?php endif; ?>
    <br clear="all"/>
    <span class="clear"></span>
  </div>
	
  <br clear="all"/>
	<div id="bot">

        <?php if ($footer or $footer_message): ?>
        <div id="footer"><div id="footer-inner" class="region region-footer">
  
          <?php if ($footer_message): ?>
            <div id="footer-message"><?php print $footer_message; ?></div>
          <?php endif; ?>
  
          <?php print $footer; ?>
  
        </div></div> <!-- /#footer-inner, /#footer -->
				<span class="clear"></span>
      <?php endif; ?>
  			    <?php if ($closure_region): ?>
          <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>
        <?php endif; ?>

	</div>
  <?php print $closure; ?>
</body>
</html>
