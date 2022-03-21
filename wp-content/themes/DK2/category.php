<?php
/**
 * Template file used to render a Category Archive Index page
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
$category_description = category_description();
?>
<?php get_header(); ?>
				<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
{
echo "<div class='container'>
<div id='content' style='margin: 0 auto !important; width: 1150px;'>
		<div class='row' style='margin: 0 auto !important; width: 1150px;'>
		<div style='margin: 0 auto !important; display: inline !important; position: relative; left: 20px; top: 0px; margin: 0 auto !important; width: 1150px;' valign='top'>
<div style='margin: 0 auto !important; width: 820px !important; float: left;'>
 
	<div style='margin: 0 auto !important;'>
		<div style='margin: 0 auto !important; float: left;'>";
						$i = 0;
						while (have_posts()) : the_post();
							echo "<div width='250px' valign='top'>";?>						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="width: 250px !important; display: inline !important; padding: 0px; float: left; margin: 10px;" valign="top">
							<div style="width:250px; border: 1px solid #ccc; background: white; height: 370px !important;">
									<div >
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
				if ($i == 0)
				echo "<div>Пополнение раздела ожидается</div>";
				echo "</div><br/></div>";
				}
				else
				{
				
echo "<div class='container'>";
	if (is_active_sidebar('before-content-widget')) :
	dynamic_sidebar('before-content-widget');
	endif;
	echo "<div id='content'>
		<div class='row' style='position: relative !important; top: -50px !important;'>";
			shprinkone_get_sidebar('left');
			echo "<div class='".shprinkone_get_contentspan()." cat-cot'>
				<div class='page-header'>
					<h2 class='category-title' style='color: #295e9c;'>".
						__('', 'shprinkone') . '' . single_cat_title('', false).
					"</h2>
				</div>";
				if (!empty($category_description)):
				echo "<p>";
					echo $category_description;
				echo "</p>";
				endif;
				get_template_part('loop1');
				}
			if (((get_query_var('cat') < 13) || (get_query_var('cat') > 28)) && (get_query_var('cat') != 3))
			echo "			<div class='alignleft'>".previous_posts_link ('&laquo; Предыдущие посты')."</div>
			<div class='alignright' style='position: relative !important; left: 600px !important;'>".next_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div>";
			else
			echo "			<div class='alignleft'>".next_posts_link ('&laquo; Предыдущие посты')."</div>
			<div class='alignright' style='position: relative !important; left: 600px !important;'>".previous_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div>";				?>
			</div>
<!-- container end -->
<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "<div style='float: right !important;'>
			<form class='navbar-search navbar-form' method='get'
	action='".esc_url(home_url('/'))."' id='searchgroup' style='float: right !important; position: relative !important; left: 19px !important;'>
	<input type='text' class='form-control' placeholder='Поиск' name='s' style='display: inline; width: 270px !important;' id='searchform'>
			<input type='image' src='http://localhost/pcc55/wp-content/themes/DK2/img/search.gif' style='border:0; vertical-align: top; height: 34px; width: 28px; display: inline;' id='searchimage'/><br/>
</form><br/><br/><br/><br/>";
else

					echo "<div style='position: relative; top: -38px;'>";
shprinkone_get_sidebar('right'); ?>
			</div>
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
echo "</div>"; 
else
if (is_page()): ?>
	<?php get_template_part('page'); ?>
<?php endif; ?>