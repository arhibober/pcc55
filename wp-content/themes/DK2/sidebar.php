<?php
/**
 * Template file used to render the sidebar.
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
?>
		
		

<!-- TOP AREA -->
<?php if ((is_active_sidebar('sidebar-widget-top'))) :
if ((!strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) || (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) || (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) || (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) || (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
{ ?><form class="navbar-search navbar-form" method="get"
	action="<?php echo esc_url(home_url('/')); ?>" id="searchgroup"
	<?php
		if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "style='float: right !important; width: 30% !important;'";
	?>>
	<input type="text" class="form-control" placeholder="Поиск" name="s" style="display: inline;" id="searchform">
			<input type="image" src="http://localhost/pcc55/wp-content/themes/DK2/img/search.gif" style="border:0; vertical-align: top; height: 34px; width: 28px; display: inline;" id="searchimage"/><br/>
</form>
<?php
}
dynamic_sidebar('sidebar-widget-top'); ?>
<?php endif; ?>
<!-- MIDDLE AREA -->
<?php if (has_nav_menu('sidebar-menu-middle')): ?>
<?php
wp_nav_menu(array(
'theme_location' => 'sidebar-menu-middle',
'menu_class' => 'nav nav-pills nav-stacked',
'walker' => new Bootstrap_Walker_Nav_Menu(),
'depth' => 3,
'items_wrap' => '<h4>' . shprinkone_get_menu_title('sidebar-menu-middle') . '</h4><ul id="%1$s" class="%2$s">%3$s</ul>'));
?>
<?php endif; ?>
<?php if (is_active_sidebar('sidebar-widget-middle')) : ?>
<?php dynamic_sidebar('sidebar-widget-middle'); ?>
<?php endif; ?>
<!-- BOTTOM AREA -->
<?php if (has_nav_menu('sidebar-menu-bottom')): ?>
<?php
wp_nav_menu(array(
'theme_location' => 'sidebar-menu-bottom',
'menu_class' => 'nav nav-pills nav-stacked',
'walker' => new Bootstrap_Walker_Nav_Menu(),
'depth' => 3,
'items_wrap' => '<h4>' . shprinkone_get_menu_title('sidebar-menu-bottom') . '</h4><ul id="%1$s" class="%2$s">%3$s</ul>'));
?><?php endif; ?>
<?php if (is_active_sidebar('sidebar-widget-bottom')) : ?>
<?php dynamic_sidebar('sidebar-widget-bottom'); ?>
<?php endif; ?>