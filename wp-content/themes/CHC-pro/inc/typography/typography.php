<?php
/**
 * Register customizer panels, sections, settings, and controls.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $wp_customize
 * @return void
 */
# Register our customizer panels, sections, settings, and controls.


add_action( 'customize_register', 'eightmedi_pro_type_customize_register', 15 );
function eightmedi_pro_type_customize_register( $wp_customize ) {

	// Register typography control JS template.
	$wp_customize->register_control_type( 'Customizer_Typo_Control_Typography' );

	// Add the typography panel.
	$wp_customize->add_panel( 'typography', array( 'priority' => 90, 'title' => esc_html__( 'Typography', 'eightmedi-pro' ) ) );

	// Add the `<p>` typography section.
	$wp_customize->add_section( 'p_typography', 
		array( 'panel' => 'typography', 'title' => esc_html__( 'Paragraphs', 'eightmedi-pro' ) )
		);
	$wp_customize->add_setting( 'p_font_family', array( 'default' => 'Open Sans',  'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'p_font_style',  array( 'default' => '400', 'sanitize_callback' => 'sanitize_text_field',        'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'p_text_decoration', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field',              'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'p_text_transform', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field',              'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'p_font_size',   array( 'default' => '16', 'sanitize_callback' => 'absint',              'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'p_line_height', array( 'default' => '1.5', 'sanitize_callback' => 'eightmedi_pro_pro_floatval', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'p_color', array( 'default' => '#000000',     'sanitize_callback' => 'sanitize_hex_color', 'transport' => 'postMessage' ) );

	$wp_customize->add_control(
		new Customizer_Typo_Control_Typography(
			$wp_customize,
			'p_typography',
			array(
				'label'       => esc_html__( 'Paragraph Typography', 'eightmedi-pro' ),
				'description' => __( 'Select how you want your paragraphs to appear.', 'eightmedi-pro' ),
				'section'     => 'p_typography',
				'settings'    => array(
					'family'      => 'p_font_family',
					'style'       => 'p_font_style',
					'text_decoration' => 'p_text_decoration',
					'text_transform' => 'p_text_transform',
					'size'        => 'p_font_size',
					'line_height' => 'p_line_height',
					'typocolor'  => 'p_color'
					),
				'l10n'        => array(),
				)
			)
		);

	// Add the `<h1>` typography section.
	$wp_customize->add_section( 'h1_typography', 
		array( 'panel' => 'typography', 'title' => esc_html__( 'Header (H1)', 'eightmedi-pro' ) )
		);
	$wp_customize->add_setting( 'h1_font_family', array( 'default' => 'Open Sans',  'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h1_font_style',  array( 'default' => '400', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h1_text_decoration', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h1_text_transform', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h1_font_size',   array( 'default' => '16', 'sanitize_callback' => 'absint', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h1_line_height', array( 'default' => '1.5', 'sanitize_callback' => 'eightmedi_pro_pro_floatval','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h1_color', array( 'default' => '#2e8ecb', 'sanitize_callback' => 'sanitize_hex_color','transport' => 'postMessage' ) );

	$wp_customize->add_control(
		new Customizer_Typo_Control_Typography(
			$wp_customize,
			'h1_typography',
			array(
				'label'       => esc_html__( 'Header1 Typography', 'eightmedi-pro' ),
				'description' => __( 'Select how you want your paragraphs to appear.', 'eightmedi-pro' ),
				'section'     => 'h1_typography',
				'settings'    => array(
					'family'      => 'h1_font_family',
					'style'       => 'h1_font_style',
					'text_decoration' => 'h1_text_decoration',
					'text_transform' => 'h1_text_transform',
					'size'        => 'h1_font_size',
					'line_height' => 'h1_line_height',
					'typocolor'  => 'h1_color'
					),
				'l10n'        => array(),
				)
			)
		);

	// Add the `<h2>` typography section.
	$wp_customize->add_section( 'h2_typography', 
		array( 'panel' => 'typography', 'title' => esc_html__( 'Header (H2)', 'eightmedi-pro' ) )
		);
	$wp_customize->add_setting( 'h2_font_family', array( 'default' => 'Open Sans',  'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h2_font_style',  array( 'default' => '400', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h2_text_decoration', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h2_text_transform', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h2_font_size',   array( 'default' => '16', 'sanitize_callback' => 'absint', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h2_line_height', array( 'default' => '1.5', 'sanitize_callback' => 'eightmedi_pro_pro_floatval','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h2_color', array( 'default' => '#2e8ecb', 'sanitize_callback' => 'sanitize_hex_color','transport' => 'postMessage' ) );

	$wp_customize->add_control(
		new Customizer_Typo_Control_Typography(
			$wp_customize,
			'h2_typography',
			array(
				'label'       => esc_html__( 'Header2 Typography', 'eightmedi-pro' ),
				'description' => __( 'Select how you want your paragraphs to appear.', 'eightmedi-pro' ),
				'section'     => 'h2_typography',
				'settings'    => array(
					'family'      => 'h2_font_family',
					'style'       => 'h2_font_style',
					'text_decoration' => 'h2_text_decoration',
					'text_transform' => 'h2_text_transform',
					'size'        => 'h2_font_size',
					'line_height' => 'h2_line_height',
					'typocolor'  => 'h2_color'
					),
				'l10n'        => array(),
				)
			)
		);

	// Add the `<h3>` typography section.
	$wp_customize->add_section( 'h3_typography', 
		array( 'panel' => 'typography', 'title' => esc_html__( 'Header (H3)', 'eightmedi-pro' ) )
		);
	$wp_customize->add_setting( 'h3_font_family', array( 'default' => 'Open Sans',  'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h3_font_style',  array( 'default' => '400', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h3_text_decoration', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h3_text_transform', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h3_font_size',   array( 'default' => '16', 'sanitize_callback' => 'absint', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h3_line_height', array( 'default' => '1.5', 'sanitize_callback' => 'eightmedi_pro_pro_floatval','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h3_color', array( 'default' => '#2e8ecb', 'sanitize_callback' => 'sanitize_hex_color','transport' => 'postMessage' ) );

	$wp_customize->add_control(
		new Customizer_Typo_Control_Typography(
			$wp_customize,
			'h3_typography',
			array(
				'label'       => esc_html__( 'Header3 Typography', 'eightmedi-pro' ),
				'description' => __( 'Select how you want your paragraphs to appear.', 'eightmedi-pro' ),
				'section'     => 'h3_typography',
				'settings'    => array(
					'family'      => 'h3_font_family',
					'style'       => 'h3_font_style',
					'text_decoration' => 'h3_text_decoration',
					'text_transform' => 'h3_text_transform',
					'size'        => 'h3_font_size',
					'line_height' => 'h3_line_height',
					'typocolor'  => 'h3_color'
					),
				'l10n'        => array(),
				)
			)
		);


	// Add the `<h4>` typography section.
	$wp_customize->add_section( 'h4_typography', 
		array( 'panel' => 'typography', 'title' => esc_html__( 'Header (H4)', 'eightmedi-pro' ) )
		);
	$wp_customize->add_setting( 'h4_font_family', array( 'default' => 'Open Sans',  'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h4_font_style',  array( 'default' => '400', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h4_text_decoration', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h4_text_transform', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h4_font_size',   array( 'default' => '16', 'sanitize_callback' => 'absint', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h4_line_height', array( 'default' => '1.5', 'sanitize_callback' => 'eightmedi_pro_pro_floatval','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h4_color', array( 'default' => '#2e8ecb', 'sanitize_callback' => 'sanitize_hex_color','transport' => 'postMessage' ) );

	$wp_customize->add_control(
		new Customizer_Typo_Control_Typography(
			$wp_customize,
			'h4_typography',
			array(
				'label'       => esc_html__( 'Header4 Typography', 'eightmedi-pro' ),
				'description' => __( 'Select how you want your paragraphs to appear.', 'eightmedi-pro' ),
				'section'     => 'h4_typography',
				'settings'    => array(
					'family'      => 'h4_font_family',
					'style'       => 'h4_font_style',
					'text_decoration' => 'h4_text_decoration',
					'text_transform' => 'h4_text_transform',
					'size'        => 'h4_font_size',
					'line_height' => 'h4_line_height',
					'typocolor'  => 'h4_color'
					),
				'l10n'        => array(),
				)
			)
		);

	// Add the `<h5>` typography section.
	$wp_customize->add_section( 'h5_typography', 
		array( 'panel' => 'typography', 'title' => esc_html__( 'Header (H5)', 'eightmedi-pro' ) )
		);
	$wp_customize->add_setting( 'h5_font_family', array( 'default' => 'Open Sans',  'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h5_font_style',  array( 'default' => '400', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h5_text_decoration', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h5_text_transform', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h5_font_size',   array( 'default' => '16', 'sanitize_callback' => 'absint', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h5_line_height', array( 'default' => '1.5', 'sanitize_callback' => 'eightmedi_pro_pro_floatval','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h5_color', array( 'default' => '#2e8ecb', 'sanitize_callback' => 'sanitize_hex_color','transport' => 'postMessage' ) );

	$wp_customize->add_control(
		new Customizer_Typo_Control_Typography(
			$wp_customize,
			'h5_typography',
			array(
				'label'       => esc_html__( 'Header5 Typography', 'eightmedi-pro' ),
				'description' => __( 'Select how you want your paragraphs to appear.', 'eightmedi-pro' ),
				'section'     => 'h5_typography',
				'settings'    => array(
					'family'      => 'h5_font_family',
					'style'       => 'h5_font_style',
					'text_decoration' => 'h5_text_decoration',
					'text_transform' => 'h5_text_transform',
					'size'        => 'h5_font_size',
					'line_height' => 'h5_line_height',
					'typocolor'  => 'h5_color'
					),
				'l10n'        => array(),
				)
			)
		);

	// Add the `<h6>` typography section.
	$wp_customize->add_section( 'h6_typography', 
		array( 'panel' => 'typography', 'title' => esc_html__( 'Header (H6)', 'eightmedi-pro' ) )
		);
	$wp_customize->add_setting( 'h6_font_family', array( 'default' => 'Open Sans',  'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h6_font_style',  array( 'default' => '400', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h6_text_decoration', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h6_text_transform', array( 'default' => 'none', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h6_font_size',   array( 'default' => '16', 'sanitize_callback' => 'absint', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h6_line_height', array( 'default' => '1.5', 'sanitize_callback' => 'eightmedi_pro_pro_floatval','transport' => 'postMessage' ) );
	$wp_customize->add_setting( 'h6_color', array( 'default' => '#2e8ecb', 'sanitize_callback' => 'sanitize_hex_color','transport' => 'postMessage' ) );

	$wp_customize->add_control(
		new Customizer_Typo_Control_Typography(
			$wp_customize,
			'h6_typography',
			array(
				'label'       => esc_html__( 'Header6 Typography', 'eightmedi-pro' ),
				'description' => __( 'Select how you want your paragraphs to appear.', 'eightmedi-pro' ),
				'section'     => 'h6_typography',
				'settings'    => array(
					'family'      => 'h6_font_family',
					'style'       => 'h6_font_style',
					'text_decoration' => 'h6_text_decoration',
					'text_transform' => 'h6_text_transform',
					'size'        => 'h6_font_size',
					'line_height' => 'h6_line_height',
					'typocolor'  => 'h6_color'
					),
				'l10n'        => array(),
				)
			)
		);
	
}

/**
 * Register control scripts/styles.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
# Load scripts and styles.
add_action( 'customize_controls_enqueue_scripts', 'eightmedi_pro_customize_controls_register_scripts' );
function eightmedi_pro_customize_controls_register_scripts() {
	wp_enqueue_script( 'ctypo-customize-controls', get_template_directory_uri() .'/inc/typography/js/customize-controls.js', array( 'customize-controls' ) );
	wp_enqueue_script( 'ajax_script_function', get_template_directory_uri() .'/inc/typography/js/typo-ajax.js', array('jquery')  );

	wp_localize_script( 'ajax_script_function', 'ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	
	wp_enqueue_style( 'ctypo-customize-controls', get_template_directory_uri() .'/inc/typography/css/customize-controls.css' );
	wp_enqueue_style( 'ctypo-ui-controls', '//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css' );
}
/**
 * Load preview scripts/styles.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'customize_preview_init', 'eightmedi_pro_customize_preview_enqueue_scripts' );
function eightmedi_pro_customize_preview_enqueue_scripts() {
	wp_enqueue_script( 'ctypo-google-webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js' , array('jquery'));
	wp_enqueue_script( 'ctypo-customize-preview', get_template_directory_uri().'/inc/typography/js/customize-previews.js', array( 'jquery', 'customize-preview', 'ctypo-google-webfont') );
}
/**
 * Add custom body class to give some more weight to our styles.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $classes
 * @return array
 */
function eightmedi_pro_body_class( $classes ) {
	return array_merge( $classes, array( 'ctypo' ) );
}
add_filter( 'body_class', 'eightmedi_pro_body_class' );


/******************************************************************************************************
 * eightmedi-pro Typhography Settings                                                                             **
 ******************************************************************************************************/
function get_google_font_variants(){
	$eightmedi_pro_font_list = get_option( 'eightmedi_pro_google_font','' ); 

	$font_family = $_REQUEST['font_family']; 
	$font_array = eightmedi_pro_search_key($eightmedi_pro_font_list,'family', $font_family);

	$variants_array = $font_array['0']['variants'] ;
	$options_array = "";
	foreach ($variants_array  as $key=>$variants ) {
		$options_array .= '<option value="'.$key.'">'.$variants.'</option>';
	}
	if(!empty($options_array)){
		echo $options_array;
	}else{
		echo $options_array = '';
	}
	die();
}
add_action("wp_ajax_get_google_font_variants", "get_google_font_variants");

function eightmedi_pro_search_key($array, $key, $value){
	$results = array();
	if (is_array($array)) {
		if (isset($array[$key]) && $array[$key] == $value) {
			$results[] = $array;
		}
		foreach ($array as $subarray) {
			$results = array_merge($results, eightmedi_pro_search_key($subarray, $key, $value));
		}
	}
	return $results;
}

if ( ! function_exists( 'eightmedi_pro_typhography' ) ) :
	function eightmedi_pro_typhography(){
		/* === <h5> === */
		$p_font_family = get_theme_mod( 'p_font_family');
		$p_font_style = get_theme_mod( 'p_font_style');

		$p_font_family_str = str_replace( ' ', '+', $p_font_family );
		$p_typography =  $p_font_family_str.':'.$p_font_style;

		/* === <h1> === */
		$h1_font_family = get_theme_mod( 'h1_font_family');
		$h1_font_style = get_theme_mod( 'h1_font_style');

		$h1_font_family_str = str_replace( ' ', '+', $h1_font_family );
		$h1_typography =  $h1_font_family_str.':'.$h1_font_style;

		/* === <h2> === */
		$h2_font_family = get_theme_mod( 'h2_font_family');
		$h2_font_style = get_theme_mod( 'h2_font_style');

		$h2_font_family_str = str_replace( ' ', '+', $h2_font_family );
		$h2_typography =  $h2_font_family_str.':'.$h2_font_style;

		/* === <h3> === */
		$h3_font_family = get_theme_mod( 'h3_font_family');
		$h3_font_style = get_theme_mod( 'h3_font_style');

		$h3_font_family_str = str_replace( ' ', '+', $h3_font_family );
		$h3_typography =  $h3_font_family_str.':'.$h3_font_style;

		/* === <h4> === */
		$h4_font_family = get_theme_mod( 'h4_font_family');
		$h4_font_style = get_theme_mod( 'h4_font_style');

		$h4_font_family_str = str_replace( ' ', '+', $h4_font_family );
		$h4_typography =  $h4_font_family_str.':'.$h4_font_style;

		/* === <h5> === */
		$h5_font_family = get_theme_mod( 'h5_font_family');
		$h5_font_style = get_theme_mod( 'h5_font_style');

		$h5_font_family_str = str_replace( ' ', '+', $h5_font_family );
		$h5_typography =  $h5_font_family_str.':'.$h5_font_style;

		/* === <h6> === */
		$h6_font_family = get_theme_mod( 'h6_font_family');
		$h6_font_style = get_theme_mod( 'h6_font_style');

		$h6_font_family_str = str_replace( ' ', '+', $h6_font_family );
		$h6_typography =  $h6_font_family_str.':'.$h6_font_style;

		$all_fonts = array( $p_typography, $h1_typography, $h2_typography, $h3_typography, $h4_typography, $h5_typography, $h6_typography );

		$font_family = array();
		$font_weight_array = array();
		foreach($all_fonts as $fonts){
			$each_font = explode(':',$fonts);
			$font_family[] = $each_font[0];         
			if(!isset($font_weight_array[$each_font[0]]) ){
				$font_weight_array[$each_font[0]][] = $each_font[1];
			}else{
				if(!in_array($each_font[1],$font_weight_array[$each_font[0]])){
					$font_weight_array[$each_font[0]][] = $each_font[1];
				}
			}
		}
		$final_font_array = array();
		foreach($font_weight_array as $font => $font_weight){
			if(!empty($font)) {
				$font_weight_str = implode(',',$font_weight);
				if($font_weight_str != ''){
					$each_font_string = $font.':'.$font_weight_str;
				}else{
					$each_font_string = $font;
				}
				$final_font_array[] = $each_font_string;
			}
		}

		$final_font_string = implode("|",$final_font_array);            

		$query_args = array(
			'family' => $final_font_string,
			);
		if($final_font_array!=null){
			wp_enqueue_style('eightmedi-pro-typhography-font', add_query_arg($query_args, "//fonts.googleapis.com/css"));
		}
	}
	add_action('wp_enqueue_scripts','eightmedi_pro_typhography');
	endif;


	if ( class_exists( 'WP_Customize_Control' ) ) :
		class Customizer_Typo_Control_Typography extends WP_Customize_Control {
  /**
   * The type of customize control being rendered.
   *
   * @since  1.0.0
   * @access public
   * @var    string
   */
  public $type = 'typography';
  /**
   * Array 
   *
   * @since  1.0.0
   * @access public
   * @var    string
   */
  public $l10n = array();
  /**
   * Set up our control.
   *
   * @since  1.0.0
   * @access public
   * @param  object  $manager
   * @param  string  $id
   * @param  array   $args
   * @return void
   */
  public function __construct( $manager, $id, $args = array() ) {
    // Let the parent class do its thing.
  	parent::__construct( $manager, $id, $args );
    // Make sure we have labels.
  	$this->l10n = wp_parse_args(
  		$this->l10n,
  		array(
  			'family'      => esc_html__( 'Font Family', 'eightmedi-pro' ),
  			'size'        => esc_html__( 'Font Size',   'eightmedi-pro' ),
  			'style'      => esc_html__( 'Font Weight/Style', 'eightmedi-pro' ),
  			'line_height' => esc_html__( 'Line Height', 'eightmedi-pro' ),
  			'text_decoration' => esc_html__( 'Text Decoration', 'eightmedi-pro' ),
  			'text_transform' => esc_html__( 'Text Transform', 'eightmedi-pro' ),
  			'typocolor' => esc_html__( 'Font Color label', 'eightmedi-pro' ),
  			)
  		);
  }
  /**
   * Enqueue scripts/styles.
   *
   * @since  1.0.0
   * @access public
   * @return void
   */
  public function enqueue() {
  	wp_enqueue_script( 'ctypo-customize-controls' );
  	wp_enqueue_style(  'ctypo-customize-controls' );
  	wp_enqueue_script( 'wp-color-picker' );
  	wp_enqueue_style( 'wp-color-picker' );
  }
  /**
   * Add custom parameters to pass to the JS via JSON.
   *
   * @since  1.0.0
   * @access public
   * @return void
   */
  public function to_json() {
  	parent::to_json();
    // Loop through each of the settings and set up the data for it.
  	foreach ( $this->settings as $setting_key => $setting_id ) {
  		$this->json[ $setting_key ] = array(
  			'link'  => $this->get_link( $setting_key ),
  			'value' => $this->value( $setting_key ),
  			'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
  			);

  		if ( 'family' === $setting_key )
  			$this->json[ $setting_key ]['choices'] = $this->get_font_families();

  		elseif ( 'style' === $setting_key )
  			$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

  		elseif ( 'text_transform' === $setting_key )
  			$this->json[ $setting_key ]['choices'] = $this->get_text_transform_choices();

  		elseif ( 'text_decoration' === $setting_key )
  			$this->json[ $setting_key ]['choices'] = $this->get_text_decoration_choices();
  	}
  }
  /**
   * Underscore JS template to handle the control's output.
   *
   * @since  1.0.0
   * @access public
   * @return void
   */
  public function content_template() { 
  	?>
  	<# if ( data.label ) { #>
  		<span class="customize-control-title">{{ data.label }}</span>
  		<# } #>

  		<# if ( data.description ) { #>
  			<span class="description customize-control-description">{{{ data.description }}}</span>
  			<# } #>
  			<ul>
  				<# if ( data.family && data.family.choices ) { #>
  					<li class="typography-font-family">
  						<# if ( data.family.label ) { #>
  							<span class="customize-control-title">{{ data.family.label }}</span>
  							<# } #>
  							<select {{{ data.family.link }}} id="{{ data.section }}" class="typography_face">
  								<# _.each( data.family.choices, function( label, choice ) { #>
  									<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
  									<# } ) #>
  							</select>
  						</li>
  						<# } #>
  						<# if ( data.style && data.style.choices ) { #>
  							<li class="typography-font-style">
  								<# if ( data.style.label ) { #>
  									<span class="customize-control-title">{{ data.style.label }}</span>
  									<# } #>
  									<select {{{ data.style.link }}}>
  										<# _.each( data.style.choices, function( label, choice ) { #>
  											<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>
  											<# } ) #>
  									</select>
  								</li>
  								<# } #>

  								<# if ( data.text_transform && data.text_transform.choices ) { #>

  									<li class="typography-text-transform">

  										<# if ( data.text_transform.label ) { #>
  											<span class="customize-control-title">{{ data.text_transform.label }}</span>
  											<# } #>

  											<select {{{ data.text_transform.link }}} class="typography_text_transform">

  												<# _.each( data.text_transform.choices, function( label, choice ) { #>

  													<option value="{{ choice }}" <# if ( choice === data.text_transform.value ) { #> selected="selected" <# } #>>{{ label }}</option>

  													<# } ) #>

  											</select>
  										</li>
  										<# } #>

  										<# if ( data.text_decoration && data.text_decoration.choices ) { #>

  											<li class="typography-text-decoration">

  												<# if ( data.text_decoration.label ) { #>
  													<span class="customize-control-title">{{ data.text_decoration.label }}</span>
  													<# } #>

  													<select {{{ data.text_decoration.link }}} class="typography_text_decoration">

  														<# _.each( data.text_decoration.choices, function( label, choice ) { #>

  															<option value="{{ choice }}" <# if ( choice === data.text_decoration.value ) { #> selected="selected" <# } #>>{{ label }}</option>

  															<# } ) #>

  													</select>
  												</li>
  												<# } #>

  												<# if ( data.size ) { #>

  													<li class="typography-font-size">

  														<# if ( data.size.label ) { #>
  															<span class="customize-control-title">{{ data.size.label }} </span>
  															<# } #>

  															<span class="slider-value-size"></span>px
  															<div class="slider-range-size" {{{ data.size.link }}} value="{{ data.size.value }}"  ></div>
  														</li>
  														<# } #>

  														<# if ( data.line_height ) { #>

  															<li class="typography-line-height">

  																<# if ( data.line_height.label ) { #>
  																	<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
  																	<# } #>

  																	<span class="slider-value-line-height"></span>
  																	<div class="slider-range-line-height" {{{ data.line_height.link }}} value="{{ data.line_height.value }}"  ></div>

  																</li>
  																<# } #>

  																<# if ( data.typocolor ) { #>

  																	<li class="typography-color">
  																		<# if ( data.typocolor.label ) { #>
  																			<span class="customize-control-title">{{{ data.typocolor.label }}}</span>
  																			<# } #>

  																			<div class="customize-control-content">
  																				<input class="color-picker-hex" type="text" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'eightmedi-pro' ); ?>" {{{ data.typocolor.link }}} value="{{ data.typocolor.value }}"  />
  																			</div>
  																		</li>
  																		<# } #>

  																	</ul>
  																	<?php }

  /**
   * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
   *
   * @todo Integrate with Google fonts.
   *
   * @since  1.0.0
   * @access public
   * @return array
   */
  public function get_fonts() { return array(); }

  /**
   * Returns the available font families.
   *
   * @todo Pull families from `get_fonts()`.
   *
   * @since  1.0.0
   * @access public
   * @return array
   */
  function get_font_families() {
  	/* Google font listing in to database */
  	$font_encoded = 'YTo3MDg6e2k6MDthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkFyaWFsIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czo2OiJJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlZlcmRhbmEiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjY6Ikl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aToyO2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiVHJlYnVjaGV0IjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czo2OiJJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MzthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ikdlb3JnaWEiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjY6Ikl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiVGFob21hIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czo2OiJJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NTthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IlBhbGF0aW5vIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czo2OiJJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkhlbHZldGljYSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6NjoiSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjc7YToyOntzOjY6ImZhbWlseSI7czo3OiJBQmVlWmVlIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjg7YToyOntzOjY6ImZhbWlseSI7czo0OiJBYmVsIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6OTthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJBYnJpbCBGYXRmYWNlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTA7YToyOntzOjY6ImZhbWlseSI7czo4OiJBY2xvbmljYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjExO2E6Mjp7czo2OiJmYW1pbHkiO3M6NDoiQWNtZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjEyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQWN0b3IiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMzthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkFkYW1pbmEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxNDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJBZHZlbnQgUHJvIjtzOjg6InZhcmlhbnRzIjthOjc6e2k6MTAwO3M6NDoiVGhpbiI7aToyMDA7czoxMToiRXh0cmEgTGlnaHQiO2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjUwMDtzOjY6Ik1lZGl1bSI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjE1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IkFndWFmaW5hIFNjcmlwdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQWtyb25pbSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQWxhZGluIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTg7YToyOntzOjY6ImZhbWlseSI7czo3OiJBbGRyaWNoIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTk7YToyOntzOjY6ImZhbWlseSI7czo0OiJBbGVmIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aToyMDthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IkFsZWdyZXlhIjtzOjg6InZhcmlhbnRzIjthOjY6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO3M6OToiOTAwaXRhbGljIjtzOjE3OiJVbHRyYSBCb2xkIEl0YWxpYyI7fX1pOjIxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkFsZWdyZXlhIFNDIjtzOjg6InZhcmlhbnRzIjthOjY6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO3M6OToiOTAwaXRhbGljIjtzOjE3OiJVbHRyYSBCb2xkIEl0YWxpYyI7fX1pOjIyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IkFsZWdyZXlhIFNhbnMiO3M6ODoidmFyaWFudHMiO2E6MTQ6e2k6MTAwO3M6NDoiVGhpbiI7czo5OiIxMDBpdGFsaWMiO3M6MTE6IlRoaW4gSXRhbGljIjtpOjMwMDtzOjU6IkxpZ2h0IjtzOjk6IjMwMGl0YWxpYyI7czoxMjoiTGlnaHQgSXRhbGljIjtpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NTAwO3M6NjoiTWVkaXVtIjtzOjk6IjUwMGl0YWxpYyI7czoxMzoiTWVkaXVtIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO2k6ODAwO3M6MTA6IkV4dHJhIEJvbGQiO3M6OToiODAwaXRhbGljIjtzOjE3OiJFeHRyYSBCb2xkIEl0YWxpYyI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7czo5OiI5MDBpdGFsaWMiO3M6MTc6IlVsdHJhIEJvbGQgSXRhbGljIjt9fWk6MjM7YToyOntzOjY6ImZhbWlseSI7czoxNjoiQWxlZ3JleWEgU2FucyBTQyI7czo4OiJ2YXJpYW50cyI7YToxNDp7aToxMDA7czo0OiJUaGluIjtzOjk6IjEwMGl0YWxpYyI7czoxMToiVGhpbiBJdGFsaWMiO2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo1MDA7czo2OiJNZWRpdW0iO3M6OToiNTAwaXRhbGljIjtzOjEzOiJNZWRpdW0gSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7aTo4MDA7czoxMDoiRXh0cmEgQm9sZCI7czo5OiI4MDBpdGFsaWMiO3M6MTc6IkV4dHJhIEJvbGQgSXRhbGljIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjtzOjk6IjkwMGl0YWxpYyI7czoxNzoiVWx0cmEgQm9sZCBJdGFsaWMiO319aToyNDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJBbGV4IEJydXNoIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjU7YToyOntzOjY6ImZhbWlseSI7czoxMzoiQWxmYSBTbGFiIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQWxpY2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNzthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkFsaWtlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mjg7YToyOntzOjY6ImZhbWlseSI7czoxMzoiQWxpa2UgQW5ndWxhciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQWxsYW4iO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjMwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQWxsZXJ0YSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjMxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IkFsbGVydGEgU3RlbmNpbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjMyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQWxsdXJhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzM7YToyOntzOjY6ImZhbWlseSI7czo4OiJBbG1lbmRyYSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MzQ7YToyOntzOjY6ImZhbWlseSI7czoxNjoiQWxtZW5kcmEgRGlzcGxheSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkFsbWVuZHJhIFNDIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzY7YToyOntzOjY6ImZhbWlseSI7czo4OiJBbWFyYW50ZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM3O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiQW1hcmFudGgiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjM4O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiQW1hdGljIFNDIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTozOTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkFtZXRoeXN0YSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQW1pcmkiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjQxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQW5haGVpbSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQW5kYWRhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDM7YToyOntzOjY6ImZhbWlseSI7czo2OiJBbmRpa2EiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0NDthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkFuZ2tvciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MjQ6IkFubmllIFVzZSBZb3VyIFRlbGVzY29wZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ2O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IkFub255bW91cyBQcm8iO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjQ3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQW50aWMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0ODthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJBbnRpYyBEaWRvbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0OTthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJBbnRpYyBTbGFiIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTA7YToyOntzOjY6ImZhbWlseSI7czo1OiJBbnRvbiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQXJhcGV5IjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjUyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQXJidXR1cyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkFyYnV0dXMgU2xhYiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTk6IkFyY2hpdGVjdHMgRGF1Z2h0ZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NTthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJBcmNoaXZvIEJsYWNrIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTY7YToyOntzOjY6ImZhbWlseSI7czoxNDoiQXJjaGl2byBOYXJyb3ciO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjU3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQXJpbW8iO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjU4O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiQXJpem9uaWEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1OTthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkFybWF0YSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYwO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiQXJ0aWZpa2EiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MTthOjI6e3M6NjoiZmFtaWx5IjtzOjQ6IkFydm8iO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjYyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NDoiQXNhcCI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NjM7YToyOntzOjY6ImZhbWlseSI7czo1OiJBc3NldCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQXN0bG9jaCI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NjU7YToyOntzOjY6ImZhbWlseSI7czo0OiJBc3VsIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo2NjthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJBdG9taWMgQWdlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Njc7YToyOntzOjY6ImZhbWlseSI7czo2OiJBdWJyZXkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2ODthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkF1ZGlvd2lkZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IkF1dG91ciBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3MDthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkF2ZXJhZ2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3MTthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJBdmVyYWdlIFNhbnMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3MjthOjI6e3M6NjoiZmFtaWx5IjtzOjE5OiJBdmVyaWEgR3J1ZXNhIExpYnJlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NzM7YToyOntzOjY6ImZhbWlseSI7czoxMjoiQXZlcmlhIExpYnJlIjtzOjg6InZhcmlhbnRzIjthOjY6e2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo3NDthOjI6e3M6NjoiZmFtaWx5IjtzOjE3OiJBdmVyaWEgU2FucyBMaWJyZSI7czo4OiJ2YXJpYW50cyI7YTo2OntpOjMwMDtzOjU6IkxpZ2h0IjtzOjk6IjMwMGl0YWxpYyI7czoxMjoiTGlnaHQgSXRhbGljIjtpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NzU7YToyOntzOjY6ImZhbWlseSI7czoxODoiQXZlcmlhIFNlcmlmIExpYnJlIjtzOjg6InZhcmlhbnRzIjthOjY6e2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo3NjthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJCYWQgU2NyaXB0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Nzc7YToyOntzOjY6ImZhbWlseSI7czo5OiJCYWx0aGF6YXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3ODthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkJhbmdlcnMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3OTthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkJhc2ljIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6ODA7YToyOntzOjY6ImZhbWlseSI7czoxMDoiQmF0dGFtYmFuZyI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6ODE7YToyOntzOjY6ImZhbWlseSI7czo3OiJCYXVtYW5zIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6ODI7YToyOntzOjY6ImZhbWlseSI7czo1OiJCYXlvbiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjgzO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiQmVsZ3Jhbm8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo4NDthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkJlbGxlemEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo4NTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkJlbmNoTmluZSI7czo4OiJ2YXJpYW50cyI7YTozOntpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6ODY7YToyOntzOjY6ImZhbWlseSI7czo3OiJCZW50aGFtIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6ODc7YToyOntzOjY6ImZhbWlseSI7czoxNToiQmVya3NoaXJlIFN3YXNoIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6ODg7YToyOntzOjY6ImZhbWlseSI7czo1OiJCZXZhbiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjg5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IkJpZ2Vsb3cgUnVsZXMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo5MDthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJCaWdzaG90IE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjkxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQmlsYm8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo5MjthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJCaWxibyBTd2FzaCBDYXBzIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6OTM7YToyOntzOjY6ImZhbWlseSI7czo2OiJCaXR0ZXIiO3M6ODoidmFyaWFudHMiO2E6Mzp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo5NDthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJCbGFjayBPcHMgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6OTU7YToyOntzOjY6ImZhbWlseSI7czo1OiJCb2tvciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjk2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQm9uYm9uIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6OTc7YToyOntzOjY6ImZhbWlseSI7czo4OiJCb29nYWxvbyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjk4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IkJvd2xieSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo5OTthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJCb3dsYnkgT25lIFNDIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTAwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQnJhd2xlciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjEwMTthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJCcmVlIFNlcmlmIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTAyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IkJ1YmJsZWd1bSBTYW5zIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTAzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkJ1YmJsZXIgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTA0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NDoiQnVkYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjMwMDtzOjU6IkxpZ2h0Ijt9fWk6MTA1O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQnVlbmFyZCI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MTA2O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IkJ1dGNoZXJtYW4iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMDc7YToyOntzOjY6ImZhbWlseSI7czoxNDoiQnV0dGVyZmx5IEtpZHMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMDg7YToyOntzOjY6ImZhbWlseSI7czo1OiJDYWJpbiI7czo4OiJ2YXJpYW50cyI7YTo4OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NTAwO3M6NjoiTWVkaXVtIjtzOjk6IjUwMGl0YWxpYyI7czoxMzoiTWVkaXVtIEl0YWxpYyI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO3M6OToiNjAwaXRhbGljIjtzOjE2OiJTZW1pIEJvbGQgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjEwOTthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJDYWJpbiBDb25kZW5zZWQiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NTAwO3M6NjoiTWVkaXVtIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MTEwO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkNhYmluIFNrZXRjaCI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MTExO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IkNhZXNhciBEcmVzc2luZyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjExMjthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJDYWdsaW9zdHJvIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTEzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IkNhbGxpZ3JhZmZpdHRpIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTE0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQ2FtYmF5IjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aToxMTU7YToyOntzOjY6ImZhbWlseSI7czo1OiJDYW1ibyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjExNjthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkNhbmRhbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjExNzthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkNhbnRhcmVsbCI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MTE4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkNhbnRhdGEgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTE5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkNhbnRvcmEgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTIwO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiQ2FwcmlvbGEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMjE7YToyOntzOjY6ImZhbWlseSI7czo1OiJDYXJkbyI7czo4OiJ2YXJpYW50cyI7YTozOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjEyMjthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkNhcm1lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTIzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IkNhcnJvaXMgR290aGljIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTI0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTc6IkNhcnJvaXMgR290aGljIFNDIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTI1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IkNhcnRlciBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMjY7YToyOntzOjY6ImZhbWlseSI7czo2OiJDYXVkZXgiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjEyNzthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJDZWRhcnZpbGxlIEN1cnNpdmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMjg7YToyOntzOjY6ImZhbWlseSI7czoxMToiQ2V2aWNoZSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMjk7YToyOntzOjY6ImZhbWlseSI7czoxMDoiQ2hhbmdhIE9uZSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO319aToxMzA7YToyOntzOjY6ImZhbWlseSI7czo2OiJDaGFuZ28iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxMzE7YToyOntzOjY6ImZhbWlseSI7czoxODoiQ2hhdSBQaGlsb21lbmUgT25lIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjEzMjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkNoZWxhIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjEzMzthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJDaGVsc2VhIE1hcmtldCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjEzNDthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkNoZW5sYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjEzNTthOjI6e3M6NjoiZmFtaWx5IjtzOjE3OiJDaGVycnkgQ3JlYW0gU29kYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjEzNjthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJDaGVycnkgU3dhc2giO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjEzNzthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkNoZXd5IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTM4O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQ2hpY2xlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTM5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQ2hpdm8iO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjtzOjk6IjkwMGl0YWxpYyI7czoxNzoiVWx0cmEgQm9sZCBJdGFsaWMiO319aToxNDA7YToyOntzOjY6ImZhbWlseSI7czo2OiJDaW56ZWwiO3M6ODoidmFyaWFudHMiO2E6Mzp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjE0MTthOjI6e3M6NjoiZmFtaWx5IjtzOjE3OiJDaW56ZWwgRGVjb3JhdGl2ZSI7czo4OiJ2YXJpYW50cyI7YTozOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjt9fWk6MTQyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IkNsaWNrZXIgU2NyaXB0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTQzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NDoiQ29kYSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo4MDA7czoxMDoiRXh0cmEgQm9sZCI7fX1pOjE0NDthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJDb2RhIENhcHRpb24iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo4MDA7czoxMDoiRXh0cmEgQm9sZCI7fX1pOjE0NTthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IkNvZHlzdGFyIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTQ2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiQ29tYm8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxNDc7YToyOntzOjY6ImZhbWlseSI7czo5OiJDb21mb3J0YWEiO3M6ODoidmFyaWFudHMiO2E6Mzp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjE0ODthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJDb21pbmcgU29vbiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE0OTthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJDb25jZXJ0IE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE1MDthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkNvbmRpbWVudCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE1MTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkNvbnRlbnQiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjE1MjthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJDb250cmFpbCBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxNTM7YToyOntzOjY6ImZhbWlseSI7czoxMToiQ29udmVyZ2VuY2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxNTQ7YToyOntzOjY6ImZhbWlseSI7czo2OiJDb29raWUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxNTU7YToyOntzOjY6ImZhbWlseSI7czo1OiJDb3BzZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE1NjthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkNvcmJlbiI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MTU3O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiQ291cmdldHRlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTU4O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQ291c2luZSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MTU5O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiQ291c3RhcmQiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO319aToxNjA7YToyOntzOjY6ImZhbWlseSI7czoyMToiQ292ZXJlZCBCeSBZb3VyIEdyYWNlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTYxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkNyYWZ0eSBHaXJscyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE2MjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkNyZWVwc3RlciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE2MzthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJDcmV0ZSBSb3VuZCI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO319aToxNjQ7YToyOntzOjY6ImZhbWlseSI7czoxMjoiQ3JpbXNvbiBUZXh0IjtzOjg6InZhcmlhbnRzIjthOjY6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO3M6OToiNjAwaXRhbGljIjtzOjE2OiJTZW1pIEJvbGQgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjE2NTthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJDcm9pc3NhbnQgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTY2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiQ3J1c2hlZCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE2NzthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkN1cHJ1bSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MTY4O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiQ3V0aXZlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTY5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkN1dGl2ZSBNb25vIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTcwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiRGFtaW9uIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTcxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IkRhbmNpbmcgU2NyaXB0IjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aToxNzI7YToyOntzOjY6ImZhbWlseSI7czo3OiJEYW5ncmVrIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTczO2E6Mjp7czo2OiJmYW1pbHkiO3M6MjA6IkRhd25pbmcgb2YgYSBOZXcgRGF5IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTc0O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiRGF5cyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxNzU7YToyOntzOjY6ImZhbWlseSI7czo1OiJEZWtrbyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE3NjthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkRlbGl1cyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE3NzthOjI6e3M6NjoiZmFtaWx5IjtzOjE3OiJEZWxpdXMgU3dhc2ggQ2FwcyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE3ODthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJEZWxpdXMgVW5pY2FzZSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MTc5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IkRlbGxhIFJlc3BpcmEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxODA7YToyOntzOjY6ImZhbWlseSI7czo4OiJEZW5rIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE4MTthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJEZXZvbnNoaXJlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTgyO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiRGh1cmphdGkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxODM7YToyOntzOjY6ImZhbWlseSI7czoxMzoiRGlkYWN0IEdvdGhpYyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE4NDthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkRpcGxvbWF0YSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE4NTthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJEaXBsb21hdGEgU0MiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxODY7YToyOntzOjY6ImZhbWlseSI7czo2OiJEb21pbmUiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjE4NzthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJEb25lZ2FsIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE4ODthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJEb3BwaW8gT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTg5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiRG9yc2EiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxOTA7YToyOntzOjY6ImZhbWlseSI7czo1OiJEb3NpcyI7czo4OiJ2YXJpYW50cyI7YTo3OntpOjIwMDtzOjExOiJFeHRyYSBMaWdodCI7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NTAwO3M6NjoiTWVkaXVtIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjtpOjgwMDtzOjEwOiJFeHRyYSBCb2xkIjt9fWk6MTkxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkRyIFN1Z2l5YW1hIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTkyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IkRyb2lkIFNhbnMiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjE5MzthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJEcm9pZCBTYW5zIE1vbm8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToxOTQ7YToyOntzOjY6ImZhbWlseSI7czoxMToiRHJvaWQgU2VyaWYiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjE5NTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkR1cnUgU2FucyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE5NjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkR5bmFsaWdodCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE5NzthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJFQiBHYXJhbW9uZCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjE5ODthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJFYWdsZSBMYWtlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MTk5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiRWF0ZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMDA7YToyOntzOjY6ImZhbWlseSI7czo5OiJFY29ub21pY2EiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjIwMTthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IkVrIE11a3RhIjtzOjg6InZhcmlhbnRzIjthOjc6e2k6MjAwO3M6MTE6IkV4dHJhIExpZ2h0IjtpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NjAwO3M6OToiU2VtaSBCb2xkIjtpOjcwMDtzOjQ6IkJvbGQiO2k6ODAwO3M6MTA6IkV4dHJhIEJvbGQiO319aToyMDI7YToyOntzOjY6ImZhbWlseSI7czoxMToiRWxlY3Ryb2xpemUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMDM7YToyOntzOjY6ImZhbWlseSI7czo1OiJFbHNpZSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjIwNDthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJFbHNpZSBTd2FzaCBDYXBzIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjt9fWk6MjA1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkVtYmxlbWEgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjA2O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkVtaWx5cyBDYW5keSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIwNzthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJFbmdhZ2VtZW50IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjA4O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiRW5nbGViZXJ0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjA5O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiRW5yaXF1ZXRhIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aToyMTA7YToyOntzOjY6ImZhbWlseSI7czo5OiJFcmljYSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMTE7YToyOntzOjY6ImZhbWlseSI7czo3OiJFc3RlYmFuIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjEyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IkV1cGhvcmlhIFNjcmlwdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIxMzthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkV3ZXJ0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjE0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MzoiRXhvIjtzOjg6InZhcmlhbnRzIjthOjE4OntpOjEwMDtzOjQ6IlRoaW4iO3M6OToiMTAwaXRhbGljIjtzOjExOiJUaGluIEl0YWxpYyI7aToyMDA7czoxMToiRXh0cmEgTGlnaHQiO3M6OToiMjAwaXRhbGljIjtOO2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo1MDA7czo2OiJNZWRpdW0iO3M6OToiNTAwaXRhbGljIjtzOjEzOiJNZWRpdW0gSXRhbGljIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7czo5OiI2MDBpdGFsaWMiO3M6MTY6IlNlbWkgQm9sZCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjtpOjgwMDtzOjEwOiJFeHRyYSBCb2xkIjtzOjk6IjgwMGl0YWxpYyI7czoxNzoiRXh0cmEgQm9sZCBJdGFsaWMiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO3M6OToiOTAwaXRhbGljIjtzOjE3OiJVbHRyYSBCb2xkIEl0YWxpYyI7fX1pOjIxNTthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkV4byAyIjtzOjg6InZhcmlhbnRzIjthOjE4OntpOjEwMDtzOjQ6IlRoaW4iO3M6OToiMTAwaXRhbGljIjtzOjExOiJUaGluIEl0YWxpYyI7aToyMDA7czoxMToiRXh0cmEgTGlnaHQiO3M6OToiMjAwaXRhbGljIjtOO2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo1MDA7czo2OiJNZWRpdW0iO3M6OToiNTAwaXRhbGljIjtzOjEzOiJNZWRpdW0gSXRhbGljIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7czo5OiI2MDBpdGFsaWMiO3M6MTY6IlNlbWkgQm9sZCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjtpOjgwMDtzOjEwOiJFeHRyYSBCb2xkIjtzOjk6IjgwMGl0YWxpYyI7czoxNzoiRXh0cmEgQm9sZCBJdGFsaWMiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO3M6OToiOTAwaXRhbGljIjtzOjE3OiJVbHRyYSBCb2xkIEl0YWxpYyI7fX1pOjIxNjthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJFeHBsZXR1cyBTYW5zIjtzOjg6InZhcmlhbnRzIjthOjg6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo1MDA7czo2OiJNZWRpdW0iO3M6OToiNTAwaXRhbGljIjtzOjEzOiJNZWRpdW0gSXRhbGljIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7czo5OiI2MDBpdGFsaWMiO3M6MTY6IlNlbWkgQm9sZCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MjE3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkZhbndvb2QgVGV4dCI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO319aToyMTg7YToyOntzOjY6ImZhbWlseSI7czo5OiJGYXNjaW5hdGUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMTk7YToyOntzOjY6ImZhbWlseSI7czoxNjoiRmFzY2luYXRlIElubGluZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIyMDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJGYXN0ZXIgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjIxO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiRmFzdGhhbmQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMjI7YToyOntzOjY6ImZhbWlseSI7czo5OiJGYXVuYSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMjM7YToyOntzOjY6ImZhbWlseSI7czo4OiJGZWRlcmFudCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIyNDthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkZlZGVybyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIyNTthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkZlbGlwYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIyNjthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IkZlbml4IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjI3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkZpbmdlciBQYWludCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIyODthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkZpcmEgTW9ubyI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MjI5O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiRmlyYSBTYW5zIjtzOjg6InZhcmlhbnRzIjthOjg6e2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo1MDA7czo2OiJNZWRpdW0iO3M6OToiNTAwaXRhbGljIjtzOjEzOiJNZWRpdW0gSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjIzMDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJGamFsbGEgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjMxO2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiRmpvcmQgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjMyO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiRmxhbWVuY28iO3M6ODoidmFyaWFudHMiO2E6Mjp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMzM7YToyOntzOjY6ImZhbWlseSI7czo3OiJGbGF2b3JzIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjM0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IkZvbmRhbWVudG8iO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6MjM1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTY6IkZvbnRkaW5lciBTd2Fua3kiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMzY7YToyOntzOjY6ImZhbWlseSI7czo1OiJGb3J1bSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjIzNzthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJGcmFuY29pcyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyMzg7YToyOntzOjY6ImZhbWlseSI7czoxMjoiRnJlY2tsZSBGYWNlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjM5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MjA6IkZyZWRlcmlja2EgdGhlIEdyZWF0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjQwO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkZyZWRva2EgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjQxO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiRnJlZWhhbmQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNDI7YToyOntzOjY6ImZhbWlseSI7czo2OiJGcmVzY2EiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNDM7YToyOntzOjY6ImZhbWlseSI7czo3OiJGcmlqb2xlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjQ0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiRnJ1a3R1ciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI0NTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkZ1Z2F6IE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI0NjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IkdGUyBEaWRvdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI0NzthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJHRlMgTmVvaGVsbGVuaWMiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjI0ODthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IkdhYnJpZWxhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjQ5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiR2FmYXRhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjUwO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiR2FsZGVhbm8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNTE7YToyOntzOjY6ImZhbWlseSI7czo3OiJHYWxpbmRvIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjUyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IkdlbnRpdW0gQmFzaWMiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjI1MzthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJHZW50aXVtIEJvb2sgQmFzaWMiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjI1NDthOjI6e3M6NjoiZmFtaWx5IjtzOjM6IkdlbyI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO319aToyNTU7YToyOntzOjY6ImZhbWlseSI7czo3OiJHZW9zdGFyIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjU2O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6Ikdlb3N0YXIgRmlsbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI1NzthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJHZXJtYW5pYSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNTg7YToyOntzOjY6ImZhbWlseSI7czo2OiJHaWR1Z3UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNTk7YToyOntzOjY6ImZhbWlseSI7czoxMzoiR2lsZGEgRGlzcGxheSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI2MDthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJHaXZlIFlvdSBHbG9yeSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI2MTthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJHbGFzcyBBbnRpcXVhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjYyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiR2xlZ29vIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aToyNjM7YToyOntzOjY6ImZhbWlseSI7czoxNzoiR2xvcmlhIEhhbGxlbHVqYWgiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNjQ7YToyOntzOjY6ImZhbWlseSI7czoxMDoiR29ibGluIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI2NTthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJHb2NoaSBIYW5kIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjY2O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiR29yZGl0YXMiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjI2NzthOjI6e3M6NjoiZmFtaWx5IjtzOjIxOiJHb3VkeSBCb29rbGV0dGVyIDE5MTEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNjg7YToyOntzOjY6ImZhbWlseSI7czo4OiJHcmFkdWF0ZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI2OTthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJHcmFuZCBIb3RlbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI3MDthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJHcmF2aXRhcyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNzE7YToyOntzOjY6ImZhbWlseSI7czoxMToiR3JlYXQgVmliZXMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNzI7YToyOntzOjY6ImZhbWlseSI7czo2OiJHcmlmZnkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNzM7YToyOntzOjY6ImZhbWlseSI7czo2OiJHcnVwcG8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNzQ7YToyOntzOjY6ImZhbWlseSI7czo1OiJHdWRlYSI7czo4OiJ2YXJpYW50cyI7YTozOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjI3NTthOjI6e3M6NjoiZmFtaWx5IjtzOjg6Ikd1cmFqYWRhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mjc2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiSGFiaWJpIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mjc3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiSGFsYW50IjtzOjg6InZhcmlhbnRzIjthOjU6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjUwMDtzOjY6Ik1lZGl1bSI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjI3ODthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJIYW1tZXJzbWl0aCBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyNzk7YToyOntzOjY6ImZhbWlseSI7czo3OiJIYW5hbGVpIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjgwO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkhhbmFsZWkgRmlsbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI4MTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkhhbmRsZWUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyODI7YToyOntzOjY6ImZhbWlseSI7czo3OiJIYW51bWFuIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aToyODM7YToyOntzOjY6ImZhbWlseSI7czoxMjoiSGFwcHkgTW9ua2V5IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mjg0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IkhlYWRsYW5kIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI4NTthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJIZW5ueSBQZW5ueSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI4NjthOjI6e3M6NjoiZmFtaWx5IjtzOjIwOiJIZXJyIFZvbiBNdWVsbGVyaG9mZiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI4NzthOjI6e3M6NjoiZmFtaWx5IjtzOjQ6IkhpbmQiO3M6ODoidmFyaWFudHMiO2E6NTp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NTAwO3M6NjoiTWVkaXVtIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6Mjg4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IkhvbHR3b29kIE9uZSBTQyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI4OTthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJIb21lbWFkZSBBcHBsZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjI5MDthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IkhvbWVuYWplIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjkxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IklNIEZlbGwgRFcgUGljYSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO319aToyOTI7YToyOntzOjY6ImZhbWlseSI7czoxODoiSU0gRmVsbCBEVyBQaWNhIFNDIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MjkzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTk6IklNIEZlbGwgRG91YmxlIFBpY2EiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6Mjk0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MjI6IklNIEZlbGwgRG91YmxlIFBpY2EgU0MiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyOTU7YToyOntzOjY6ImZhbWlseSI7czoxNToiSU0gRmVsbCBFbmdsaXNoIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjI5NjthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJJTSBGZWxsIEVuZ2xpc2ggU0MiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aToyOTc7YToyOntzOjY6ImZhbWlseSI7czoyMDoiSU0gRmVsbCBGcmVuY2ggQ2Fub24iO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6Mjk4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MjM6IklNIEZlbGwgRnJlbmNoIENhbm9uIFNDIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mjk5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MjA6IklNIEZlbGwgR3JlYXQgUHJpbWVyIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjMwMDthOjI6e3M6NjoiZmFtaWx5IjtzOjIzOiJJTSBGZWxsIEdyZWF0IFByaW1lciBTQyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjMwMTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkljZWJlcmciO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMDI7YToyOntzOjY6ImZhbWlseSI7czo3OiJJY2VsYW5kIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzAzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiSW1wcmltYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjMwNDthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJJbmNvbnNvbGF0YSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MzA1O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiSW5kZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMDY7YToyOntzOjY6ImZhbWlseSI7czoxMjoiSW5kaWUgRmxvd2VyIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzA3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiSW5pa2EiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjMwODthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJJcmlzaCBHcm92ZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMDk7YToyOntzOjY6ImZhbWlseSI7czo5OiJJc3RvayBXZWIiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjMxMDthOjI6e3M6NjoiZmFtaWx5IjtzOjg6Ikl0YWxpYW5hIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzExO2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiSXRhbGlhbm5vIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzEyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTY6IkphY3F1ZXMgRnJhbmNvaXMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMTM7YToyOntzOjY6ImZhbWlseSI7czoyMzoiSmFjcXVlcyBGcmFuY29pcyBTaGFkb3ciO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMTQ7YToyOntzOjY6ImZhbWlseSI7czoxNDoiSmltIE5pZ2h0c2hhZGUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMTU7YToyOntzOjY6ImZhbWlseSI7czoxMDoiSm9ja2V5IE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjMxNjthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJKb2xseSBMb2RnZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMTc7YToyOntzOjY6ImZhbWlseSI7czoxMjoiSm9zZWZpbiBTYW5zIjtzOjg6InZhcmlhbnRzIjthOjEwOntpOjEwMDtzOjQ6IlRoaW4iO3M6OToiMTAwaXRhbGljIjtzOjExOiJUaGluIEl0YWxpYyI7aTozMDA7czo1OiJMaWdodCI7czo5OiIzMDBpdGFsaWMiO3M6MTI6IkxpZ2h0IEl0YWxpYyI7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7czo5OiI2MDBpdGFsaWMiO3M6MTY6IlNlbWkgQm9sZCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MzE4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6Ikpvc2VmaW4gU2xhYiI7czo4OiJ2YXJpYW50cyI7YToxMDp7aToxMDA7czo0OiJUaGluIjtzOjk6IjEwMGl0YWxpYyI7czoxMToiVGhpbiBJdGFsaWMiO2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO3M6OToiNjAwaXRhbGljIjtzOjE2OiJTZW1pIEJvbGQgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjMxOTthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IkpvdGkgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzIwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiSnVkc29uIjtzOjg6InZhcmlhbnRzIjthOjM6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MzIxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiSnVsZWUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMjI7YToyOntzOjY6ImZhbWlseSI7czoxNToiSnVsaXVzIFNhbnMgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzIzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiSnVuZ2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMjQ7YToyOntzOjY6ImZhbWlseSI7czo0OiJKdXJhIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjUwMDtzOjY6Ik1lZGl1bSI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO319aTozMjU7YToyOntzOjY6ImZhbWlseSI7czoxNzoiSnVzdCBBbm90aGVyIEhhbmQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMjY7YToyOntzOjY6ImZhbWlseSI7czoyMzoiSnVzdCBNZSBBZ2FpbiBEb3duIEhlcmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMjc7YToyOntzOjY6ImZhbWlseSI7czo1OiJLYWxhbSI7czo4OiJ2YXJpYW50cyI7YTozOntpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MzI4O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiS2FtZXJvbiI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MzI5O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiS2FudHVtcnV5IjtzOjg6InZhcmlhbnRzIjthOjM6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTozMzA7YToyOntzOjY6ImZhbWlseSI7czo1OiJLYXJsYSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6MzMxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiS2FybWEiO3M6ODoidmFyaWFudHMiO2E6NTp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NTAwO3M6NjoiTWVkaXVtIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MzMyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IkthdXNoYW4gU2NyaXB0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzMzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiS2F2b29uIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzM0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IktkYW0gVGhtb3IiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMzU7YToyOntzOjY6ImZhbWlseSI7czoxMDoiS2VhbmlhIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjMzNjthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJLZWxseSBTbGFiIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzM3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiS2VuaWEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozMzg7YToyOntzOjY6ImZhbWlseSI7czo1OiJLaGFuZCI7czo4OiJ2YXJpYW50cyI7YTo1OntpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NjAwO3M6OToiU2VtaSBCb2xkIjtpOjcwMDtzOjQ6IkJvbGQiO319aTozMzk7YToyOntzOjY6ImZhbWlseSI7czo1OiJLaG1lciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM0MDthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IktodWxhIjtzOjg6InZhcmlhbnRzIjthOjU6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjtpOjgwMDtzOjEwOiJFeHRyYSBCb2xkIjt9fWk6MzQxO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiS2l0ZSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNDI7YToyOntzOjY6ImZhbWlseSI7czo3OiJLbmV3YXZlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzQzO2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiS290dGEgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzQ0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiS291bGVuIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzQ1O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiS3Jhbmt5IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzQ2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiS3Jlb24iO3M6ODoidmFyaWFudHMiO2E6Mzp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjM0NzthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IktyaXN0aSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM0ODthOjI6e3M6NjoiZmFtaWx5IjtzOjk6Iktyb25hIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM0OTthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJMYSBCZWxsZSBBdXJvcmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNTA7YToyOntzOjY6ImZhbWlseSI7czo1OiJMYWlsYSI7czo4OiJ2YXJpYW50cyI7YTo1OntpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NjAwO3M6OToiU2VtaSBCb2xkIjtpOjcwMDtzOjQ6IkJvbGQiO319aTozNTE7YToyOntzOjY6ImZhbWlseSI7czoxMToiTGFra2kgUmVkZHkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNTI7YToyOntzOjY6ImZhbWlseSI7czo4OiJMYW5jZWxvdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM1MzthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IkxhdGVlZiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM1NDthOjI6e3M6NjoiZmFtaWx5IjtzOjQ6IkxhdG8iO3M6ODoidmFyaWFudHMiO2E6MTA6e2k6MTAwO3M6NDoiVGhpbiI7czo5OiIxMDBpdGFsaWMiO3M6MTE6IlRoaW4gSXRhbGljIjtpOjMwMDtzOjU6IkxpZ2h0IjtzOjk6IjMwMGl0YWxpYyI7czoxMjoiTGlnaHQgSXRhbGljIjtpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjtzOjk6IjkwMGl0YWxpYyI7czoxNzoiVWx0cmEgQm9sZCBJdGFsaWMiO319aTozNTU7YToyOntzOjY6ImZhbWlseSI7czoxMzoiTGVhZ3VlIFNjcmlwdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM1NjthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJMZWNrZXJsaSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNTc7YToyOntzOjY6ImZhbWlseSI7czo2OiJMZWRnZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNTg7YToyOntzOjY6ImZhbWlseSI7czo2OiJMZWt0b24iO3M6ODoidmFyaWFudHMiO2E6Mzp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO319aTozNTk7YToyOntzOjY6ImZhbWlseSI7czo1OiJMZW1vbiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM2MDthOjI6e3M6NjoiZmFtaWx5IjtzOjE3OiJMaWJyZSBCYXNrZXJ2aWxsZSI7czo4OiJ2YXJpYW50cyI7YTozOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjM2MTthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJMaWZlIFNhdmVycyI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MzYyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IkxpbGl0YSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNjM7YToyOntzOjY6ImZhbWlseSI7czoxNToiTGlseSBTY3JpcHQgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzY0O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiTGltZWxpZ2h0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzY1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IkxpbmRlbiBIaWxsIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjM2NjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IkxvYnN0ZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNjc7YToyOntzOjY6ImZhbWlseSI7czoxMToiTG9ic3RlciBUd28iO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjM2ODthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJMb25kcmluYSBPdXRsaW5lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6MzY5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IkxvbmRyaW5hIFNoYWRvdyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM3MDthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJMb25kcmluYSBTa2V0Y2giO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNzE7YToyOntzOjY6ImZhbWlseSI7czoxNDoiTG9uZHJpbmEgU29saWQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozNzI7YToyOntzOjY6ImZhbWlseSI7czo0OiJMb3JhIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTozNzM7YToyOntzOjY6ImZhbWlseSI7czoyMToiTG92ZSBZYSBMaWtlIEEgU2lzdGVyIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mzc0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTc6IkxvdmVkIGJ5IHRoZSBLaW5nIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mzc1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IkxvdmVycyBRdWFycmVsIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mzc2O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6Ikx1Y2tpZXN0IEd1eSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM3NzthOjI6e3M6NjoiZmFtaWx5IjtzOjg6Ikx1c2l0YW5hIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTozNzg7YToyOntzOjY6ImZhbWlseSI7czo3OiJMdXN0cmlhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mzc5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiTWFjb25kbyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM4MDthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJNYWNvbmRvIFN3YXNoIENhcHMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozODE7YToyOntzOjY6ImZhbWlseSI7czo1OiJNYWdyYSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6MzgyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6Ik1haWRlbiBPcmFuZ2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozODM7YToyOntzOjY6ImZhbWlseSI7czo0OiJNYWtvIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mzg0O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiTWFsbGFubmEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozODU7YToyOntzOjY6ImZhbWlseSI7czo3OiJNYW5kYWxpIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mzg2O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiTWFyY2VsbHVzIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Mzg3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6Ik1hcmNlbGx1cyBTQyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM4ODthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJNYXJjayBTY3JpcHQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozODk7YToyOntzOjY6ImZhbWlseSI7czo5OiJNYXJnYXJpbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozOTA7YToyOntzOjY6ImZhbWlseSI7czo5OiJNYXJrbyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozOTE7YToyOntzOjY6ImZhbWlseSI7czo4OiJNYXJtZWxhZCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM5MjthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJNYXJ0ZWwgU2FucyI7czo4OiJ2YXJpYW50cyI7YTo3OntpOjIwMDtzOjExOiJFeHRyYSBMaWdodCI7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NjAwO3M6OToiU2VtaSBCb2xkIjtpOjcwMDtzOjQ6IkJvbGQiO2k6ODAwO3M6MTA6IkV4dHJhIEJvbGQiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO319aTozOTM7YToyOntzOjY6ImZhbWlseSI7czo2OiJNYXJ2ZWwiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjM5NDthOjI6e3M6NjoiZmFtaWx5IjtzOjQ6Ik1hdGUiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6Mzk1O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiTWF0ZSBTQyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjM5NjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6Ik1hdmVuIFBybyI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NzAwO3M6NDoiQm9sZCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjM5NzthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik1jTGFyZW4iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozOTg7YToyOntzOjY6ImZhbWlseSI7czo2OiJNZWRkb24iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTozOTk7YToyOntzOjY6ImZhbWlseSI7czoxMzoiTWVkaWV2YWxTaGFycCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQwMDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJNZWR1bGEgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDAxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiTWVncmltIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDAyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6Ik1laWUgU2NyaXB0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDAzO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiTWVyaWVuZGEiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQwNDthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJNZXJpZW5kYSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MDU7YToyOntzOjY6ImZhbWlseSI7czoxMjoiTWVycml3ZWF0aGVyIjtzOjg6InZhcmlhbnRzIjthOjg6e2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO3M6OToiOTAwaXRhbGljIjtzOjE3OiJVbHRyYSBCb2xkIEl0YWxpYyI7fX1pOjQwNjthOjI6e3M6NjoiZmFtaWx5IjtzOjE3OiJNZXJyaXdlYXRoZXIgU2FucyI7czo4OiJ2YXJpYW50cyI7YTo4OntpOjMwMDtzOjU6IkxpZ2h0IjtzOjk6IjMwMGl0YWxpYyI7czoxMjoiTGlnaHQgSXRhbGljIjtpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjtpOjgwMDtzOjEwOiJFeHRyYSBCb2xkIjtzOjk6IjgwMGl0YWxpYyI7czoxNzoiRXh0cmEgQm9sZCBJdGFsaWMiO319aTo0MDc7YToyOntzOjY6ImZhbWlseSI7czo1OiJNZXRhbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQwODthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJNZXRhbCBNYW5pYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQwOTthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJNZXRhbW9ycGhvdXMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MTA7YToyOntzOjY6ImZhbWlseSI7czoxMToiTWV0cm9waG9iaWMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MTE7YToyOntzOjY6ImZhbWlseSI7czo4OiJNaWNocm9tYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQxMjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik1pbG9uZ2EiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MTM7YToyOntzOjY6ImZhbWlseSI7czo5OiJNaWx0b25pYW4iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MTQ7YToyOntzOjY6ImZhbWlseSI7czoxNjoiTWlsdG9uaWFuIFRhdHRvbyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQxNTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik1pbml2ZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MTY7YToyOntzOjY6ImZhbWlseSI7czoxNDoiTWlzcyBGYWphcmRvc2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MTc7YToyOntzOjY6ImZhbWlseSI7czo1OiJNb2RhayI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQxODthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJNb2Rlcm4gQW50aXF1YSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQxOTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik1vbGVuZ28iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MjA7YToyOntzOjY6ImZhbWlseSI7czo1OiJNb2xsZSI7czo4OiJ2YXJpYW50cyI7YToxOntzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjQyMTthOjI6e3M6NjoiZmFtaWx5IjtzOjU6Ik1vbmRhIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo0MjI7YToyOntzOjY6ImZhbWlseSI7czo4OiJNb25vZmV0dCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQyMzthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik1vbm90b24iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MjQ7YToyOntzOjY6ImZhbWlseSI7czoyMDoiTW9uc2lldXIgTGEgRG91bGFpc2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MjU7YToyOntzOjY6ImZhbWlseSI7czo3OiJNb250YWdhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDI2O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiTW9udGV6IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDI3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6Ik1vbnRzZXJyYXQiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQyODthOjI6e3M6NjoiZmFtaWx5IjtzOjIxOiJNb250c2VycmF0IEFsdGVybmF0ZXMiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQyOTthOjI6e3M6NjoiZmFtaWx5IjtzOjIwOiJNb250c2VycmF0IFN1YnJheWFkYSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NDMwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NDoiTW91bCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQzMTthOjI6e3M6NjoiZmFtaWx5IjtzOjg6Ik1vdWxwYWxpIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDMyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MjI6Ik1vdW50YWlucyBvZiBDaHJpc3RtYXMiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQzMzthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJNb3VzZSBNZW1vaXJzIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDM0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6Ik1yIEJlZGZvcnQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0MzU7YToyOntzOjY6ImZhbWlseSI7czo4OiJNciBEYWZvZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQzNjthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJNciBEZSBIYXZpbGFuZCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQzNzthOjI6e3M6NjoiZmFtaWx5IjtzOjE5OiJNcnMgU2FpbnQgRGVsYWZpZWxkIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDM4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6Ik1ycyBTaGVwcGFyZHMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0Mzk7YToyOntzOjY6ImZhbWlseSI7czo0OiJNdWxpIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjQ0MDthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJNeXN0ZXJ5IFF1ZXN0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDQxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MzoiTlRSIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDQyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiTmV1Y2hhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDQzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiTmV1dG9uIjtzOjg6InZhcmlhbnRzIjthOjY6e2k6MjAwO3M6MTE6IkV4dHJhIExpZ2h0IjtpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7aTo4MDA7czoxMDoiRXh0cmEgQm9sZCI7fX1pOjQ0NDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJOZXcgUm9ja2VyIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDQ1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6Ik5ld3MgQ3ljbGUiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQ0NjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik5pY29ubmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0NDc7YToyOntzOjY6ImZhbWlseSI7czo5OiJOaXhpZSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0NDg7YToyOntzOjY6ImZhbWlseSI7czo2OiJOb2JpbGUiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjQ0OTthOjI6e3M6NjoiZmFtaWx5IjtzOjY6Ik5va29yYSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NDUwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiTm9yaWNhbiI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ1MTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik5vc2lmZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0NTI7YToyOntzOjY6ImZhbWlseSI7czoyMDoiTm90aGluZyBZb3UgQ291bGQgRG8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0NTM7YToyOntzOjY6ImZhbWlseSI7czoxMjoiTm90aWNpYSBUZXh0IjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo0NTQ7YToyOntzOjY6ImZhbWlseSI7czo5OiJOb3RvIFNhbnMiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjQ1NTthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJOb3RvIFNlcmlmIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo0NTY7YToyOntzOjY6ImZhbWlseSI7czo4OiJOb3ZhIEN1dCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ1NzthOjI6e3M6NjoiZmFtaWx5IjtzOjk6Ik5vdmEgRmxhdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ1ODthOjI6e3M6NjoiZmFtaWx5IjtzOjk6Ik5vdmEgTW9ubyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ1OTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6Ik5vdmEgT3ZhbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ2MDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJOb3ZhIFJvdW5kIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDYxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6Ik5vdmEgU2NyaXB0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDYyO2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiTm92YSBTbGltIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDYzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6Ik5vdmEgU3F1YXJlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDY0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiTnVtYW5zIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDY1O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiTnVuaXRvIjtzOjg6InZhcmlhbnRzIjthOjM6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo0NjY7YToyOntzOjY6ImZhbWlseSI7czoxNDoiT2RvciBNZWFuIENoZXkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0Njc7YToyOntzOjY6ImZhbWlseSI7czo3OiJPZmZzaWRlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDY4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6Ik9sZCBTdGFuZGFyZCBUVCI7czo4OiJ2YXJpYW50cyI7YTozOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQ2OTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6Ik9sZGVuYnVyZyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ3MDthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJPbGVvIFNjcmlwdCI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NDcxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MjI6Ik9sZW8gU2NyaXB0IFN3YXNoIENhcHMiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQ3MjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6Ik9wZW4gU2FucyI7czo4OiJ2YXJpYW50cyI7YToxMDp7aTozMDA7czo1OiJMaWdodCI7czo5OiIzMDBpdGFsaWMiO3M6MTI6IkxpZ2h0IEl0YWxpYyI7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7czo5OiI2MDBpdGFsaWMiO3M6MTY6IlNlbWkgQm9sZCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjtpOjgwMDtzOjEwOiJFeHRyYSBCb2xkIjtzOjk6IjgwMGl0YWxpYyI7czoxNzoiRXh0cmEgQm9sZCBJdGFsaWMiO319aTo0NzM7YToyOntzOjY6ImZhbWlseSI7czoxOToiT3BlbiBTYW5zIENvbmRlbnNlZCI7czo4OiJ2YXJpYW50cyI7YTozOntpOjMwMDtzOjU6IkxpZ2h0IjtzOjk6IjMwMGl0YWxpYyI7czoxMjoiTGlnaHQgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo0NzQ7YToyOntzOjY6ImZhbWlseSI7czoxMToiT3JhbmllbmJhdW0iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0NzU7YToyOntzOjY6ImZhbWlseSI7czo4OiJPcmJpdHJvbiI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NzAwO3M6NDoiQm9sZCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjQ3NjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6Ik9yZWdhbm8iO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6NDc3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiT3JpZW50YSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjQ3ODthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJPcmlnaW5hbCBTdXJmZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0Nzk7YToyOntzOjY6ImZhbWlseSI7czo2OiJPc3dhbGQiO3M6ODoidmFyaWFudHMiO2E6Mzp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjQ4MDthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJPdmVyIHRoZSBSYWluYm93IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDgxO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiT3ZlcmxvY2siO3M6ODoidmFyaWFudHMiO2E6Njp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7czo5OiI5MDBpdGFsaWMiO3M6MTc6IlVsdHJhIEJvbGQgSXRhbGljIjt9fWk6NDgyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6Ik92ZXJsb2NrIFNDIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDgzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MzoiT3ZvIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDg0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiT3h5Z2VuIjtzOjg6InZhcmlhbnRzIjthOjM6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo0ODU7YToyOntzOjY6ImZhbWlseSI7czoxMToiT3h5Z2VuIE1vbm8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0ODY7YToyOntzOjY6ImZhbWlseSI7czo3OiJQVCBNb25vIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDg3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiUFQgU2FucyI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NDg4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IlBUIFNhbnMgQ2FwdGlvbiI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NDg5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IlBUIFNhbnMgTmFycm93IjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo0OTA7YToyOntzOjY6ImZhbWlseSI7czo4OiJQVCBTZXJpZiI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NDkxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTY6IlBUIFNlcmlmIENhcHRpb24iO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6NDkyO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiUGFjaWZpY28iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0OTM7YToyOntzOjY6ImZhbWlseSI7czo3OiJQYXByaWthIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDk0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IlBhcmlzaWVubmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0OTU7YToyOntzOjY6ImZhbWlseSI7czoxMToiUGFzc2VybyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0OTY7YToyOntzOjY6ImZhbWlseSI7czoxMToiUGFzc2lvbiBPbmUiO3M6ODoidmFyaWFudHMiO2E6Mzp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjQ5NzthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJQYXRod2F5IEdvdGhpYyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo0OTg7YToyOntzOjY6ImZhbWlseSI7czoxMjoiUGF0cmljayBIYW5kIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NDk5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTU6IlBhdHJpY2sgSGFuZCBTQyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUwMDthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlBhdHVhIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUwMTthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJQYXl0b25lIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUwMjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlBlZGRhbmEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MDM7YToyOntzOjY6ImZhbWlseSI7czo3OiJQZXJhbHRhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTA0O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTY6IlBlcm1hbmVudCBNYXJrZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MDU7YToyOntzOjY6ImZhbWlseSI7czoxOToiUGV0aXQgRm9ybWFsIFNjcmlwdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUwNjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlBldHJvbmEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MDc7YToyOntzOjY6ImZhbWlseSI7czoxMToiUGhpbG9zb3BoZXIiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjUwODthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlBpZWRyYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUwOTthOjI6e3M6NjoiZmFtaWx5IjtzOjEzOiJQaW55b24gU2NyaXB0IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTEwO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IlBpcmF0YSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MTE7YToyOntzOjY6ImZhbWlseSI7czo3OiJQbGFzdGVyIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTEyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NDoiUGxheSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NTEzO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiUGxheWJhbGwiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MTQ7YToyOntzOjY6ImZhbWlseSI7czoxNjoiUGxheWZhaXIgRGlzcGxheSI7czo4OiJ2YXJpYW50cyI7YTo2OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjtzOjk6IjkwMGl0YWxpYyI7czoxNzoiVWx0cmEgQm9sZCBJdGFsaWMiO319aTo1MTU7YToyOntzOjY6ImZhbWlseSI7czoxOToiUGxheWZhaXIgRGlzcGxheSBTQyI7czo4OiJ2YXJpYW50cyI7YTo2OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjtzOjk6IjkwMGl0YWxpYyI7czoxNzoiVWx0cmEgQm9sZCBJdGFsaWMiO319aTo1MTY7YToyOntzOjY6ImZhbWlseSI7czo3OiJQb2Rrb3ZhIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo1MTc7YToyOntzOjY6ImZhbWlseSI7czoxMDoiUG9pcmV0IE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUxODthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJQb2xsZXIgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTE5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NDoiUG9seSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO319aTo1MjA7YToyOntzOjY6ImZhbWlseSI7czo4OiJQb21waWVyZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUyMTthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJQb250YW5vIFNhbnMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MjI7YToyOntzOjY6ImZhbWlseSI7czoxNjoiUG9ydCBMbGlnYXQgU2FucyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUyMzthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJQb3J0IExsaWdhdCBTbGFiIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTI0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiUHJhdGEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MjU7YToyOntzOjY6ImZhbWlseSI7czoxMToiUHJlYWh2aWhlYXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1MjY7YToyOntzOjY6ImZhbWlseSI7czoxNDoiUHJlc3MgU3RhcnQgMlAiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1Mjc7YToyOntzOjY6ImZhbWlseSI7czoxNDoiUHJpbmNlc3MgU29maWEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1Mjg7YToyOntzOjY6ImZhbWlseSI7czo4OiJQcm9jaW9ubyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUyOTthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJQcm9zdG8gT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTMwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiUHVyaXRhbiI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NTMxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IlB1cnBsZSBQdXJzZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUzMjthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlF1YW5kbyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUzMzthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IlF1YW50aWNvIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo1MzQ7YToyOntzOjY6ImZhbWlseSI7czoxMjoiUXVhdHRyb2NlbnRvIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo1MzU7YToyOntzOjY6ImZhbWlseSI7czoxNzoiUXVhdHRyb2NlbnRvIFNhbnMiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjUzNjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlF1ZXN0cmlhbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjUzNzthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlF1aWNrc2FuZCI7czo4OiJ2YXJpYW50cyI7YTozOntpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NTM4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IlF1aW50ZXNzZW50aWFsIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTM5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiUXdpZ2xleSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU0MDthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJSYWNpbmcgU2FucyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NDE7YToyOntzOjY6ImZhbWlseSI7czo2OiJSYWRsZXkiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6NTQyO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiUmFqZGhhbmkiO3M6ODoidmFyaWFudHMiO2E6NTp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NTAwO3M6NjoiTWVkaXVtIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NTQzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiUmFsZXdheSI7czo4OiJ2YXJpYW50cyI7YTo5OntpOjEwMDtzOjQ6IlRoaW4iO2k6MjAwO3M6MTE6IkV4dHJhIExpZ2h0IjtpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NjAwO3M6OToiU2VtaSBCb2xkIjtpOjcwMDtzOjQ6IkJvbGQiO2k6ODAwO3M6MTA6IkV4dHJhIEJvbGQiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO319aTo1NDQ7YToyOntzOjY6ImZhbWlseSI7czoxMjoiUmFsZXdheSBEb3RzIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTQ1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IlJhbWFiaGFkcmEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NDY7YToyOntzOjY6ImZhbWlseSI7czo4OiJSYW1hcmFqYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU0NzthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlJhbWJsYSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NTQ4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IlJhbW1ldHRvIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU0OTthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IlJhbmNoZXJzIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTUwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiUmFuY2hvIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTUxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiUmFuZ2EiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjU1MjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlJhdGlvbmFsZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU1MzthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJSYXZpIFByYWthc2giO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NTQ7YToyOntzOjY6ImZhbWlseSI7czo5OiJSZWRyZXNzZWQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NTU7YToyOntzOjY6ImZhbWlseSI7czoxMzoiUmVlbmllIEJlYW5pZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU1NjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlJldmFsaWEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NTc7YToyOntzOjY6ImZhbWlseSI7czo2OiJSaWJleWUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NTg7YToyOntzOjY6ImZhbWlseSI7czoxMzoiUmliZXllIE1hcnJvdyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU1OTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlJpZ2h0ZW91cyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU2MDthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlJpc3F1ZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU2MTthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlJvYm90byI7czo4OiJ2YXJpYW50cyI7YToxMjp7aToxMDA7czo0OiJUaGluIjtzOjk6IjEwMGl0YWxpYyI7czoxMToiVGhpbiBJdGFsaWMiO2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo1MDA7czo2OiJNZWRpdW0iO3M6OToiNTAwaXRhbGljIjtzOjEzOiJNZWRpdW0gSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7czo5OiI5MDBpdGFsaWMiO3M6MTc6IlVsdHJhIEJvbGQgSXRhbGljIjt9fWk6NTYyO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTY6IlJvYm90byBDb25kZW5zZWQiO3M6ODoidmFyaWFudHMiO2E6Njp7aTozMDA7czo1OiJMaWdodCI7czo5OiIzMDBpdGFsaWMiO3M6MTI6IkxpZ2h0IEl0YWxpYyI7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjU2MzthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJSb2JvdG8gU2xhYiI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjEwMDtzOjQ6IlRoaW4iO2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo1NjQ7YToyOntzOjY6ImZhbWlseSI7czo5OiJSb2NoZXN0ZXIiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NjU7YToyOntzOjY6ImZhbWlseSI7czo5OiJSb2NrIFNhbHQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1NjY7YToyOntzOjY6ImZhbWlseSI7czo3OiJSb2traXR0IjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo1Njc7YToyOntzOjY6ImZhbWlseSI7czo5OiJSb21hbmVzY28iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1Njg7YToyOntzOjY6ImZhbWlseSI7czo5OiJSb3BhIFNhbnMiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6NTY5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiUm9zYXJpbyI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6NTcwO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiUm9zYXJpdm8iO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6NTcxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IlJvdWdlIFNjcmlwdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU3MjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlJvemhhIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU3MzthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJSdWJpayBNb25vIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU3NDthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlJ1YmlrIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU3NTthOjI6e3M6NjoiZmFtaWx5IjtzOjQ6IlJ1ZGEiO3M6ODoidmFyaWFudHMiO2E6Mzp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjU3NjthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlJ1ZmluYSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NTc3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IlJ1Z2UgQm9vZ2llIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTc4O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiUnVsdWtvIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTc5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IlJ1bSBSYWlzaW4iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1ODA7YToyOntzOjY6ImZhbWlseSI7czoxNDoiUnVzbGFuIERpc3BsYXkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1ODE7YToyOntzOjY6ImZhbWlseSI7czo5OiJSdXNzbyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1ODI7YToyOntzOjY6ImZhbWlseSI7czo2OiJSdXRoaWUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1ODM7YToyOntzOjY6ImZhbWlseSI7czozOiJSeWUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1ODQ7YToyOntzOjY6ImZhbWlseSI7czoxMDoiU2FjcmFtZW50byI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU4NTthOjI6e3M6NjoiZmFtaWx5IjtzOjQ6IlNhaWwiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1ODY7YToyOntzOjY6ImZhbWlseSI7czo1OiJTYWxzYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU4NzthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlNhbmNoZXoiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjt9fWk6NTg4O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiU2FuY3JlZWsiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1ODk7YToyOntzOjY6ImZhbWlseSI7czoxMToiU2Fuc2l0YSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1OTA7YToyOntzOjY6ImZhbWlseSI7czo2OiJTYXJpbmEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1OTE7YToyOntzOjY6ImZhbWlseSI7czo4OiJTYXJwYW5jaCI7czo4OiJ2YXJpYW50cyI7YTo2OntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NjAwO3M6OToiU2VtaSBCb2xkIjtpOjcwMDtzOjQ6IkJvbGQiO2k6ODAwO3M6MTA6IkV4dHJhIEJvbGQiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO319aTo1OTI7YToyOntzOjY6ImZhbWlseSI7czo3OiJTYXRpc2Z5IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NTkzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiU2NhZGEiO3M6ODoidmFyaWFudHMiO2E6NDp7aTo0MDA7czo2OiJOb3JtYWwiO3M6OToiNDAwaXRhbGljIjtzOjEzOiJOb3JtYWwgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjU5NDthOjI6e3M6NjoiZmFtaWx5IjtzOjEyOiJTY2hlaGVyYXphZGUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo1OTU7YToyOntzOjY6ImZhbWlseSI7czoxMDoiU2Nob29sYmVsbCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU5NjthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJTZWF3ZWVkIFNjcmlwdCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU5NzthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlNldmlsbGFuYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU5ODthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJTZXltb3VyIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjU5OTthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJTaGFkb3dzIEludG8gTGlnaHQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MDA7YToyOntzOjY6ImZhbWlseSI7czoyMjoiU2hhZG93cyBJbnRvIExpZ2h0IFR3byI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYwMTthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlNoYW50aSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYwMjthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IlNoYXJlIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo2MDM7YToyOntzOjY6ImZhbWlseSI7czoxMDoiU2hhcmUgVGVjaCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYwNDthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJTaGFyZSBUZWNoIE1vbm8iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MDU7YToyOntzOjY6ImZhbWlseSI7czo5OiJTaG9qdW1hcnUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MDY7YToyOntzOjY6ImZhbWlseSI7czoxMToiU2hvcnQgU3RhY2siO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MDc7YToyOntzOjY6ImZhbWlseSI7czo4OiJTaWVtcmVhcCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYwODthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJTaWdtYXIgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjA5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiU2lnbmlrYSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjMwMDtzOjU6IkxpZ2h0IjtpOjQwMDtzOjY6Ik5vcm1hbCI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjYxMDthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJTaWduaWthIE5lZ2F0aXZlIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NjExO2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiU2ltb25ldHRhIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7czo5OiI5MDBpdGFsaWMiO3M6MTc6IlVsdHJhIEJvbGQgSXRhbGljIjt9fWk6NjEyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiU2ludG9ueSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NjEzO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IlNpcmluIFN0ZW5jaWwiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MTQ7YToyOntzOjY6ImZhbWlseSI7czo4OiJTaXggQ2FwcyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYxNTthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlNrcmFuamkiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjYxNjthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJTbGFibyAxM3B4IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjE3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6IlNsYWJvIDI3cHgiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MTg7YToyOntzOjY6ImZhbWlseSI7czo3OiJTbGFja2V5IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjE5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiU21va3VtIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjIwO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiU215dGhlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjIxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiU25pZ2xldCI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo4MDA7czoxMDoiRXh0cmEgQm9sZCI7fX1pOjYyMjthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlNuaXBwZXQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MjM7YToyOntzOjY6ImZhbWlseSI7czoxMzoiU25vd2J1cnN0IE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYyNDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJTb2ZhZGkgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjI1O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiU29maWEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MjY7YToyOntzOjY6ImZhbWlseSI7czoxMDoiU29uc2llIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYyNzthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJTb3J0cyBNaWxsIEdvdWR5IjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7fX1pOjYyODthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJTb3VyY2UgQ29kZSBQcm8iO3M6ODoidmFyaWFudHMiO2E6Nzp7aToyMDA7czoxMToiRXh0cmEgTGlnaHQiO2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjUwMDtzOjY6Ik1lZGl1bSI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO2k6NzAwO3M6NDoiQm9sZCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjYyOTthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJTb3VyY2UgU2FucyBQcm8iO3M6ODoidmFyaWFudHMiO2E6MTI6e2k6MjAwO3M6MTE6IkV4dHJhIExpZ2h0IjtzOjk6IjIwMGl0YWxpYyI7TjtpOjMwMDtzOjU6IkxpZ2h0IjtzOjk6IjMwMGl0YWxpYyI7czoxMjoiTGlnaHQgSXRhbGljIjtpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NjAwO3M6OToiU2VtaSBCb2xkIjtzOjk6IjYwMGl0YWxpYyI7czoxNjoiU2VtaSBCb2xkIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO2k6OTAwO3M6MTA6IlVsdHJhIEJvbGQiO3M6OToiOTAwaXRhbGljIjtzOjE3OiJVbHRyYSBCb2xkIEl0YWxpYyI7fX1pOjYzMDthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJTb3VyY2UgU2VyaWYgUHJvIjtzOjg6InZhcmlhbnRzIjthOjM6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjYwMDtzOjk6IlNlbWkgQm9sZCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NjMxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IlNwZWNpYWwgRWxpdGUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2MzI7YToyOntzOjY6ImZhbWlseSI7czoxMDoiU3BpY3kgUmljZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYzMzthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlNwaW5uYWtlciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYzNDthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlNwaXJheCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjYzNTthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJTcXVhZGEgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjM2O2E6Mjp7czo2OiJmYW1pbHkiO3M6MjA6IlNyZWUgS3J1c2huYWRldmFyYXlhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjM3O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiU3RhbGVtYXRlIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjM4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTM6IlN0YWxpbmlzdCBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2Mzk7YToyOntzOjY6ImZhbWlseSI7czoxNToiU3RhcmRvcyBTdGVuY2lsIjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo2NDA7YToyOntzOjY6ImZhbWlseSI7czoyMToiU3RpbnQgVWx0cmEgQ29uZGVuc2VkIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjQxO2E6Mjp7czo2OiJmYW1pbHkiO3M6MjA6IlN0aW50IFVsdHJhIEV4cGFuZGVkIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjQyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiU3Rva2UiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2NDM7YToyOntzOjY6ImZhbWlseSI7czo2OiJTdHJhaXQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2NDQ7YToyOntzOjY6ImZhbWlseSI7czoxOToiU3VlIEVsbGVuIEZyYW5jaXNjbyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY0NTthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlN1bnNoaW5leSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY0NjthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJTdXBlcm1lcmNhZG8gT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjQ3O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiU3VyYW5uYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY0ODthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlN1cmF2YXJhbSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY0OTthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJTdXdhbm5hcGh1bSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY1MDthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJTd2Fua3kgYW5kIE1vbyBNb28iO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2NTE7YToyOntzOjY6ImZhbWlseSI7czo5OiJTeW5jb3BhdGUiO3M6ODoidmFyaWFudHMiO2E6Mjp7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjY1MjthOjI6e3M6NjoiZmFtaWx5IjtzOjk6IlRhbmdlcmluZSI7czo4OiJ2YXJpYW50cyI7YToyOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NjUzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiVGFwcm9tIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjU0O2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiVGF1cmkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2NTU7YToyOntzOjY6ImZhbWlseSI7czo0OiJUZWtvIjtzOjg6InZhcmlhbnRzIjthOjU6e2k6MzAwO3M6NToiTGlnaHQiO2k6NDAwO3M6NjoiTm9ybWFsIjtpOjUwMDtzOjY6Ik1lZGl1bSI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjY1NjthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IlRlbGV4IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjU3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTg6IlRlbmFsaSBSYW1ha3Jpc2huYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY1ODthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJUZW5vciBTYW5zIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjU5O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IlRleHQgTWUgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjYwO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTg6IlRoZSBHaXJsIE5leHQgRG9vciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY2MTthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlRpZW5uZSI7czo4OiJ2YXJpYW50cyI7YTozOntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo3MDA7czo0OiJCb2xkIjtpOjkwMDtzOjEwOiJVbHRyYSBCb2xkIjt9fWk6NjYyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiVGltbWFuYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY2MzthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IlRpbm9zIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo2NjQ7YToyOntzOjY6ImZhbWlseSI7czo5OiJUaXRhbiBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2NjU7YToyOntzOjY6ImZhbWlseSI7czoxMzoiVGl0aWxsaXVtIFdlYiI7czo4OiJ2YXJpYW50cyI7YToxMTp7aToyMDA7czoxMToiRXh0cmEgTGlnaHQiO3M6OToiMjAwaXRhbGljIjtOO2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo2MDA7czo5OiJTZW1pIEJvbGQiO3M6OToiNjAwaXRhbGljIjtzOjE2OiJTZW1pIEJvbGQgSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjY2NjthOjI6e3M6NjoiZmFtaWx5IjtzOjExOiJUcmFkZSBXaW5kcyI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY2NzthOjI6e3M6NjoiZmFtaWx5IjtzOjc6IlRyb2NjaGkiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2Njg7YToyOntzOjY6ImZhbWlseSI7czo3OiJUcm9jaHV0IjtzOjg6InZhcmlhbnRzIjthOjM6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjt9fWk6NjY5O2E6Mjp7czo2OiJmYW1pbHkiO3M6NzoiVHJ5a2tlciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY3MDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJUdWxwZW4gT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjcxO2E6Mjp7czo2OiJmYW1pbHkiO3M6NjoiVWJ1bnR1IjtzOjg6InZhcmlhbnRzIjthOjg6e2k6MzAwO3M6NToiTGlnaHQiO3M6OToiMzAwaXRhbGljIjtzOjEyOiJMaWdodCBJdGFsaWMiO2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo1MDA7czo2OiJNZWRpdW0iO3M6OToiNTAwaXRhbGljIjtzOjEzOiJNZWRpdW0gSXRhbGljIjtpOjcwMDtzOjQ6IkJvbGQiO3M6OToiNzAwaXRhbGljIjtzOjExOiJCb2xkIEl0YWxpYyI7fX1pOjY3MjthOjI6e3M6NjoiZmFtaWx5IjtzOjE2OiJVYnVudHUgQ29uZGVuc2VkIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjczO2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IlVidW50dSBNb25vIjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo2NzQ7YToyOntzOjY6ImZhbWlseSI7czo1OiJVbHRyYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY3NTthOjI6e3M6NjoiZmFtaWx5IjtzOjE0OiJVbmNpYWwgQW50aXF1YSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY3NjthOjI6e3M6NjoiZmFtaWx5IjtzOjg6IlVuZGVyZG9nIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Njc3O2E6Mjp7czo2OiJmYW1pbHkiO3M6OToiVW5pY2EgT25lIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Njc4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTQ6IlVuaWZyYWt0dXJDb29rIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NzAwO3M6NDoiQm9sZCI7fX1pOjY3OTthOjI6e3M6NjoiZmFtaWx5IjtzOjE4OiJVbmlmcmFrdHVyTWFndW50aWEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2ODA7YToyOntzOjY6ImZhbWlseSI7czo3OiJVbmtlbXB0IjtzOjg6InZhcmlhbnRzIjthOjI6e2k6NDAwO3M6NjoiTm9ybWFsIjtpOjcwMDtzOjQ6IkJvbGQiO319aTo2ODE7YToyOntzOjY6ImZhbWlseSI7czo2OiJVbmxvY2siO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2ODI7YToyOntzOjY6ImZhbWlseSI7czo0OiJVbm5hIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjgzO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiVlQzMjMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2ODQ7YToyOntzOjY6ImZhbWlseSI7czoxMToiVmFtcGlybyBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2ODU7YToyOntzOjY6ImZhbWlseSI7czo2OiJWYXJlbGEiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2ODY7YToyOntzOjY6ImZhbWlseSI7czoxMjoiVmFyZWxhIFJvdW5kIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Njg3O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTE6IlZhc3QgU2hhZG93IjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6Njg4O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTI6IlZlc3BlciBMaWJyZSI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7aTo1MDA7czo2OiJNZWRpdW0iO2k6NzAwO3M6NDoiQm9sZCI7aTo5MDA7czoxMDoiVWx0cmEgQm9sZCI7fX1pOjY4OTthOjI6e3M6NjoiZmFtaWx5IjtzOjU6IlZpYnVyIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjkwO2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiVmlkYWxva2EiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2OTE7YToyOntzOjY6ImZhbWlseSI7czo0OiJWaWdhIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NjkyO2E6Mjp7czo2OiJmYW1pbHkiO3M6NToiVm9jZXMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2OTM7YToyOntzOjY6ImZhbWlseSI7czo3OiJWb2xraG92IjtzOjg6InZhcmlhbnRzIjthOjQ6e2k6NDAwO3M6NjoiTm9ybWFsIjtzOjk6IjQwMGl0YWxpYyI7czoxMzoiTm9ybWFsIEl0YWxpYyI7aTo3MDA7czo0OiJCb2xkIjtzOjk6IjcwMGl0YWxpYyI7czoxMToiQm9sZCBJdGFsaWMiO319aTo2OTQ7YToyOntzOjY6ImZhbWlseSI7czo4OiJWb2xsa29ybiI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjQwMDtzOjY6Ik5vcm1hbCI7czo5OiI0MDBpdGFsaWMiO3M6MTM6Ik5vcm1hbCBJdGFsaWMiO2k6NzAwO3M6NDoiQm9sZCI7czo5OiI3MDBpdGFsaWMiO3M6MTE6IkJvbGQgSXRhbGljIjt9fWk6Njk1O2E6Mjp7czo2OiJmYW1pbHkiO3M6ODoiVm9sdGFpcmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2OTY7YToyOntzOjY6ImZhbWlseSI7czoyMzoiV2FpdGluZyBmb3IgdGhlIFN1bnJpc2UiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2OTc7YToyOntzOjY6ImZhbWlseSI7czo4OiJXYWxscG9ldCI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjY5ODthOjI6e3M6NjoiZmFtaWx5IjtzOjE1OiJXYWx0ZXIgVHVybmNvYXQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo2OTk7YToyOntzOjY6ImZhbWlseSI7czo2OiJXYXJuZXMiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3MDA7YToyOntzOjY6ImZhbWlseSI7czo5OiJXZWxsZmxlZXQiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3MDE7YToyOntzOjY6ImZhbWlseSI7czo5OiJXZW5keSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3MDI7YToyOntzOjY6ImZhbWlseSI7czo4OiJXaXJlIE9uZSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjcwMzthOjI6e3M6NjoiZmFtaWx5IjtzOjE3OiJZYW5vbmUgS2FmZmVlc2F0eiI7czo4OiJ2YXJpYW50cyI7YTo0OntpOjIwMDtzOjExOiJFeHRyYSBMaWdodCI7aTozMDA7czo1OiJMaWdodCI7aTo0MDA7czo2OiJOb3JtYWwiO2k6NzAwO3M6NDoiQm9sZCI7fX1pOjcwNDthOjI6e3M6NjoiZmFtaWx5IjtzOjEwOiJZZWxsb3d0YWlsIjtzOjg6InZhcmlhbnRzIjthOjE6e2k6NDAwO3M6NjoiTm9ybWFsIjt9fWk6NzA1O2E6Mjp7czo2OiJmYW1pbHkiO3M6MTA6Illlc2V2YSBPbmUiO3M6ODoidmFyaWFudHMiO2E6MTp7aTo0MDA7czo2OiJOb3JtYWwiO319aTo3MDY7YToyOntzOjY6ImZhbWlseSI7czoxMDoiWWVzdGVyeWVhciI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX1pOjcwNzthOjI6e3M6NjoiZmFtaWx5IjtzOjY6IlpleWFkYSI7czo4OiJ2YXJpYW50cyI7YToxOntpOjQwMDtzOjY6Ik5vcm1hbCI7fX19';
  	$font_decoded = base64_decode($font_encoded);
  	$font_array = unserialize($font_decoded);
  	$eightmedi_pro_google_font = get_option('eightmedi_pro_google_font','');
  	if (empty($eightmedi_pro_google_font)) {
  		update_option('eightmedi_pro_google_font', $font_array);
  	}
  	$ap_fonts = array();
  	foreach ($eightmedi_pro_google_font as $key => $value) {
  		$ap_fonts[$value['family']] =  $value['family'] ;
  	}
  	return $ap_fonts;
  }
  /**
   * Returns the available font weights.
   *
   * @since  1.0.0
   * @access public
   * @return array
   */
  public function get_font_weight_choices() {
  	if($this->settings['family']->id){
  		$eightmedi_pro_font_list = get_option( 'eightmedi_pro_google_font','');

  		$font_family_id = $this->settings['family']->id;        
  		$default_font_family = $this->settings['family']->default;
  		$get_font_family = get_theme_mod( $font_family_id, $default_font_family );

  		$font_array = eightmedi_pro_search_key( $eightmedi_pro_font_list, 'family', $get_font_family );

  		$variants_array = $font_array['0']['variants'] ;
  		$options_array = "";
  		foreach ($variants_array  as $key => $variants ) {
  			$options_array[$key] = $variants;
  		}
  		return $options_array;
  	}else{
  		return array(
  			'400' => esc_html__( 'Normal',     'eightmedi-pro' ),
  			'700' => esc_html__( 'Bold',       'eightmedi-pro' ),
  			);
  	}
  }
  /**
   * Returns the available font text decoration.
   *
   * @since  1.0.0
   * @access public
   * @return array
   */
  public function get_text_decoration_choices() {
  	return array(
  		'none'  => esc_html__( 'None', 'eightmedi-pro' ),
  		'underline'  => esc_html__( 'Underline', 'eightmedi-pro' ),
  		'line-through' => esc_html__( 'Line-through', 'eightmedi-pro' ),
  		'overline' => esc_html__( 'Overline', 'eightmedi-pro' )
  		);
  }

  /**
   * Returns the available font text transform.
   *
   * @since  1.0.0
   * @access public
   * @return array
   */
  public function get_text_transform_choices() {
  	return array(
  		'none'  => esc_html__( 'None', 'eightmedi-pro' ),
  		'uppercase'  => esc_html__( 'Uppercase', 'eightmedi-pro' ),
  		'lowercase' => esc_html__( 'Lowercase', 'eightmedi-pro' ),
  		'capitalize' => esc_html__( 'Capitalize', 'eightmedi-pro' )
  		);
  } 
}

endif;