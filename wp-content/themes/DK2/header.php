<?php
/**
 * Template header
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
$selectedTemplate = shprinkone_get_selected_template();
global $page, $paged;
/*
Author: Daniel Kassner
Website: http://www.danielkassner.com
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
	<head>
		<style>
		#scrollUp {  

    bottom: 20px;  

    right: 20px;  

    padding: 10px 20px;  

     background: #555;  

    color: #fff;  

 } 

		</style>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<meta name="keywords" content="ДК связи центр культуры Киевского района Харьков СТАРТ-АРТ коллективы абзац струмочок зоряночка чебурашка росинка ритм Скрипника 7">
                <meta name="Robots" content="all">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			{
				echo "<link href='http://localhost/pcc55/wp-content/themes/DK2/rules_ie.css' rel='stylesheet' type='text/css'/>
				<style>
					td.rc
					{
						width: 300px !important;
					}
					#menu-napravleniya-deyatelnosti li
					{
						width: 300px !important;
					}
					
				</style>";
			}
			else
			if (strstr($_SERVER['HTTP_USER_AGENT'], 'Opera'))
				echo "<link href='http://localhost/pcc55/wp-content/themes/DK2/rules_opera.css' rel='stylesheet' type='text/css'/>";
			else
			if (strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
				echo "<script language='javascript'>
				if (screen.width > 1500)
					document.write (\"<link href='http://localhost/pcc55/wp-content/themes/DK2/rules_firefox_wide.css' rel='stylesheet' type='text/css'/>\");
				else
					document.write (\"<link href='http://localhost/pcc55/wp-content/themes/DK2/rules_firefox_narrow.css' rel='stylesheet' type='text/css'/>\");
				</script>";
			else	
				echo "<link href='http://localhost/pcc55/wp-content/themes/DK2/rules_chrome.css' rel='stylesheet' type='text/css'/>";
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if (is_singular() && get_option('thread_comments'))
			wp_enqueue_script('comment-reply');

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
		?>
		<script type="text/javascript">
			var $ = jQuery;
			$(function () {  

$.scrollUp({  

scrollName: 'scrollUp', //  ID элемента  

topDistance: '300', // расстояние после которого появится кнопка (px)  

topSpeed: 300, // скорость переноса (миллисекунды)  

 animation: 'fade', // вид анимации: fade, slide, none  

animationInSpeed: 200, // скорость разгона анимации (миллисекунды)  

animationOutSpeed: 200, // скорость торможения анимации (миллисекунды)  

scrollText: 'Scroll to top', // текст  

activeOverlay: false, // задать CSS цвет активной точке scrollUp, например: '#00FFFF'  

     });  

 }); 
  
}); 

		</script>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=YOUR-ACCOUNT-ID"></script>
		<script src="githubusercontent.com/markgoodyear/scrollup/master/js/jquery.scrollUp.min.js"></script>
		
	</head>
	<body <?php body_class('theme-' . $selectedTemplate['value']); ?> data-spy="scroll" data-target=".navbar" onLoad="sssh ()">
		<header id="header">
			
			<div style="top: -110px; z-index: 50 !important;" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
			</div>
			</div>
			<?php
				if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
					echo "<div style='position: relative; left: 8%; top: -100px; width: 80% !important;'>";
				else
					echo "<div style='position: relative; left: 8%; top: -100px; width: 90% !important;'>";
					?>
			<div class="span-24">
				<div class="navcontainer" id="access" style="position: relative; left: -63px;">
					<?php
                    if(function_exists('wp_nav_menu')) {
                        wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) );
                    } else {
                        menu_2_default();
                    }
                    
                    function menu_2_default()
                    {
                        ?>
                        <ul id="nav">
    						<li <?php if(is_home()) { echo ' class="current-cat" '; } ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
    						<?php wp_list_categories('depth=1&hide_empty=0&orderby=name&order=ASC&title_li=' ); ?>		
    					</ul>
                        <?php
                    }
                ?>
				
				</div>
			</div><br/>
<div style="z-index: -100 !important;" id="site-caption">
			    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			    <h2 style="color:#94afce;position:relative;top:-10px;"><?php bloginfo('description'); ?></h2>
			</div>
			<div class="span-24">
				<div class="navcontainer" id="access1" style="position: relative; left: -79px;">
					<?php
                    if(function_exists('wp_nav_menu')) {
                        wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sidebar-menu-top' ) );
                    } else {
                        menu_3_default();
                    }
                    
                    function menu_3_default()
                    {
                        ?>
                        <ul id="nav">
    						<li <?php if(is_home()) { echo ' class="current-cat" '; } ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
    						<?php wp_list_categories('depth=1&hide_empty=0&orderby=name&order=ASC&title_li=' ); ?>		
    					</ul>
                        <?php
                    }
                ?>
				
				</div>
			</div>
			</div>
		</header>