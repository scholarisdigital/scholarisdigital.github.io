<?php

add_action( 'admin_menu', 'foodie_restaurant_getting_started' );
function foodie_restaurant_getting_started() {
	add_theme_page( esc_html__('Get Started', 'foodie-restaurant'), esc_html__('Get Started', 'foodie-restaurant'), 'edit_theme_options', 'foodie-restaurant-guide-page', 'foodie_restaurant_test_guide');
}

function foodie_restaurant_admin_enqueue_scripts() {
	wp_enqueue_style( 'foodie-restaurant-admin-style',get_template_directory_uri().'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'foodie_restaurant_admin_enqueue_scripts' );

if ( ! defined( 'FOODIE_RESTAURANT_DOCS_FREE' ) ) {
define('FOODIE_RESTAURANT_DOCS_FREE',__('https://www.misbahwp.com/docs/foodie-restaurant-free-docs/','foodie-restaurant'));
}
if ( ! defined( 'FOODIE_RESTAURANT_DOCS_PRO' ) ) {
define('FOODIE_RESTAURANT_DOCS_PRO',__('https://www.misbahwp.com/docs/foodie-restaurant-pro-docs','foodie-restaurant'));
}
if ( ! defined( 'FOODIE_RESTAURANT_BUY_NOW' ) ) {
define('FOODIE_RESTAURANT_BUY_NOW',__('https://www.misbahwp.com/themes/fast-food-wordpress-theme/','foodie-restaurant'));
}
if ( ! defined( 'FOODIE_RESTAURANT_SUPPORT_FREE' ) ) {
define('FOODIE_RESTAURANT_SUPPORT_FREE',__('https://wordpress.org/support/theme/foodie-restaurant','foodie-restaurant'));
}
if ( ! defined( 'FOODIE_RESTAURANT_REVIEW_FREE' ) ) {
define('FOODIE_RESTAURANT_REVIEW_FREE',__('https://wordpress.org/support/theme/foodie-restaurant/reviews/#new-post','foodie-restaurant'));
}
if ( ! defined( 'FOODIE_RESTAURANT_DEMO_PRO' ) ) {
define('FOODIE_RESTAURANT_DEMO_PRO',__('https://www.misbahwp.com/demo/foodie-restaurant/','foodie-restaurant'));
}

function foodie_restaurant_test_guide() { ?>
	<?php $foodie_restaurant_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( FOODIE_RESTAURANT_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'foodie-restaurant' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'foodie-restaurant' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( FOODIE_RESTAURANT_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'foodie-restaurant' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( FOODIE_RESTAURANT_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'foodie-restaurant' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','foodie-restaurant'); ?><?php echo esc_html( $foodie_restaurant_theme ); ?>  <span><?php esc_html_e('Version: ', 'foodie-restaurant'); ?><?php echo esc_html($foodie_restaurant_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$foodie_restaurant_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $foodie_restaurant_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','foodie-restaurant'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','foodie-restaurant'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','foodie-restaurant'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','foodie-restaurant'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'foodie-restaurant' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','foodie-restaurant'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( FOODIE_RESTAURANT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'foodie-restaurant' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( FOODIE_RESTAURANT_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'foodie-restaurant' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( FOODIE_RESTAURANT_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'foodie-restaurant' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
