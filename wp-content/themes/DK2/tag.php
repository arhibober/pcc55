<?php
/**
 * Template file used to render a Tag Archive Index page
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
?>
<?php get_header(); ?>
<div class="container">
	<?php if (is_active_sidebar('before-content-widget')) : ?>
	<?php dynamic_sidebar('before-content-widget'); ?>
	<?php endif; ?>
	<!-- container start -->
	<div class="row">		
		<form class="navbar-search navbar-form" method="get"
	action="<?php echo esc_url(home_url('/')); ?>" id="searchgroup">
	<input type="text" class="form-control" placeholder="Поиск" name="s" style="display: inline;" id="searchform"<?php
		if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')))
			echo "style='float: right !important; width: 30% !important;'";
	?>>
			<input type="image" src="http://localhost/pcc55/wp-content/themes/DK2/img/search.gif" style="border:0; vertical-align: top; height: 34px; width: 28px; display: inline;" id="searchimage"/><br/>
</form>
		<?php shprinkone_get_sidebar('left'); ?>
		<div id="content" class="<?php echo shprinkone_get_contentspan(); ?>">
			<div class="page-header">
				<h1 class="tag-title">
					<?php echo __('Тэг', 'shprinkone') . ': ' . single_tag_title('', false); ?>
				</h1>
			</div>
			<?php get_template_part('loop'); ?>
		</div>
		<?php ?>
</div>
<!-- container end -->
<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')))
echo "</td></tr></table></div><div style='background-color: #1f4776 !important; position: relative; top: 10px;'>";
else
{
 shprinkone_get_sidebar('right'); ?>
	</div>
	<?php if (is_active_sidebar('after-content-widget')) : ?>
	<?php dynamic_sidebar('after-content-widget'); ?>
	<?php endif;
}
 get_footer();
if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')))
echo "</div>"; ?>
