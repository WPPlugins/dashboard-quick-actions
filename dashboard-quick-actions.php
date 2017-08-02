<?php
/*
Plugin Name: Dashboard Quick Actions
Description: Admin dashboard quick action icons for WordPress
Author: uniquelylost
Version: 1.2
Requires at least: 3.8
Author URI: http://ndgraphic.com
License: GPL3
*/

	// Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        die;
    }
	
	//Lets run redux options framework if plugin is not installed
	if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/assets/admin/redux-framework/framework.php' ) ) {
		
		require_once( dirname( __FILE__ ) . '/assets/admin/redux-framework/framework.php' );
		
		//if not installed without us then remove redux menu under the tools
		add_action( 'admin_menu', 'dqa_remove_redux_menu',12 );
		function dqa_remove_redux_menu() {
			remove_submenu_page('tools.php','redux-about');
		}
	}

	//lets add redux vendor support
	if ( ! class_exists( 'ReduxFramework_extension_vendor_support' ) ) {
		if ( file_exists( dirname( __FILE__ ) . '/assets/admin/redux-extensions/extensions-init.php' ) ) {
			require dirname( __FILE__ ) . '/assets/admin/redux-extensions/extensions-init.php';
		}
	}
	
	//load up our options page
	if ( !isset( $dqa_options ) && file_exists( dirname( __FILE__ ) . '/assets/dqa-options.php' ) ) {
		require_once( dirname( __FILE__ ) . '/assets/dqa-options.php' );
	}
	
	//lets add scripts we need only to the admin dashboard page
	add_action( 'admin_enqueue_scripts', 'dqa_add_stylesheet_to_admin' );

    //heres the stylesheet location
    function dqa_add_stylesheet_to_admin() {
        wp_enqueue_style( 'prefix-style', plugins_url('/assets/dashboard-quick-actions.css', __FILE__) );
    }

	
	// ADD actions custom dashboard widget
	// Function that outputs the contents of the dashboard widget
	function dqa_actions_dashboard_widget() {
	global $dqa_options; // This is redux opt_name.
	?>
		<div class="dqa-widget">
		
			<?php if($dqa_options['opt-select-icon'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text']; ?></span>
				</div>
			</a>
			<?php } ?>
		
			<?php if($dqa_options['opt-select-icon2'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link2']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon2']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text2']; ?></span>
				</div>
			</a>
			<?php } ?>

			<?php if($dqa_options['opt-select-icon3'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link3']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon3']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text3']; ?></span>
				</div>
			</a>
			<?php } ?>

			<?php if($dqa_options['opt-select-icon4'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link4']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon4']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text4']; ?></span>
				</div>
			</a>
			<?php } ?>
		
			<?php if($dqa_options['opt-select-icon5'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link5']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon5']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text5']; ?></span>
				</div>
			</a>
			<?php } ?>
		
			<?php if($dqa_options['opt-select-icon6'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link6']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon6']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text6']; ?></span>
				</div>
			</a>
			<?php } ?>
		
			<?php if($dqa_options['opt-select-icon7'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link7']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon7']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text7']; ?></span>
				</div>
			</a>
			<?php } ?>
		
			<?php if($dqa_options['opt-select-icon8'] != ''){ ?>
			<a class='dqa-icon-block' href='<?php echo $dqa_options['opt-the-link8']; ?>'>
				<div>
					<span style='background:<?php echo $dqa_options['opt-global-icon-background-color']; ?>; color:<?php echo $dqa_options['opt-global-icon-color']; ?>; font-size:<?php echo $dqa_options['opt-icon-size']; ?>;' class='dashicons metro-bg dashicons-<?php echo $dqa_options['opt-select-icon8']; ?> hvr-<?php echo $dqa_options['opt-hover-effect']; ?>'></span>
				</div>
				<div>
					<span style='color:<?php echo $dqa_options['opt-global-text-color']; ?>; font-size:<?php echo $dqa_options['opt-text-size']; ?>;'><?php echo $dqa_options['opt-the-text8']; ?></span>
				</div>
			</a>
			<?php } ?>
			
		</div>
	<?php }
 
	// Function used in the action hook
	function add_actions_dashboard_widgets() {
		global $dqa_options; // This is redux opt_name.
		//lets check our permissions option for widget display
		$dba_widget_permissions = $dqa_options['opt-select-permissions'];
		if ( current_user_can($dba_widget_permissions) ) {
			$dba_widget_side = $dqa_options['opt-select-widget-side'];
			$dba_widget_priority = $dqa_options['opt-select-widget-priority'];
			add_meta_box('actions_dashboard_widget', 'Quick Actions', 'dqa_actions_dashboard_widget', 'dashboard', $dba_widget_side, $dba_widget_priority);
		}
	}
	// Register the new dashboard widget with the 'wp_dashboard_setup' action
	add_action('wp_dashboard_setup', 'add_actions_dashboard_widgets' ); //tada!