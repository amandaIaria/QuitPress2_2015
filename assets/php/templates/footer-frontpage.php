
<div role="contentinfo" in="in" data-in-mobile-after="#header" data-in-tablet-after="#main-container" data-in-standard-after="#main-container" class="row footer bg-blue frontpage">
  <div class="container">
    <header class="footer-header">
      <h4 class="ta-center col-lg-12">Free help so you can quit smoking. Start today. </h4>
    </header>
    <nav class="nav-footer">
      <div class="col-lg-12"><?php wp_nav_menu( array( 'theme_location' => 'Main Navigation', 'menu' => 'Main Navigation','container' => 'false','walker'=> new menu_with_description)); ?>
      </div>
    </nav>
  </div><?php if(!is_mobile() ): ?>
  <footer class="footer-bottom-wrap bg-blue">
    <div class="footer-bottom">
      <div class="container">
        <div class="col-lg-12"><?php if(!is_mobile()):  ?><a href="<?php echo home_url(); ?>/providers/" class="button for-providers<?php if(get_the_title()=='Information for Health Care Providers')echo 'on'; ?>">For Providers</a><?php endif; ?><span class="copy">&copy; 2015 &nbsp;<a href="http://healthvermont.gov/prevent/tobacco/index.aspx" target="_blank">Vermont Department of Health</a></span><?php wp_nav_menu( array('theme_location' => 'Footer Navigation','menu' => 'Footer Navigation','container' => false,'menu_class' => 'nav-footer-secondary') );   ?>
        </div>
      </div>
    </div>
  </footer><?php endif; ?>
</div><?php if(is_mobile() ): ?>
<footer class="footer-bottom-wrap bg-blue">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-lg-12"><?php if(!is_mobile()):  ?><a href="<?php echo home_url(); ?>/providers/" class="button for-providers<?php if(get_the_title()=='Information for Health Care Providers')echo 'on'; ?>">For Providers</a><?php endif; ?><span class="copy">&copy; <?php the_time('Y'); ?> <a href="http://healthvermont.gov/prevent/tobacco/index.aspx" target="_blank">Vermont Department of Health</a></span><?php wp_nav_menu( array('theme_location' => 'Footer Navigation','menu' => 'Footer Navigation','container' => false,'menu_class' => 'nav-footer-secondary') );   ?>
      </div>
    </div>
  </div>
</footer><?php endif; ?><!-- Tag for Activity Group: IP158044: Vermont Anti-Smoking, Activity Name: Homepage~IP158044, Activity ID: 2311432 -->
<!-- Expected URL: http://www.802quits.org/ -->
<!-- Activity ID: 2311432 Activity Name: Homepage~IP158044 Activity Group Name: IP158044: Vermont Anti-Smoking-->
<!-- Start of DoubleClick Floodlight Tag: Please do not remove Activity name of this tag: Homepage~IP158044 URL of the webpage where the tag is expected to be placed: http://www.802quits.org/ This tag must be placed between the <body> and tags, as close as possible to the opening tag. Creation Date: 04/01/2015 --> <script type="text/javascript"> var axel = Math.random() + "";var a = axel * 10000000000000; document.write('<iframe src="http://4793926.fls.doubleclick.net/activityi;src=4793926;type=ip1580;cat=homep0;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');</script><noscript><iframe src="http://4793926.fls.doubleclick.net/activityi;src=4793926;type=ip1580;cat=homep0;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe></noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->