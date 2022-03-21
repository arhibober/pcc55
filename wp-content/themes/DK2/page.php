<?php
/**
 * Template file used to render a static page (page post-type)
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
?>
<?php get_header();
if ($_GET ["edit"] > 0)
{
global $user_ID;
if ($user_ID != 1)
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Для доступа к этой странице зайдите, пожалуйста, на сайт под правами администратора.";
else
{
if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
{
echo "<div class='container' style='width: 1180px !important; margin: 0 auto !important;'>";
	echo "<div id='content' style='width: 1180px !important; margin: 0 auto !important;'>
		<div class='row' style='width: 1180px !important; margin: 0 auto !important;'>
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
		<div class='row' style='position: relative !important; top: -86px !important;'>";
			shprinkone_get_sidebar('left');
			}
			echo "<div class='".shprinkone_get_contentspan()."' style='float: left; position: relative; top: 25px;";
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
				echo " width: 815px !important; position: relative; top: 11px;";
			else
				echo " position: relative; top: 25px;";
			echo "'>
			<div class='panel panel-default'>";
global $userdata;
        $userdata = get_user_by( 'id', $userdata->ID );

		if ( isset( $_POST['wpuf_post_new_submit'] ) ) {
            submit_post();
        }		
        if ( isset( $_POST['wpuf_edit_post_submit'] )) {
            submit_post1();
        }

        $info = __( "Post It!", 'wpuf' );
        $can_post = 'yes';

        $info = apply_filters( 'wpuf_addpost_notice', $info );
        $can_post = apply_filters( 'wpuf_can_post', $can_post );
        $featured_image = wpuf_get_option( 'enable_featured_image', 'wpuf_frontend_posting', 'no' );

        $title = isset( $_POST['wpuf_post_title'] ) ? esc_attr( $_POST['wpuf_post_title'] ) : '';
        $description = isset( $_POST['wpuf_post_content'] ) ? $_POST['wpuf_post_content'] : '';
global $wpdb;
$sqlstr = "SELECT post_title, post_content from wp_posts where ID=".$_GET ["edit"];
$post_list = $wpdb->get_results($sqlstr, ARRAY_A);
$content = $post_list[0]["post_content"];
$title1 = $post_list[0]["post_title"];
?><h2 id="page-title" class="post-title" style="color: #295e9c;">Редактировать текущий пост</h2>
        <div id="wpuf-post-area1" style="position: relative; left: 28px;">	
            <form name="wpuf_edit_post_form" id="wpuf_edit_post_form" action="" enctype="multipart/form-data" method="POST">
                <?php wp_nonce_field( 'wpuf-edit-post' ) ?>
                <ul class="wpuf-post-form">

                    <?php do_action( 'wpuf_add_post_form_top', $curpost->post_type, $curpost ); //plugin hook      ?>
                    <?php wpuf_build_custom_field_form( 'top', true, $_GET ["edit"]); ?>
					<?php if ( $featured_image == 'yes' ) { ?>
                        <?php if ( current_theme_supports( 'post-thumbnails' ) ) { ?>
                            <li>
                                <label for="post-thumbnail"><?php echo wpuf_get_option( 'ft_image_label', 'wpuf_labels', 'Featured Image' ); ?></label>
                                <div id="wpuf-ft-upload-container">
                                    <div id="wpuf-ft-upload-filelist">
                                        <?php
                                        $style = '';
                                        if ( has_post_thumbnail($_GET ["edit"]) ) {
                                            $style = ' style="display:none"';

                                            $post_thumbnail_id = get_post_thumbnail_id($_GET ["edit"]);
                                            echo wpuf_feat_img_html( $post_thumbnail_id, $_GET ["edit"]);
											
							global $post;
											
										the_post_thumbnail('', array('class' => 'img-responsive'), 300, 400);
                                        }
										else
										{
										echo "<a id='wpuf-ft-upload-pickfiles1' class='button' href='#'>".wpuf_get_option( 'ft_image_btn_label', 'wpuf_labels', 'Upload Image' )."</a>";
										}
                                        ?>
										
                                    </div>
                                    
                                </div>
                                <div class="clear"></div>
                            </li>
                        <?php } else { ?>
                            <div class="info"><?php _e( 'Your theme doesn\'t support featured image', 'wpuf' ) ?></div>
                        <?php } ?>
                    <?php } ?>


                    

                    <li>
                        <label for="new-post-title1">
                            <?php echo wpuf_get_option( 'title_label', 'wpuf_labels', 'Заголовок' ); ?> <span class="required">*</span>
                        </label>
						<br/>
                        <input type="text" name="wpuf_post_title1" id="new-post-title1" minlength="2" value="<?php echo $title1; ?>">
                        <div class="clear"></div>
                        <p class="description"><?php echo stripslashes( wpuf_get_option( 'title_help', 'wpuf_labels' ) ); ?></p>
                    </li>

                    <?php if ( wpuf_get_option( 'allow_cats', 'wpuf_frontend_posting', 'on' ) == 'on' ) { ?>
                        <li>
                            <label for="new-post-cat">
                                <?php echo wpuf_get_option( 'cat_label', 'wpuf_labels', 'Категория' ); ?> <span class="required">*</span>
                            </label>

                            <?php
                            $exclude = wpuf_get_option( 'exclude_cats', 'wpuf_frontend_posting' );
                            $cat_type = wpuf_get_option( 'cat_type', 'wpuf_frontend_posting' );

                            $cats = get_the_category($_GET ["edit"]);
                            $selected = 0;
                            if ( $cats ) {
                                $selected = $cats[0]->term_id;
                            }
                            ?>
                            <div class="category-wrap" style="float:left;">
                                <div id="lvl01">
                                    <?php
                                        wpuf_category_checklist( $_GET ["edit"], false, 'category', $exclude);
                                    ?>
                                </div>
                            </div>
                            <div class="loading"></div>
                            <div class="clear"></div>
                            <p class="description"><?php echo stripslashes( wpuf_get_option( 'cat_help', 'wpuf_labels' ) ); ?></p>
                        </li>
                    <?php		} ?>

                    <?php do_action( 'wpuf_add_post_form_description', $curpost->post_type, $curpost ); ?>
                    <?php wpuf_build_custom_field_form( 'description', true, $curpost->ID ); ?>

                    <li>
					<label for="new-post-cat">
						Текст поста <span class='required'>*</span>
					</label>
						<?php wp_editor( $content, 'new-post-desc', array('textarea_name' => 'wpuf_post_content1', 'editor_class' => 'requiredField', 'teeny' => false, 'textarea_rows' => 8,), false); ?>
                    </li>

                    <?php do_action( 'wpuf_add_post_form_after_description', $curpost->post_type, $curpost ); ?>
                    <?php wpuf_build_custom_field_form( 'tag', true, $curpost->ID ); ?>
					
					<br/>

                                            
                    

                    <li>
                        <label>&nbsp;</label>
                        <input class="wpuf_submit" type="submit" name="wpuf_edit_post_submit1" value="<?php echo esc_attr( wpuf_get_option( 'update_label', 'wpuf_labels', 'Обновить пост' ) ); ?>">
                        <input type="hidden" name="wpuf_edit_post_submit" value="yes" />
                        <input type="hidden" name="post_id1" value="<?php echo $_GET ["edit"]; ?>">
                    </li>
                </ul>
            </form>
        </div>
		</div>
		<?php
 echo "</div>";
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "<div style='position: relative; left: 33px;'>
			<form class='navbar-search navbar-form' method='get'
	action='".esc_url(home_url('/'))."' id='searchgroup' style='float: left !important; position: relative !important; left: 19px !important;'>
	<input type='text' class='form-control' placeholder='Поиск' name='s' style='display: inline; width: 270px !important;' id='searchform'>
			<input type='image' src='http://localhost/pcc55/wp-content/themes/DK2/img/search.gif' style='border:0; vertical-align: top; height: 34px; width: 28px; display: inline;' id='searchimage'/><br/>
</form><br/><br/><br/><br/>";
else
	echo "<div style='position: relative; top: -2px;'>";
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
<?php endif;
}			
}
else{

if ($_GET ["remove"] > 0)
{
global $user_ID;
if ($user_ID != 1)
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Для доступа к этой странице зайдите, пожалуйста, на сайт под правами администратора.";
else
{
	global $wpdb;
	$wpdb->query("DELETE FROM wp_posts WHERE ID=".$_GET ["remove"]);
	if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
{
	echo "<div class='container' style='width: 1180px !important; margin: 0 auto !important;'>";
	echo "<div id='content' style='width: 1180px !important; margin: 0 auto !important;'>
		<div class='row' style='width: 1180px !important; margin: 0 auto !important;'>
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
		<div class='row' style='position: relative !important; top: -50px !important;'>";
			shprinkone_get_sidebar('left');
			}
			echo "<div class='".shprinkone_get_contentspan()."' style='position: relative; float: left;";
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
				echo " width: 815px; top: 11px;'";
			else
				echo " top: -11px;'";
			echo ">
			<div class='panel panel-default'>
			Пост успешно удалён.</div></div>";
			
}
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "<div style='position: relative; left: 33px;'>
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
</div>
<div style='background-color: #1f4776 !important; width: 100% !important; clear: left !important; margin-top: 100px;'>";
 get_footer();
if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
echo "</div>";
else
if (is_page()): ?>
	<?php get_template_part('page'); ?>
<?php endif;
}
else
{
 if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
{
echo "<div class='container' style='margin: 0 auto !important;'>";
	echo "<div id='content' style='margin: 0 auto !important; position: relative; top: 125px !important;'>
		<div class='row' style='position: relative !important; top: -130px !important; margin: 0 auto !important;'>
<div style='display: inline !important; float: left !important; position: relative; left: 40px; top: 0px; margin: 0 auto !important;' valign='top' class='col-sm-3 col-md-3 col-lg-3' id='sidebar'>
		<div style='margin: 0 auto !important;'><div style='float: left !important; margin: 0 auto !important;'>";
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
			<div class="<?php echo shprinkone_get_contentspan(); ?>" style="position: relative; top: -11px; float: left !important;
			<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
				echo " width: 820px !important; top: 11px;";
			else
				echo " top: -11px;";
				?>">
				<?php if (have_posts()) while (have_posts()) : the_post(); ?>
						<div id="page-<?php the_ID(); ?>" class="panel panel-default" style="padding-left: 15px !important;">
								<?php if (has_post_thumbnail()): ?>
						<div class="post-thumbnail" style="margin-top: 15px !important;">
							<?php
							global $post;
								global $wpdb;
$sqlstr = "SELECT meta_value from wp_postmeta where post_id=(select meta_value from wp_postmeta where post_id=".$post->ID." and meta_key='_thumbnail_id') and meta_key='_wp_attached_file'";
$photo_list = $wpdb->get_results($sqlstr, ARRAY_A);
echo "<a href='http://localhost/pcc55/wp-content/uploads/".$photo_list[0]["meta_value"]."'>";?>
								<?php 
										the_post_thumbnail('', array('class' => 'img-responsive'), 300, 400);
										?>
								</a>
							</div>
								<?php endif; ?>
								<div class="page-header">
									<h2 id="page-title" class="post-title" style="color: #295e9c;">
										<?php the_title(); ?>
									</h2>
								</div>
								<?php the_content(); ?>
								<?php shprinkone_link_pages(); ?>
							</div>
						</div>
					<?php endwhile; // end of the loop. ?>
<!-- container end -->
<div style="position: relative; top: -38px;">
<?php
			if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
			echo "<div style='position: relative; top: 38px; left: 33px;'>
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
	</div>
	<!-- container end -->
	<?php if ((strstr($_SERVER['HTTP_USER_AGENT'], 'IE')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 11')) && (!strstr($_SERVER['HTTP_USER_AGENT'], 'MSIE 12')))
echo "</div> 
</div> 
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
<?php endif;
}
}
					
function submit_post1() {
        global $userdata;

        $errors = array();

        $title = trim( $_POST['wpuf_post_title1'] );
        $content = trim( $_POST['wpuf_post_content1'] );

        $tags = '';
        $cat = '';
        if ( isset( $_POST['wpuf_post_tags1'] ) ) {
            $tags = wpuf_clean_tags( $_POST['wpuf_post_tags1'] );
        }

        //if there is some attachement, validate them
        if ( !empty( $_FILES['wpuf_post_attachments1'] ) ) {
            $errors = wpuf_check_upload();
        }

        if ( empty( $title ) ) {
            $errors[] = __( 'Вы стёрли заголовок поста', 'wpuf' );
        } else {
            $title = trim( strip_tags( $title ) );
        }

        //validate cat
        if ( wpuf_get_option( 'allow_cats', 'wpuf_frontend_posting', 'on' ) == 'on' ) {
            $cat_type = wpuf_get_option( 'cat_type', 'wpuf_frontend_posting', 'normal' );
            if ( !isset( $_POST['category'] ) ) {
                $errors[] = __( 'Пожалуйста, выберите категорию', 'wpuf' );
            } else if ( $cat_type == 'normal' && $_POST['category'][0] == '-1' ) {
                $errors[] = __( 'Пожалуйста, выберите категори', 'wpuf' );
            } else {
                if ( count( $_POST['category'] ) < 1 ) {
                    $errors[] = __( 'Пожалуйста, выберите категори', 'wpuf' );
                }
            }
        }

        if ( empty( $content ) ) {
            $errors[] = __( 'Окно для текста пустое', 'wpuf' );
        } else {
            $content = trim( $content );
        }		
		$content1 [0] = $content;
		$content5 = "";
		for ($i = 0; $i < substr_count ($content, "youtu"); $i++)
			for ($i = 0; $i < substr_count ($content, "youtu"); $i++)
			if (strstr ($content1 [$i], "youtu"))
			{
				if (((strstr (strstr ($content1 [$i], "youtu"), " ")) && (strstr (strstr ($content1 [$i], "youtu"), "
")) && (stripos (strstr ($content1 [$i], "youtu"), " ") < stripos (strstr ($content1 [$i], "youtu"), "
"))) || ((strstr (strstr ($content1 [$i], "youtu"), " ")) && (!strstr (strstr ($content1 [$i], "youtu"), "
"))))
				{
					$content2 = strstr (strstr ($content1 [$i], "youtu"), " ");
					$content4 = strstr (strstr ($content1 [$i], "youtu"), "	", true);
				}
				if (((strstr (strstr ($content1 [$i], "youtu"), " ")) && (strstr (strstr ($content1 [$i], "youtu"), "
")) && (stripos (strstr ($content1 [$i], "youtu"), " ") > stripos (strstr ($content1 [$i], "youtu"), "
"))) || ((!strstr (strstr ($content1 [$i], "youtu"), " ")) && (strstr (strstr ($content1 [$i], "youtu"), "
"))))
				{
					$content2 = strstr (strstr ($content1 [$i], "youtu"), "
");					
					$content4 = strstr (strstr ($content1 [$i], "youtu"), "
", true);
				}
				if ((!strstr (strstr ($content1 [$i], "youtu"), " ")) && (!strstr (strstr ($content1 [$i], "youtu"), "
")))				
				{
					$content2 = "";
					$content4 = strstr ($content1 [$i], "youtu");
				}
				if (((strstr (strstr ($content1 [$i], "youtu", true), " ")) && (strstr (strstr ($content1 [$i], "youtu", true), "
")) && (strrpos (strstr ($content1 [$i], "youtu", true), " ") > strrpos (strstr ($content1 [$i], "youtu", true), "
"))) || ((strstr (strstr ($content1 [$i], "youtu", true), " ")) && (!strstr (strstr ($content1 [$i], "youtu", true), "
"))))
					$content3 = substr (strstr ($content1 [$i], "youtu", true), 0, strlen (strstr ($content1 [$i], "youtu", true)) - strlen (strrchr (strstr ($content1 [$i], "youtu", true), " ")))." ";
				if (((strstr (strstr ($content1 [$i], "youtu", true), " ")) && (strstr (strstr ($content1 [$i], "youtu", true), "
")) && (strrpos (strstr ($content1 [$i], "youtu", true), " ") < strrpos (strstr ($content1 [$i], "youtu", true), "
"))) || ((!strstr (strstr ($content1 [$i], "youtu", true), " ")) && (strstr (strstr ($content1 [$i], "youtu", true), "
"))))
					$content3 = substr (strstr ($content1 [$i], "youtu", true), 0, strlen (strstr ($content1 [$i], "youtu", true)) - strlen (strrchr (strstr ($content1 [$i], "youtu", true), "
")))."
";
				if ((!strstr (strstr ($content1 [$i], "youtu", true), " ")) && (!strstr (strstr ($content1 [$i], "youtu", true), "
")))
					$content3 = "";
				if (strstr ($content4, ".be/"))
					$adress = substr ($content4, 9, 11);
				if (strstr ($content4, "embed"))
					$adress = substr ($content4, 18, 11);
				if (strstr ($content4, "v="))
					$adress = substr ( strstr ($content4, "v="), 2, 11);
				$content1 [$i + 1] = $content2;
				$content5 = $content5.$content3."<iframe width='420' height='315' src='//www.youtube.com/embed/".$adress."' frameborder='0' allowfullscreen autoplay='0'></iframe>";
			}
		if (strstr ($content, "youtu"))
		{
			$content5 = $content5.$content2;
			$content = $content5;
		}
		
        if ( !empty( $tags ) ) {
            $tags = explode( ',', $tags );
        }

        //process the custom fields
        $custom_fields = array();

        $fields = wpuf_get_custom_fields();
        if ( is_array( $fields ) ) {

            foreach ($fields as $cf) {
                if ( array_key_exists( $cf['field'], $_POST ) ) {

                    if ( is_array( $_POST[$cf['field']] ) ) {
                        $temp = implode(',', $_POST[$cf['field']]);
                    } else {
                        $temp = trim( strip_tags( $_POST[$cf['field']] ) );
                    }
                    //var_dump($temp, $cf);

                    if ( ( $cf['type'] == 'yes' ) && !$temp ) {
                        $errors[] = sprintf( __( '"%s" is missing', 'wpuf' ), $cf['label'] );
                    } else {
                        $custom_fields[$cf['field']] = $temp;
                    }
                } //array_key_exists
            } //foreach
        } //is_array
        //post attachment
        $attach_id = isset( $_POST['wpuf_featured_img'] ) ? intval( $_POST['wpuf_featured_img'] ) : 0;

        $errors = apply_filters( 'wpuf_edit_post_validation', $errors );

        if ( !$errors ) {

            //users are allowed to choose category
            if ( wpuf_get_option( 'allow_cats', 'wpuf_frontend_posting', 'on' ) == 'on' ) {
                $post_category = $_POST ["category"];
            } else {
                $post_category = array( wpuf_get_option( 'default_cat', 'wpuf_frontend_posting' ) );
            }

            $post_update = array(
                'ID' => trim ($_POST ["post_id1"]),
                'post_title' => $title,
                'post_content' => $content,
                'post_category' => $post_category,
                'tags_input' => $tags
            );

            //plugin API to extend the functionality
            $post_update = apply_filters( 'wpuf_edit_post_args', $post_update );

            $post_id = wp_update_post( $post_update );

            if ( $post_id ) {
                echo '<div style="position: relative: height: 20px !important; left: 300px !important; top: 2000px !important;">' . __( 'Пост обновлен успешно.', 'wpuf' ) . '<br/>
				<form action ="'.get_permalink ($_POST ["post_id1"]).'" metchod="post">
				<input type="submit" value="Перейти к посту" class="btn-default"/>
				</form>
				</div>';

                //upload attachment to the post
                wpuf_upload_attachment( $post_id );

                //set post thumbnail if has any
                if ( $attach_id ) {
                    set_post_thumbnail( $post_id, $attach_id );
                }

                //add the custom fields
                if ( $custom_fields ) {
                    foreach ($custom_fields as $key => $val) {
                        update_post_meta( $post_id, $key, $val, false );
                    }
                }

                do_action( 'wpuf_edit_post_after_update', $post_id );
            }
        } else {
            echo wpuf_error_msg( $errors );
        }
    }
		?> 