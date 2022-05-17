<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'bauer';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = dirname( __FILE__ ) . '/';

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

$sample_html = '';
if ( file_exists( $dir . '/info-html.html' ) ) {
	$fs = Redux_Filesystem::get_instance();
	if ( method_exists( $fs, 'get_contents' ) ) {
		$sample_html = $fs->execute( 'get_contents', $dir . '/info-html.html' );
	}
}

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {
		$sample_patterns = array();

		// phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to execept HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://docs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Sample Options', 'your-textdomain-here' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Sample Options', 'your-textdomain-here' ),

	// Enabled the Webfonts typography module to use asynchronous fonts.
	'async_typography'          => false,

	// Disable to create your own google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => true,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to opened expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => null,

	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// The time transinets will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => false,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => false,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
);

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */
$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
);
Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';

Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 * ---> START SECTIONS
 */

// -> START Basic Fields
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Главная страница' ),
		'id'               => 'main',
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Первый экран' ),
		'id'               => 'main-fdisplay',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'main-fdisplay-logo',
				'type'     => 'media',
				'title'    => esc_html__( 'Логотип' ),
			),
			array(
				'id'       => 'main-fdisplay-logofoot',
				'type'     => 'media',
				'title'    => esc_html__( 'Логотип подвала' ),
			),
			array(
				'id'       => 'main-fdisplay-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок' ),
			),
			array(
				'id'       => 'main-fdisplay-descr',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание' ),
			),
		),
	)
);
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'О компании' ),
		'id'               => 'main-about',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'main-about-title',
				'type'     => 'editor',
				'title'    => esc_html__( 'Описание' ),
			),
			array(
				'id'       => 'main-about-img1',
				'type'     => 'media',
				'title'    => esc_html__( 'Изображение №1' ),
			),
			array(
				'id'       => 'main-about-img2',
				'type'     => 'media',
				'title'    => esc_html__( 'Изображение №2' ),
			),
			array(
				'id'       => 'main-about-img3',
				'type'     => 'media',
				'title'    => esc_html__( 'Изображение №3' ),
			),
			array(
				'id'       => 'main-about-img4',
				'type'     => 'media',
				'title'    => esc_html__( 'Изображение №4' ),
			),
		),
	)
);
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'ТОВ' ),
		'id'               => 'main-tob',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'main-tob-img',
				'type'     => 'media',
				'title'    => esc_html__( 'Изображение' ),
			),
			array(
				'id'       => 'main-tob-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок' ),
			),
			array(
				'id'       => 'main-tob-descr',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст' ),
			),
		),
	)
);
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Видео' ),
		'id'               => 'main-video',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'main-video-link',
				'type'     => 'text',
				'title'    => esc_html__( 'YouTube link' ),
			),
		),
	)
);
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Преимущества' ),
		'id'               => 'main-advantages',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'main-advantages-slides',
				'type'     => 'slides',
				// 'description' => 'Не добавляйте больше 4',
				'title'    => esc_html__( 'YouTube link' ),
				'show'        => array( 'url' => false, 'title' => true, 'description' => true ),
			),
		),
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Слайдер проэктов' ),
		'id'               => 'main-projects',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'main-projects-slides',
				'type'     => 'slides',
				'title'    => esc_html__( 'Слайды' ),
				'show'        => array( 'url' => false, 'title' => true, 'description' => false ),
			),
		),
	)
);


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Преимущества' ),
		'id'               => 'advantages',
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Преимущества' ),
		'id'               => 'advantages-descr',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'advantages-descr-text1',
				'type'     => 'editor',
				'title'    => esc_html__( 'Текст над карточками' ),
			),
			array(
				'id'       => 'advantages-descr-text2',
				'type'     => 'editor',
				'title'    => esc_html__( 'Текст под карточками' ),
			),
			array(
				'id'       => 'advantages-descr-license',
				'type'     => 'slides',
				'title'    => esc_html__( 'Сертификаты' ),
				'show'        => array( 'url' => false, 'title' => true, 'description' => false ),
			),
		),
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Каталог' ),
		'id'               => 'catalog',
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Каталог' ),
		'id'               => 'catalog-sets',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'catalog-sets-linkru',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на файл каталога RU' ),
			),
			array(
				'id'       => 'catalog-sets-linkua',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на файл каталога UA' ),
			),
			array(
				'id'       => 'catalog-sets-text',
				'type'     => 'editor',
				'title'    => esc_html__( 'Текст под продуктами' ),
			),
			array(
				'id'       => 'catalog-sets-video1',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на видео №1' ),
			),
			array(
				'id'       => 'catalog-sets-video2',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на видео №2' ),
			),
			array(
				'id'       => 'catalog-sets-video3',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на видео №3' ),
			),
		),
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Контакты' ),
		'id'               => 'contacts',
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Контакты' ),
		'id'               => 'contacts-sets',
		'subsection'       => true,
		'customizer_width' => '500px',
		'fields'           => array(
			array(
				'id'       => 'contacts-sets-phone1',
				'type'     => 'text',
				'description' => 'Этот номер будет использоваться в шапке и подвале',
				'title'    => esc_html__( 'Телефон №1' ),
			),
			array(
				'id'       => 'contacts-sets-phone2',
				'type'     => 'text',
				'title'    => esc_html__( 'Телефон №2' ),
			),
			array(
				'id'       => 'contacts-sets-mail',
				'type'     => 'text',
				'title'    => esc_html__( 'E-mail' ),
			),
			array(
				'id'       => 'contacts-sets-wapp',
				'type'     => 'text',
				'title'    => esc_html__( 'Viber/WhatsApp Телефон' ),
			),
		),
	)
);