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
	
<section id="credit" style="position: relative; top: 130px;">
	<div class="span-4 last">
	
		<div class="footer-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-widget-left')) : ?>
							<?php dynamic_sidebar('footer-widget-left'); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-widget-middle-left')) : ?>
							<?php dynamic_sidebar('footer-widget-middle-left'); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-widget-middle-right')) : ?>
							<?php dynamic_sidebar('footer-widget-middle-right'); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-widget-right')) : ?>
							<?php dynamic_sidebar('footer-widget-right'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
					<div class="topright" >					
						<div class="social" style="padding:20px;">
							<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_facebook"></a>
								<a class="addthis_button_twitter"></a>
								<a class="addthis_button_google"></a>
								<a class="addthis_button_vk"></a>
								<a class="addthis_button_odnoklassniki_ru"></a>
								<a class="addthis_button_mymailru"></a>
								<a class="addthis_button_compact"></a>
							</div>
							<div class="pull-left" style="height:50px;float:left;text-align:left;margin-top:10px;">
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
<?php wp_footer(); ?>
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
</body>
</html>