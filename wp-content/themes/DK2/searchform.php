<?php
/**
 * Template search form
 *
 * @package     WordPress
 * @subpackage  shprink_one
 * @since       1.0
 */
?>
<form class="navbar-search navbar-form" method="get"
	action="<?php echo esc_url(home_url('/')); ?>" id="searchgroup" style="width: 120%">
	<input type="text" class="form-control" placeholder="Поиск" name="s" style="display: inline;" id="searchform">
			<input type="image" src="http://localhost/pcc55/wp-content/themes/DK2/img/search.gif" style="border:0; vertical-align: top; height: 34px; width: 28px; display: inline;" id="searchimage"/><br/>
</form>