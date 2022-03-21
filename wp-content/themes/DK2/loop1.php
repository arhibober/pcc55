<?php
/**
 * Default Loop
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
$options = shprinkone_get_theme_options();
if (defined('DISPLAYEDONSLIDESHOW') && !in_the_loop()) {
	for ($index = 0; $index < DISPLAYEDONSLIDESHOW; $index++) {
		$wp_query->next_post();
	}
}

if (defined('DISPLAYEDONSLIDESHOW') && isset($options['theme_slideshow']['copy_within_content'])) {
	$wp_query->rewind_posts();
}

$displayMeta = false;
if (isset($options['theme_posts']['meta']) && $options['theme_posts']['meta']) {
	$displayMeta = true;
}
?>
<div id="masonry" class="masonry clearfix row" style="position: relative; top: 0px;">
	<!-- Start the Loop. -->
	<?php 
				global $query_string;
query_posts($query_string . "&orderby=post_modified&order=desc");
if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6 col-md-6 col-lg-4 box') ?>>
				<div class="panel panel-default">
					<?php if (has_post_thumbnail()): ?>
						<a href="<?php the_permalink() ?>">
							<div class="post-thumbnail">
								<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
									the_post_thumbnail('', array('class' => 'img-responsive'), 235, 270);
									else
									the_post_thumbnail('', array('class' => 'img-responsive'));?>
							</div>
						</a>
					<?php endif; ?>
					<div class="panel-body">
						<h3 class="post-title">
							<?php $hasTitle = the_title(null, null, false) !== null ?>
							<a href="<?php the_permalink() ?>"
							   title="Подробнее"><?php echo $hasTitle ? the_title(null, null, true) : __('Read more', 'shprinkone'); ?>
							</a>
						</h3>

						<div class="post-content">
							<?php the_excerpt(); ?>
						</div>
						<?php if ($displayMeta): ?>
							<div class="well well-sm">
								<?php echo shprinkone_get_post_meta(true, true, true, true, true, true, true, true) ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php else: ?>
		<?php echo "<div style='padding: 10px;'>Пополнение раздела ожидается.</div>";?>
	<?php endif; ?>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		/* Masonry */
		var $container = $('#masonry');

		// Callback on After new masonry boxes load
		window.onAfterLoaded = function(el) {
			el.find('div.post-meta li').popover({
				trigger: 'hover',
				placement: 'top',
				container: 'body'
			});
		};

		onAfterLoaded($container.find('.box'));

		$container.imagesLoaded(function() {
			$container.masonry({
				itemSelector: '.box'
			});

			$(window).resize(function() {
				$container.masonry('reload');
			});
		});
	});
</script>
<?php if (isset($options['theme_posts']['type']) && $options['theme_posts']['type'] == 'ajax_scroll'): ?>
	<div id="page-nav" style="display: none;">
		<?php if ($wp_query->max_num_pages > 1) next_posts_link(); ?>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			var $container = $('#masonry');
			$container.infinitescroll({
				navSelector: '#page-nav', // selector for the paged navigation
				nextSelector: '#page-nav a', // selector for the NEXT link (to page 2)
				itemSelector: '.box', // selector for all items you'll retrieve,
				loading: {
					finishedMsg: '<?php echo __('Загрузка постов завершена.', 'shprinkone') ?>',
					img: '<?php echo get_stylesheet_directory_uri(); ?>/img/loading.gif',
					msgText: '<?php echo __('Подождите, пожалуйста, посты в процессе загрузки...', 'shprinkone') ?>'
				}
			},
			// trigger Masonry as a callback
			function(newElements) {
				// hide new items while they are loading
				var $newElems = $(newElements).css({
					opacity: 0});
				// ensure that images load before adding to masonry layout
				$newElems.imagesLoaded(function() {
					// show elems now they're ready
					$newElems.animate({
						opacity: 1});
					$container.masonry('appended', $newElems, true);
				});
				onAfterLoaded($newElems);
			}
			);
		});
	</script>
<?php elseif (isset($options['theme_posts']['type']) && $options['theme_posts']['type'] === 'ajax_button'): ?>

	<div id="page-nav">
		<?php
		if (get_next_posts_link()) {
			echo '<a class="btn btn-primary btn-large btn-block" href="javascript:void(0)" data-href="' . next_posts($wp_query->max_num_pages, false) . '">' . __('Older posts', 'shprinkone') . '</a>';
		}
		?>
	</div>
<?php elseif (isset($options['theme_posts']['type']) && $options['theme_posts']['type'] === 'default'): ?>
	<div id="page-nav">
		<div class="row">
			<div class="col-md-6 col-lg-6 col-sm-6">
				<?php if (get_next_posts_link()) : ?>
					<a class="nav-previous btn btn-primary btn-large btn-block" href="<?php echo next_posts($wp_query->max_num_pages, false) ?>"><i class="icon-chevron-left"></i> <?php _e('Older posts', 'shprinkone') ?></a>
				<?php endif; ?>
			</div>

			<div class="col-md-6 col-lg-6 col-sm-6">
				<?php if (get_previous_posts_link()) : ?>
					<a class="nav-next btn btn-primary btn-large btn-block" href="<?php echo previous_posts(false); ?>"><?php _e('Newer posts', 'shprinkone'); ?> <i class="icon-chevron-right"></i> </a>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
