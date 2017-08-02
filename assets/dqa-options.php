<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "dqa_options";


    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */
	
	
	$args = array(
        'opt_name' => 'dqa_options',
        'display_name' => 'Dashboard Quick Actions',
        'display_version' => '1.2',
        'page_title' => 'Dashboard Quick Actions',
		'dev_mode' => false,
        'update_notice' => false,
		'forced_dev_mode_off' => true,
		'admin_bar' => false,
		'show_import_export' => false,
        'menu_type' => 'submenu',
        'menu_title' => 'Dashboard Quick Actions',
        'allow_sub_menu' => TRUE,
        'page_parent' => 'options-general.php',
        'page_parent_post_type' => 'your_post_type',
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
        'use_cdn' => FALSE,
    );

Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */
	
	//option icon array
	$dqa_the_full_icon_list = array('admin-appearance' => 'admin-appearance','admin-collapse' => 'admin-collapse','admin-comments' => 'admin-comments','admin-generic' => 'admin-generic','admin-home' => 'admin-home','admin-links' => 'admin-links','admin-media' => 'admin-media','admin-network' => 'admin-network','admin-page' => 'admin-page','admin-plugins' => 'admin-plugins','admin-post' => 'admin-post','admin-settings' => 'admin-settings','admin-site' => 'admin-site','admin-tools' => 'admin-tools','admin-users' => 'admin-users','align-center' => 'align-center','align-left' => 'align-left','align-none' => 'align-none','align-right' => 'align-right','analytics' => 'analytics','arrow-down' => 'arrow-down','arrow-down-alt' => 'arrow-down-alt','arrow-down-alt2' => 'arrow-down-alt2','arrow-left' => 'arrow-left','arrow-left-alt' => 'arrow-left-alt','arrow-left-alt2' => 'arrow-left-alt2','arrow-right' => 'arrow-right','arrow-right-alt' => 'arrow-right-alt','arrow-right-alt2' => 'arrow-right-alt2','arrow-up' => 'arrow-up','arrow-up-alt' => 'arrow-up-alt','arrow-up-alt2' => 'arrow-up-alt2','art' => 'art','awards' => 'awards','backup' => 'backup','book' => 'book','book-alt' => 'book-alt','businessman' => 'businessman','calendar' => 'calendar','camera' => 'camera','cart' => 'cart','category' => 'category','chart-area' => 'chart-area','chart-bar' => 'chart-bar','chart-line' => 'chart-line','chart-pie' => 'chart-pie','clock' => 'clock','cloud' => 'cloud','dashboard' => 'dashboard','desktop' => 'desktop','dismiss' => 'dismiss','download' => 'download','edit' => 'edit','editor-aligncenter' => 'editor-aligncenter','editor-alignleft' => 'editor-alignleft','editor-alignright' => 'editor-alignright','editor-bold' => 'editor-bold','editor-customchar' => 'editor-customchar','editor-distractionfree' => 'editor-distractionfree','editor-help' => 'editor-help','editor-indent' => 'editor-indent','editor-insertmore' => 'editor-insertmore','editor-italic' => 'editor-italic','editor-justify' => 'editor-justify','editor-kitchensink' => 'editor-kitchensink','editor-ol' => 'editor-ol','editor-outdent' => 'editor-outdent','editor-paste-text' => 'editor-paste-text','editor-paste-word' => 'editor-paste-word','editor-quote' => 'editor-quote','editor-removeformatting' => 'editor-removeformatting','editor-rtl' => 'editor-rtl','editor-spellcheck' => 'editor-spellcheck','editor-strikethrough' => 'editor-strikethrough','editor-textcolor' => 'editor-textcolor','editor-ul' => 'editor-ul','editor-underline' => 'editor-underline','editor-unlink' => 'editor-unlink','editor-video' => 'editor-video','email' => 'email','email-alt' => 'email-alt','exerpt-view' => 'exerpt-view','facebook' => 'facebook','facebook-alt' => 'facebook-alt','feedback' => 'feedback','flag' => 'flag','format-aside' => 'format-aside','format-audio' => 'format-audio','format-chat' => 'format-chat','format-gallery' => 'format-gallery','format-image' => 'format-image','format-quote' => 'format-quote','format-status' => 'format-status','format-video' => 'format-video','forms' => 'forms','googleplus' => 'googleplus','groups' => 'groups','hammer' => 'hammer','id' => 'id','id-alt' => 'id-alt','image-crop' => 'image-crop','image-flip-horizontal' => 'image-flip-horizontal','image-flip-vertical' => 'image-flip-vertical','image-rotate-left' => 'image-rotate-left','image-rotate-right' => 'image-rotate-right','images-alt' => 'images-alt','images-alt2' => 'images-alt2','feedback' => 'feedback','info' => 'info','leftright' => 'leftright','lightbulb' => 'lightbulb','list-view' => 'list-view','location' => 'location','location-alt' => 'location-alt','lock' => 'lock','marker' => 'marker','menu' => 'menu','migrate' => 'migrate','minus' => 'minus','networking' => 'networking','no' => 'no','no-alt' => 'no-alt','performance' => 'performance','plus' => 'plus','portfolio' => 'portfolio','post-status' => 'post-status','pressthis' => 'pressthis','products' => 'products','redo' => 'redo','rss' => 'rss','screenoptions' => 'screenoptions','search' => 'search','share' => 'share','share-alt' => 'share-alt','share-alt2' => 'share-alt2','shield' => 'shield','shield-alt' => 'shield-alt','slides' => 'slides','smartphone' => 'smartphone','smiley' => 'smiley','sort' => 'sort','sos' => 'sos','star-empty' => 'star-empty','star-filled' => 'star-filled','star-half' => 'star-half','tablet' => 'tablet','tag' => 'tag','testimonial' => 'testimonial','translation' => 'translation','trash' => 'trash','twitter' => 'twitter','undo' => 'undo','update' => 'update','rss' => 'upload','screenoptions' => 'vault','video-alt' => 'video-alt','video-alt2' => 'video-alt2','video-alt3' => 'video-alt3','visibility' => 'visibility','welcome-add-page' => 'welcome-add-page','welcome-comments' => 'welcome-comments','welcome-learn-more' => 'welcome-learn-more','welcome-view-site' => 'welcome-view-site','welcome-widgets-menus' => 'welcome-widgets-menus','welcome-write-blog' => 'welcome-write-blog','wordpress' => 'wordpress','wordpress-alt' => 'wordpress-alt','yes' => 'yes',);
	//option hover array
	$dba_the_hover_effect = array('bob' => 'bob','bounce-in' => 'bounce-in','bounce-out' => 'bounce-out','buzz' => 'buzz','buzz-out' => 'buzz-out','float' => 'float','grow' => 'grow','grow-rotate' => 'grow-rotate','hang' => 'hang','pop' => 'pop','pulse' => 'pulse','pulse-grow' => 'pulse-grow','pulse-shrink' => 'pulse-shrink','push' => 'push','rotate' => 'rotate','shrink' => 'shrink','sink' => 'sink','skew' => 'skew','skew-backward' => 'skew-backward','skew-forward' => 'skew-forward','wobble-bottom' => 'wobble-bottom','wobble-horizontal' => 'wobble-horizontal','wobble-skew' => 'wobble-skew','wobble-to-bottom-right' => 'wobble-to-bottom-right','wobble-to-top-right' => 'wobble-to-top-right','wobble-top' => 'wobble-top','wobble-vertical' => 'wobble-vertical',);

    /*
     *
     * ---> START SECTIONS
     *
     */
	  // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Dashicons', 'dashboard-quick-actions' ),
        'id'     => 'icons',
        'desc'   => __( 'Fill out the folowing information for icons to appear on your dashboard', 'dashboard-quick-actions' ),
        'icon'   => 'el el-list-alt',
        'fields' => array(
			array(
                'id'       => 'section-start',
                'type'     => 'section',
                'title'    => __( '#1 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'       => 'opt-select-icon',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => 'edit'
            ),
			array(
                'id'       => 'opt-the-text',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => 'Add Post',
            ),
			array(
                'id'       => 'opt-the-link',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => '/wp-admin/post-new.php',
            ),
			array(
                'id'     => 'section-end',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start2',
                'type'     => 'section',
                'title'    => __( '#2 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-icon2',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => 'welcome-add-page'
            ),
			array(
                'id'       => 'opt-the-text2',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => 'Add Page',
            ),
			array(
                'id'       => 'opt-the-link2',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => '/wp-admin/post-new.php?post_type=page',
            ),
			array(
                'id'     => 'section-end2',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start3',
                'type'     => 'section',
                'title'    => __( '#3 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-icon3',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => 'admin-plugins'
            ),
			array(
                'id'       => 'opt-the-text3',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => 'Add Plugin',
            ),
			array(
                'id'       => 'opt-the-link3',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => '/wp-admin/plugin-install.php',
            ),
			array(
                'id'     => 'section-end3',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start4',
                'type'     => 'section',
                'title'    => __( '#4 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-icon4',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => 'twitter'
            ),
			array(
                'id'       => 'opt-the-text4',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => 'Twitter',
            ),
			array(
                'id'       => 'opt-the-link4',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => 'https://twitter.com',
            ),
			array(
                'id'     => 'section-end4',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start5',
                'type'     => 'section',
                'title'    => __( '#5 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-icon5',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => ''
            ),
			array(
                'id'       => 'opt-the-text5',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'       => 'opt-the-link5',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'     => 'section-end5',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start6',
                'type'     => 'section',
                'title'    => __( '#6 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-icon6',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => ''
            ),
			array(
                'id'       => 'opt-the-text6',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'       => 'opt-the-link6',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'     => 'section-end6',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start7',
                'type'     => 'section',
                'title'    => __( '#7 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-icon7',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => ''
            ),
			array(
                'id'       => 'opt-the-text7',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'       => 'opt-the-link7',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'     => 'section-end7',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start88',
                'type'     => 'section',
                'title'    => __( '#8 Dashicon', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-icon8',
                'type'     => 'select',
                'title'    => __( 'Select Dashicon', 'dashboard-quick-actions' ),
                'desc'     => __( 'To see all available icons visit: ', 'dashboard-quick-actions' ) . '<a href="//developer.wordpress.org/resource/dashicons/" target="_blank">wordpress.org/resource/dashicons/</a>',
				//Must provide key => value pairs for select options
                'options'  => array(
                    $dqa_the_full_icon_list
                ),
                'default'  => ''
            ),
			array(
                'id'       => 'opt-the-text8',
                'type'     => 'text',
                'title'    => __( 'Link Text', 'dashboard-quick-actions' ),
				'desc'     => __( 'keep it short', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'       => 'opt-the-link8',
                'type'     => 'text',
                'title'    => __( 'Link', 'dashboard-quick-actions' ),
				'desc'     => __( 'ex. /wp-admin/index.php OR http://google.com', 'dashboard-quick-actions' ),
                'default'  => '',
            ),
			array(
                'id'     => 'section-end88',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),

        )
    ) );

	
	// -> START Settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Style Settings', 'dashboard-quick-actions' ),
        'id'     => 'settings',
        'desc'   => __( '', 'dashboard-quick-actions' ),
        'icon'   => 'el el-magic',
        'fields' => array(
			array(
                'id'       => 'section-start8',
                'type'     => 'section',
                'title'    => __( 'Styles', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-hover-effect',
                'type'     => 'select',
                'title'    => __( 'Select Hover Effect', 'dashboard-quick-actions' ),
                'desc'     => __( 'CSS3 hover effects with safe fallback', 'dashboard-quick-actions' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    $dba_the_hover_effect
                ),
                'default'  => 'grow-rotate'
            ),
			array(
                'id'       => 'opt-global-icon-color',
                'type'     => 'color',
                'title'    => __( 'Icon Color', 'dashboard-quick-actions' ),
                'subtitle' => __( 'Pick a color for the icons (default: #0073aa).', 'dashboard-quick-actions' ),
                'default'  => '#0073aa',
            ),
			array(
                'id'       => 'opt-global-icon-background-color',
                'type'     => 'color',
                'title'    => __( 'Icon Background Color', 'dashboard-quick-actions' ),
                'subtitle' => __( 'Pick a color for the icons (default: #ffffff).', 'dashboard-quick-actions' ),
                'default'  => '#ffffff',
            ),
			array(
                'id'       => 'opt-icon-size',
                'type'     => 'select',
                'title'    => __( 'Icon Size', 'dashboard-quick-actions' ),
                'desc'     => __( 'Select icon size', 'dashboard-quick-actions' ),
                //Must provide key => value pairs for select options
                'options'  => array(
					'50px' => '50px',
                    '54px' => '54px',
					'58px' => '58px',
					'62px' => '62px',
                    '68px' => '68px',
					'72px' => '72px',
                ),
                'default'  => '58px'
            ),
			array(
                'id'       => 'opt-global-text-color',
                'type'     => 'color',
                'title'    => __( 'Text Color', 'dashboard-quick-actions' ),
                'subtitle' => __( 'Pick a color for the text (default: #0073aa).', 'dashboard-quick-actions' ),
                'default'  => '#0073aa',
            ),
			array(
                'id'       => 'opt-text-size',
                'type'     => 'select',
                'title'    => __( 'Text Size', 'dashboard-quick-actions' ),
                'desc'     => __( 'Select text size', 'dashboard-quick-actions' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    '11px' => '11px',
					'12px' => '12px',
                    '13px' => '13px',
                    '14px' => '14px',
					'15px' => '15px',
                ),
                'default'  => '13px'
            ),
			array(
                'id'     => 'section-end8',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
        )
    ) );
	
	// -> START Settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Widget Settings', 'dashboard-quick-actions' ),
        'id'     => 'widget',
        'desc'   => __( '', 'dashboard-quick-actions' ),
        'icon'   => 'el el-adjust-alt',
        'fields' => array(
			array(
                'id'       => 'section-start9',
                'type'     => 'section',
                'title'    => __( 'Widget Placement', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'opt-select-widget-priority',
                'type'     => 'select',
                'title'    => __( 'Dashboard Priority', 'dashboard-quick-actions' ),
                'desc'     => __( 'Select how high to show the dashboard widget', 'dashboard-quick-actions' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'high' => 'high',
                    'default' => 'default',
                    'low' => 'low',
                ),
                'default'  => 'high'
            ),
			array(
                'id'       => 'opt-select-widget-side',
                'type'     => 'select',
                'title'    => __( 'Dashboard Side', 'dashboard-quick-actions' ),
                'desc'     => __( 'Select which side to show the dashboard widget', 'dashboard-quick-actions' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'normal' => 'normal',
                    'side' => 'side',
                ),
                'default'  => 'normal'
            ),
			array(
                'id'     => 'section-end9',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'section-start10',
                'type'     => 'section',
                'title'    => __( 'Widget Permissions', 'dashboard-quick-actions' ),
                
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'       => 'opt-select-permissions',
                'type'     => 'select',
                'title'    => __( 'Select Permissions', 'dashboard-quick-actions' ),
                'desc'     => __( 'The dashboard widget will show for all users with or more permissions', 'dashboard-quick-actions' ),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'read' => 'subscriber',
                    'edit_posts' => 'contributor',
                    'publish_posts' => 'author',
                    'edit_pages' => 'editor',
					'install_plugins' => 'administrator',
                ),
                'default'  => 'install_plugins'
            ),
			array(
                'id'     => 'section-end9',
                'type'   => 'section',
                'indent' => false, // Indent all options below until the next 'section' option is set.
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */