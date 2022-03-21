<?php
/**
 * Template file used to render a Search Results Index page
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
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
							$i++;
							echo "<div width='250px' valign='top'>";?>						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="width: 250px !important; display: inline !important; padding: 0px;float:left;margin:10px;" valign="top">
							<div style="width: 250px; border: 1px solid #ccc; background: white; height: 370px !important;">
									<div >
										<div class="entry" style="clear: left !important;">
											<?php 
												if ($post->ID == 146)
												{												
													echo "<div style='padding: 5px 5px 50px 5px !important; clear: left !important; height: 125px;'>
													<img src='http://localhost/pcc55/wp-content/uploads/2013/10/Panorama.jpg' style='height: 80px; margin-bottom: 400px !important;'/>";
												}
												else
												{
													echo "<div style='padding: 5px !important; clear: left !important; height: 90px;'>";
													if ( function_exists("has_post_thumbnail") && has_post_thumbnail() )
													{
														the_post_thumbnail("", array("class" => "alignleft post_thumbnail"), 0, 120);
													}
}											?>
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
				if ($i == 0)
					echo "Поиск не дал результатов.";
				}
				else
				{
				
echo "<div class='container'>";
	if (is_active_sidebar('before-content-widget')) :
	dynamic_sidebar('before-content-widget');
	endif;
	if (strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
		echo "<div id='content'>
			<div class='row' style='position: relative !important; top: -50px !important;'>";
	else
		echo "<div id='content'>
			<div class='row' style='position: relative !important; top: -50px !important;'>";
			shprinkone_get_sidebar('left');
	if (strstr($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
			echo "<div class='".shprinkone_get_contentspan()."' style='position: relative !important; top: -51px !important;'>
				<div class='page-header'>
					<h1 class='category-title'>".
						__('', 'shprinkone') . '' . single_cat_title('', false).
					"</h1>
				</div>";
				else
			echo "<div class='".shprinkone_get_contentspan()."' style='position: relative !important; top: -41px !important;'>
				<div class='page-header'>
					<h1 class='category-title'>".
						__('', 'shprinkone') . '' . single_cat_title('', false).
					"</h1>
				</div>";
				if (!empty($category_description)):
				echo "<p>";
					echo $category_description;
				echo "</p>";
				endif;
				get_template_part('loop');
				}
			echo "<div style='position: relative !important; top: -2600px !important; clear: left !important;'>
<div class='alignleft'>".next_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&laquo; Предыдущие посты')."</div>
			<div class='alignright'>".previous_posts_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Следующие посты &raquo;')."</div></div></div>";
							?>
			<?php  ?>
<!-- container end -->
<?php 
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "</div><div style='float: left !important; position: relative; left: 48px;'>
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
	<!-- container end -->
	<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
echo "</div>
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