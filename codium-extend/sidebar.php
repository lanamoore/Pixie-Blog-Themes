<div id="primary" class="sidebar">
	<ul class="xoxo">
	
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('SidebarTop') ) : // begin primary sidebar widgets ?>	

	
<!-- search -->
	<li id="search" class="widget widget_search">
	<div class="widgetblock">		
	<div class="widgettitleb"><h3 class="widgettitle">Search</h3></div> 
	<form id="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
				<input type="text" name="s" id="s" style="width:190px;border:1px solid #DDD;background:#fff;font-size:1em" value="" onfocus="this.value='';" />
				<input type="submit" style="border:1px solid #DDD;background:#F5F5F5;width:40px;font-size:1em" value="<?php _e('ok'); ?>" />
				
	</form>
	</div>
	</li>
	
<!-- Archive -->
	<li id="archives" class="widget widget_archive"> 
	<div class="widgetblock">		
	<div class="widgettitleb"><h3 class="widgettitle">Archive</h3></div> 
	<ul> 
	<?php wp_get_archives(); ?> 
	</ul> 
 	</div>
 	</li>

<!-- Meta -->
 	<li id="meta" class="widget widget_meta">
	<div class="widgetblock">
	<div class="widgettitleb"><h3 class="widgettitle">Meta</h3></div> 
	<ul>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<?php wp_meta(); ?>
	</ul>
	</div>
	</li>
 	

	<?php endif; // end primary sidebar widgets  ?>
	</ul>
</div><!-- #primary .sidebar -->

<div id="secondary" class="sidebar">
	<ul class="xoxo">
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('SidebarBottom') ) : // begin  secondary sidebar widgets ?>
	
	
	<?php endif; // end secondary sidebar widgets  ?>
	</ul>
</div><!-- #secondary .sidebar -->