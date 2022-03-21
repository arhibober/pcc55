<?php
/**
 * Template footer
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
		
$condition = is_active_sidebar('footer-widget-left') || is_active_sidebar('footer-widget-middle-left') || is_active_sidebar('footer-widget-middle-right') || is_active_sidebar('footer-widget-right');
?>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=YOUR-ACCOUNT-ID"></script>
<?php if ($condition) : ?>
<?php endif; ?>
	
<section id="credit" style="width: 100% !important;">
	<div class="span-4 last" style="width: 100% !important;">
	
		<div class="footer-inner" style="width: 100% !important;">
			<div class="container" style="width: 100% !important;">
				<div class="row" style="display: inline-block !important; width: 100% !important;">
					<div class="col-md-3 col-lg-3 col-footer">
						<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
						echo "<table><tr><td width='25%'>";
						if (is_active_sidebar('footer-widget-left')) : ?>
							<?php dynamic_sidebar('footer-widget-left'); ?>
						<?php endif;
						if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
						echo "</td><td width='25%'>"; ?>
					</div>
					<div class="col-md-3 col-lg-3 col-footer">
						<?php if (is_active_sidebar('footer-widget-middle-left')) : ?>
							<?php dynamic_sidebar('footer-widget-middle-left'); ?>
						<?php endif;
						if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
						echo "</td><td width='25%'>"; ?>
					</div>
					<div class="col-md-3 col-lg-3 col-footer">
						<?php if (is_active_sidebar('footer-widget-middle-right')) : ?>
							<?php dynamic_sidebar('footer-widget-middle-right'); ?>
						<?php endif;?>
						<?php 
								global $wpdb;
$sqlstr = "SELECT comment_ID from wp_comments'";
$comments = $wpdb->get_results($sqlstr, ARRAY_A);
						if ($comments [0]["comment_id"] != "")
						{
						if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
						echo "</td><td width='25%'>";
					echo "</div>
					<div class='col-md-3 col-lg-3 col-footer'>";
if ((is_active_sidebar('footer-widget-right'))) :
dynamic_sidebar('footer-widget-right');
 endif;

}
						if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
						echo "</td></tr></table>"; ?>
					</div>
				</div>
			</div>
		</div>
					<div class="topright" >					
						<div class="social" style="padding:20px; display: inline;">
							<div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="display: inline;">
								<a class="addthis_button_facebook"></a>
								<a class="addthis_button_twitter"></a>
								<a class="addthis_button_google"></a>
								<a class="addthis_button_vk"></a>
								<a class="addthis_button_odnoklassniki_ru"></a>
								<a class="addthis_button_mymailru"></a>
								<a class="addthis_button_compact"></a>
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/stat/localhost/pcc55/index.html?session=177184998' "+
"target=_blank><img src='//counter.yadro.ru/hit?t19.11;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='Статистика посещаемости по версии LiveInternet' "+
"border='0' width='88' height='31' style='margin: auto !important;'><\/a>")
//--></script><!--/LiveInternet-->
<!-- I.UA counter --><a href="http://catalog.i.ua/stat/186257/" target="_blank" onclick="this.href='http://catalog.i.ua/stat/186257/" title="Статистика посещаемости по версии i.ua" style="margin: auto !important;">
<script type="text/javascript" language="javascript"><!--
iS='<img src="http'+(window.location.protocol=='https:'?'s':'')+
'://r.i.ua/s?u186257&p4&n'+Math.random();
iD=document;if(!iD.cookie)iD.cookie="b=b; path=/";if(iD.cookie)iS+='&c1';
iS+='&d'+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)
+"&w"+screen.width+'&h'+screen.height;
iT=iR=iD.referrer.replace(iP=/^[a-z]*:\/\//,'');iH=window.location.href.replace(iP,'');
((iI=iT.indexOf('/'))!=-1)?(iT=iT.substring(0,iI)):(iI=iT.length);
if(iT!=iH.substring(0,iI))iS+='&f'+escape(iR);
iS+='&r'+escape(iH);
iD.write(iS+'" border="0" width="88" height="31" />');
//--></script></a><!-- End of I.UA counter -->
							</div>
							</div>

							</div>
							<div style="text-align: center !important;">
							<div style="text-align: center !important;">
							<div style="height:50px;text-align: center !important;margin-top:10px;" id="copyr">
						&copy;
						<?php echo date("Y"); ?>
						<?php bloginfo('name'); ?>
						<?php _e('', 'shprinkone') ?><br/>
						Производство: <a href="mailto://arhibober@gmail.com">Arhibober</a><br/>
					</div>
						</div>
					</div>
				</div>
	<div class="credit-inner">
		<div class="container">

			<div class="row" style="text-align:left;">
				<div class="col-md-12 col-lg-12">
					
					<?php if (is_active_sidebar('footer-widget-bottom')) : ?>
						<?php dynamic_sidebar('footer-widget-bottom'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		// Add Bootstrap class to lists within the sidebar
		$('#sidebar .widget ul').addClass('nav nav-pills nav-stacked');
		$('footer .widget ul').addClass('nav nav-pills nav-stacked');
		$('.widget_recent_comments ul').removeClass('nav nav-tabs nav-pills nav-stacked').addClass('list-unstyled');
		$('[data-toggle=tooltip]').tooltip()
		$('#header ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			// Avoid following the href location when clicking
			event.preventDefault();
			// Avoid having the menu to close when clicking
			event.stopPropagation();
			// If a menu is already open we close it
			$('#header ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
			// opening the one you clicked on
			$(this).parent().addClass('open');
		});
	});
</script>
<p id="back-top">
<a href="#top"><span></span>Наверх</a>
</p>
</body>
</html>