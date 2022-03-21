			
<?php
/**
 * Default Loop
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
$displayedOnSlideshow = 0;
$options = shprinkone_get_theme_options();
?>

<?php if (have_posts() && get_query_var('paged') < 2) : ?>
	<div class="container-slideshow" style="<?php
	if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
		echo "min-width: 600px !important; width: 100%; position: relative; top: -80px;";
	else
		echo "position: relative; top: -30px; ";
	?>vertical-align: middle !important; margin: 0 auto !important; text-align: center: important;">
		<div id="slideshow" class="carousel slide" style="height: 560px; top: -50px; vertical-align: middle !important; margin: 0 auto !important; text-align: center: important;">
			<!-- Carousel items -->
			<div class="carousel-inner" style="position: relative; left: 13%; width: 75% !important; vertical-align: middle !important; text-align: center: important;">
				<!-- Start the Loop. -->
				<?php $i = 0;
				global $query_string;
query_posts( array ( 'orderby' => 'modified', 'order' => 'DESC' ) );
				while (have_posts() && $displayedOnSlideshow < $options['theme_slideshow']['posts']) : the_post();
					$i++;
					?>
					<div <?php
					$classes = 'item';
					if ($displayedOnSlideshow === 0)
						$classes .= ' active'; post_class($classes)
					?>>
						<div class="container" style="margin: 0 auto !important; text-align: center: important;">
							<div class="carousel-caption" style="margin: 0 auto !important; text-align: center: important;">
								<div class="media"<?php
								/*if (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
	echo " style='display: inline;'";*/
	?> style="margin: 0 auto !important; text-align: center: important; vertical-align: middle !important;">
									<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
									echo "<div style='float: left !important;'><div style='float: left !important; width: 300px !important;'>";
									if (has_post_thumbnail()): ?>
										<a class="post-thumbnail" style="margin-right: 10px; margin-bottom: 10px; vertical-align: middle !important;<?php if (strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
	echo "position: relative; top: 0px; left: -20px;";?>"  href="<?php the_permalink() ?>"
								>
											<?php 
											if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
												the_post_thumbnail('', array('class' => 'img-thumbnail img-responsive avatar-slideshow', 'id' => 'avatar'.$i), 270, 220);
											else
												the_post_thumbnail('', array('class' => 'img-thumbnail img-responsive avatar-slideshow', 'id' => 'avatar'.$i), 285, 255, $i);
											?>
										</a>
									<?php endif; ?>

									<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
	echo "</div><div><div class='media-body' style='display: inline-block; position: absolute; top: 40px; left: 300px; margin: 0 auto !important; text-align: center: important;'>";
else
	echo "<div class='media-body' style='text-align: center: important;'>";
?>
										<h2 class="post-title media-heading">
											<a href="<?php the_permalink() ?>"
											   title="<?php echo sprintf(__('', 'shprinkone'), the_title_attribute()); ?>"><?php the_title(); ?>
											</a>

										</h2>
										<?php echo shprinkone_get_post_meta(true, true, true, false, false, true, true) ?>
										
										<?php
											if ($i != 2)
											{
												echo "<div class='post-content hidden-xs' style='height: 90px !important; overflow: hidden !important;'>";
												the_excerpt();
												echo "</div>
												<div class='post-content visible-xs' style='height: 90px !important; overflow: hidden !important;'>";
												$excerpt = get_the_excerpt();
												echo $excerpt;
												echo "</div>";
											}
										?>
										<!--<a href="<?php the_permalink() ?>" class="btn btn-primary"><?php _e('Read more', 'shprinkone') ?></a>-->
									</div>
									<?php
										if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
											echo "</div></div>";
										else
									echo "<div style='max-width: 540px; text-align: center !important; z-index: 1000 !important;' class='points' id='points".$i."'>[...]</div>";
									?>
									</div>
							</div>
						</div>
					</div>
					<?php $displayedOnSlideshow++; ?>
				<?php endwhile; ?>
			</div>

			<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "<div style='max-width: 600px; text-align: center !important; position: relative !important; top: -90px !important; left: 410px; z-index: 10000 !important; color: #ffffff !important;'>[...]</div>";
			if ($options['theme_slideshow']['posts'] > 1): ?>
				<ol class="carousel-indicators">
					<?php for ($index = 0; $index < $displayedOnSlideshow; $index++): ?>
						<li data-target="#slideshow" data-slide-to="<?php echo $index ?>" class="<?php echo ($index === 0) ? 'active' : '' ?>"></li>
					<?php endfor; ?>
				</ol>
			<?php endif; ?>
			<?php if ($options['theme_slideshow']['posts'] > 1): ?>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#slideshow" data-slide="prev" style="top: 50px;"><i class="icon-chevron-left"></i></a>
				<a class="carousel-control right" href="#slideshow" data-slide="next" style="top: 50px;"><i class="icon-chevron-right"></i></a>
				<?php endif; ?>
		</div>
	</div>
	<?php define('DISPLAYEDONSLIDESHOW', $displayedOnSlideshow) ?>
	<script>
		jQuery(document).ready(function($) {
			/* Slideshow */
			$('#slideshow').carousel();
		});
	</script>
<?php endif; ?>