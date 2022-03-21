<?php
/**
 * Template file used to render the Blog Posts Index, whether on the site front page or on a static page.
 * Note: on the Site Front Page, the Front Page template takes precedence over the Blog Posts Index (Home) template.
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
$options = shprinkone_get_theme_options();
$page_on_front = !(!get_option('page_on_front'));
?>
<?php if (!$page_on_front): ?>
	<?php get_header(); ?>
	<?php if (isset($options['theme_slideshow']['posts']) && $options['theme_slideshow']['posts'] > 0 && have_posts()) : ?>	
		<?php get_template_part('loop_home'); ?>
	<?php endif; ?>
	</div>
	<div class="container" id="cont_main" 
			<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo " style='margin: 0 auto !important;'";?>>
		<?php if (is_active_sidebar('before-content-widget')) : ?>
			<?php dynamic_sidebar('before-content-widget'); ?>
		<?php endif; ?>
		<!-- container start -->
		<div id="content" 
			<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo " style='margin: 0 auto !important; width: 1200px;'";?>>
			<div class="row" 
			<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo " style='margin: 0 auto !important; width: 1200px;'";?>>
				<?php shprinkone_get_sidebar('left'); ?>
				<div class="<?php echo shprinkone_get_contentspan(); ?>" style="position: relative; top: 47px; margin: 0 auto !important;<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo " style='width: 1200px;'";?>">
					<?php
				if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
{
echo "<div style='margin: 0 auto !important; display: inline !important; position: relative; left: 20px; margin: 0 auto !important; float: left !important; width: 850px !important;' valign='top'>
<div style='margin: 0 auto !important; width: 850px !important;'>
 
	<div style='margin: 0 auto !important;'>
		<div style='margin: 0 auto !important;'>";
						wp_reset_query();
						wp_reset_postdata();
						rewind_posts();
						global $post;
						while (have_posts()) : the_post();
							echo "<div width='250px' valign='top'>";?>						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="width: 250px !important; display: inline !important; padding: 0px;float:left;margin:10px;" valign="top">
							<div style="width: 250px; border: 1px solid #ccc; background: white; height: 370px !important;">
									<div>
										<div class="entry" style="clear: left !important;">
											<?php
												switch ($post->ID)
												{
													case 146:
														echo "<div style='padding: 5px 5px 50px 5px !important; clear: left !important; height: 125px;'>
														<img src='http://localhost/pcc55/wp-content/uploads/2013/10/Panorama.jpg' style='height: 80px; margin-bottom: 400px !important;'/>";
														break;
													case 259:
														echo "<div style='padding: 5px 5px 50px 5px !important; clear: left !important; height: 125px;'>
														<img src='http://localhost/pcc55/wp-content/uploads/2013/10/DK_big1.jpg' style='height: 80px; margin-bottom: 400px !important;'/>";
														break;
													default:
														echo "<div style='padding: 5px !important; clear: left !important; height: 90px;'>";
														if ( function_exists("has_post_thumbnail") && has_post_thumbnail() )
														{
															the_post_thumbnail("", array("class" => "alignleft post_thumbnail"), 0, 120);
														}
														break;
												}
											?>
											</div>
											<div style="padding: 10px; height:193px; overflow:hidden !important; clear: left !important;"">	
												<h1 class="title" style="font-size: 20px !important; "><a href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее"><?php the_title(); ?></a></h1>
											
											<?php the_content(''); ?>
											</div>
										</div>
									</div>
									<div>
										<div class="readmorecontent" style="padding: 10px;">
											<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="Подробнее">Далее &raquo;</a>
										</div>
									</div>
							</div>
						</div>
				
				<?php
				$i++;
				echo "</div>";
				endwhile;
				echo "</div><br/></div>";
				}
else
 get_template_part('loop'); 
			echo "			<div class='alignleft'>".next_posts_link('&laquo; Предыдущие посты')."</div>
			<div class='alignright' style='position: relative !important; left: 600px !important;'>".previous_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div>";
 ?>
			</div>
				<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "</div><div>
			<form class='navbar-search navbar-form' method='get'
	action='".esc_url(home_url('/'))."' id='searchgroup' style='float: left !important; position: relative !important; left: 19px !important;'>
	<input type='text' class='form-control' placeholder='Поиск' name='s' style='display: inline; width: 270px !important;' id='searchform'>
			<input type='image' src='http://localhost/pcc55/wp-content/themes/DK2/img/search.gif' style='border:0; vertical-align: top; height: 34px; width: 28px; display: inline;' id='searchimage'/><br/>
</form><br/><br/><br/><br/>";
shprinkone_get_sidebar('right'); ?>
			</div>
		</div>
		<?php if (is_active_sidebar('after-content-widget')) : ?>
			<?php dynamic_sidebar('after-content-widget'); ?>
		<?php endif; ?>
	</div>
	<!-- container end -->
	<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
echo "</div> </div>
</div> 
</div> 
</div>
<div style='background-color: #1f4776 !important; width: 100% !important;clear: left !important; margin-top:100px;'>";
 get_footer();
if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
echo "</div>"; ?>
<?php elseif (is_page()): ?>
	<?php get_template_part('page'); ?>
<?php endif; ?>