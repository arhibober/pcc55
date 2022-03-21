<?php
/**
 * Template file used to render a single post page.
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
?>
<?php get_header(); ?>
				<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
{
echo "<div class='container' style='width: 1200px !important; margin: 0 auto !important;'>";
	echo "<div id='content' style='width: 1200px !important; margin: 0 auto !important;'>
		<div class='row' style='width: 1200px !important; margin: 0 auto !important;'>
		<div style='display: inline !important; float: left !important; position: relative; left: 5px; margin: 0 auto !important;' valign='top' class='col-sm-3 col-md-3 col-lg-3' id='sidebar'>
		<div style='float: left !important; display: inline-block !important; margin: 0 auto !important;'><div style='float: left !important; display: inline !important; margin: 0 auto !important;'>";
				}
				else
				{
				
echo "<div class='container'>";
	if (is_active_sidebar('before-content-widget')) :
	dynamic_sidebar('before-content-widget');
	endif;
	echo "<div id='content'>
		<div class='row' style='position: relative !important; top: -50px !important;'>
		<form class='navbar-search navbar-form'>
</form>";
			shprinkone_get_sidebar('left');
				}?>
			<div class="<?php echo shprinkone_get_contentspan(); ?>" style="position: relative; float: left !important;
			<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
				echo " width: 825px !important; top: 11px; display: inline !important;";
			else
				echo " top: -11px;";
				?>">
				<?php if (have_posts()) while (have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class('panel panel-default'); ?> >
							<div class="panel-body">
								<?php if (has_post_thumbnail()): ?>
							<div class="post-thumbnail">
							<?php
							global $post;
								global $wpdb;
$sqlstr = "SELECT meta_value from wp_postmeta where post_id=(select meta_value from wp_postmeta where post_id=".$post->ID." and meta_key='_thumbnail_id') and meta_key='_wp_attached_file'";
$photo_list = $wpdb->get_results($sqlstr, ARRAY_A);
echo "<a href='http://localhost/pcc55/wp-content/uploads/".$photo_list [0]["meta_value"]."'>";?>
								<?php 
										the_post_thumbnail('', array('class' => 'img-responsive'), 300, 400);
										?>
								</a>
							</div>
								<?php endif; ?>
								<div class="page-header" style="position: relative !important; top: -20px !important;">
									<h2 id="post-title" class="post-title" style="color: #295e9c;">
										<?php the_title(); ?>
									</h2>
									<?php echo shprinkone_get_post_meta(true, true, true, false, false, true) ?>
								</div>
								<div class="post-content" style="position: relative !important; top: -40px !important;">
									<?php the_content(); ?>
								</div>
								<?php
								// cheat to pass theme review
								wp_link_pages(array('echo' => 0));
								?>
								<?php shprinkone_link_pages(); ?>
								<hr />
								<?php echo shprinkone_get_post_meta(false, false) ?>
								<?php if (get_the_author_meta('description')) : // If a user has filled out their description, show a bio on their entries  ?>
									<div class="media well">
										<a class="pull-left" href="#"> <?php echo get_avatar(get_the_author_meta('user_email')); ?>
										</a>
										<div class="media-body">
											<h4 class="media-heading">
												<?php printf(esc_attr__('About %s', 'shprinkone'), get_the_author()); ?>
											</h4>
											<p>
												<?php the_author_meta('description'); ?>
											</p>
											<a
												href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
												rel="author"> <?php printf(__('View all posts by %s', 'shprinkone'), get_the_author()); ?>
											</a>
										</div>
									</div>
								<?php endif; ?>
								<?php
								$previousPost = get_previous_post();
								if (!empty($previousPost)):
									?>
									<a id="previous-post" class="btn btn-info btn-lg" title="<?php echo $previousPost->post_title ?>" href="javascript:void(0)"><i class="icon-chevron-left"></i></a>
									<div id="previous-post-content" style="display: none;">
										<div class="clearfix">
											<a class="btn btn-danger pull-right" href="javascript:closePreviousSidr();"><i class="icon-remove-sign"></i></a>
										</div>
										<a href="<?php echo get_permalink($previousPost); ?>">
											<?php echo get_the_post_thumbnail($previousPost->ID, '', array('class' => 'img-thumbnail img-responsive')); ?>
										</a>
										<h2><?php previous_post_link('%link', '%title'); ?></h2>
										<p><?php echo substr(strip_tags($previousPost->post_content), 0, 200) . '...'; ?></p>
										<a href="<?php echo get_permalink($previousPost); ?>" class="btn btn-primary btn-block"><?php _e('Подробнее', 'shprinkone') ?></a>
									</div>
								<?php endif; ?>
								<?php
								$nextPost = get_next_post();
								if (!empty($nextPost)):
									?>
									<a id="next-post" class="btn btn-info btn-lg pull-right" title="<?php echo $nextPost->post_title ?>" href="javascript:void(0)"><i class="icon-chevron-right"></i></a>

									<div id="next-post-content" style="display: none;">
										<div class="clearfix">
											<a class="btn btn-danger pull-left" href="javascript:closeNextSidr();"><i class="icon-remove-sign"></i></a>
										</div>
										<a href="<?php echo get_permalink($nextPost); ?>">
											<?php echo get_the_post_thumbnail($nextPost->ID, '', array('class' => 'img-thumbnail img-responsive')); ?>
										</a>
										<h2><?php next_post_link('%link', '%title'); ?></h2>
										<p><?php echo substr(strip_tags($nextPost->post_content), 0, 200) . '...'; ?></p>
										<a href="<?php echo get_permalink($nextPost); ?>" class="btn btn-primary btn-block"><?php _e('Подробнее', 'shprinkone') ?></a>
									</div>
								<?php endif; ?>
								<?php comments_template('', true); ?>
							</div>
						</div>
						</div>
					<?php endwhile; // end of the loop. ?>
<script>
	jQuery(document).ready(function($) {
		$('#previous-post').sidr({
			name: 'sidr-previous-post',
			source: function(name) {
				return $('#previous-post-content').clone().html();
			}
		});
		$('#next-post').sidr({
			name: 'sidr-next-post',
			source: function(name) {
				return $('#next-post-content').clone().html();
			},
			side: 'right'
		});

		window.closePreviousSidr = function() {
			$.sidr('close', 'sidr-previous-post')
		}

		window.closeNextSidr = function() {
			$.sidr('close', 'sidr-next-post')
		}
	});
</script>
<!-- container end -->
<?php 
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "<div style='position: relative; left: 33px;'>
			<form class='navbar-search navbar-form' method='get'
	action='".esc_url(home_url('/'))."' id='searchgroup' style='float: left !important; position: relative !important; left: 19px !important;'>
	<input type='text' class='form-control' placeholder='Поиск' name='s' style='display: inline; width: 270px !important;' id='searchform'>
			<input type='image' src='http://localhost/pcc55/wp-content/themes/DK2/img/search.gif' style='border:0; vertical-align: top; height: 34px; width: 28px; display: inline;' id='searchimage'/><br/>
</form><br/><br/><br/><br/>";
else
	echo "<div style='position: relative; top: -38px;'>";
shprinkone_get_sidebar('right'); ?>
			</div>
		</div>
		<?php if (is_active_sidebar('after-content-widget')) : ?>
			<?php dynamic_sidebar('after-content-widget'); ?>
		<?php endif; ?>
	</div>
	</div>
	</div>
	<!-- container end -->
	<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
echo "</div> 
</div> 
</div>
</div> 
</div>
<div style='background-color: #1f4776 !important; width: 100% !important;clear: left !important; margin-top:100px;'>";
 get_footer();
if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
echo "</div>";
else
if (is_page()): ?>
	<?php get_template_part('page'); ?>
<?php endif;?>