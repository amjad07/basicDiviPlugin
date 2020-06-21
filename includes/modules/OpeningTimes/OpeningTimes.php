<?php

class GARY_HelloWorld extends ET_Builder_Module {

	/**
* Enqueues non-minified, hot reloaded javascript bundles.
*
* @since 3.1
*/
protected function _enqueue_debug_bundles() {
  // Frontend Bundle
  $site_url       = wp_parse_url( get_site_url() );
  $hot_bundle_url = "http://localhost:3000/static/js/frontend-bundle.js";
  wp_enqueue_script( "{$this->name}-frontend-bundle", $hot_bundle_url, $this->_bundle_dependencies['frontend'], $this->version, true );
  if ( et_core_is_fb_enabled() ) {
    // Builder Bundle
    $hot_bundle_url = "http://localhost:3000/static/js/builder-bundle.js";
    wp_enqueue_script( "{$this->name}-builder-bundle", $hot_bundle_url, $this->_bundle_dependencies['builder'], $this->version, true );
  }
}

	public $slug       = 'gary_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '#',
		'author'     => '#',
		'author_uri' => '#',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'gary-time-schedule' );
	}

	public function get_fields() {
	  return array(
	      'nemo_logo_use' => array(
	          'label'           => esc_html__( 'Use a logo?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'description'     => esc_html__( 'Turn on optional logo image', 'nemo-new-module' ),
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_logo' => array(
	          'label'           => esc_html__( 'Logo Image', 'nemo-new-module' ),
	          'type'            => 'upload',
	          'option_category' => 'basic_option',
	          'description'     => esc_html__( 'Choose an image to show as logo', 'nemo-new-module' ),
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_logo_use' => 'on',
	          ),
	      ),
	      'nemo_title' => array(
	          'label'           => esc_html__( 'Title', 'nemo-new-module' ),
	          'type'            => 'text',
	          'option_category' => 'basic_option',
	          'description'     => esc_html__( 'Include a Title for your Opening Times module.', 'nemo-new-module' ),
	          'default'         => esc_html__('Opening Times'),
	          'toggle_slug'     => 'main_content',
	      ),
	      'content' => array(
	          'label'           => esc_html__( 'Description', 'nemo-new-module' ),
	          'type'            => 'tiny_mce',
	          'option_category' => 'basic_option',
	          'description'     => esc_html__( 'Add a description for your opening times module.', 'nemo-new-module' ),
	          'toggle_slug'     => 'main_content',
	      ),
	      // -------------- MONDAY -----------------
	      'nemo_working_monday' => array(
	          'label'           => esc_html__( 'Add Monday Times?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_monday_start_hours' => array(
	          'label'           => esc_html__( 'Opening Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 9,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_monday' => 'on',
	          ),
	      ),
	      'nemo_monday_start_minutes' => array(
	          'label'           => esc_html__( 'Opening Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 15,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_monday' => 'on',
	          ),
	      ),
	      'nemo_monday_finish_hours' => array(
	          'label'           => esc_html__( 'Closing Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 17,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_monday' => 'on',
	          ),
	      ),
	      'nemo_monday_finish_minutes' => array(
	          'label'           => esc_html__( 'Closing Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 30,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_monday' => 'on',
	          ),
	      ),
	      // -------------- TUESDAY -----------------
	      'nemo_working_tuesday' => array(
	          'label'           => esc_html__( 'Add Tuesday Times?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_tuesday_start_hours' => array(
	          'label'           => esc_html__( 'Opening Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 9,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_tuesday' => 'on',
	          ),
	      ),
	      'nemo_tuesday_start_minutes' => array(
	          'label'           => esc_html__( 'Opening Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 15,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_tuesday' => 'on',
	          ),
	      ),
	      'nemo_tuesday_finish_hours' => array(
	          'label'           => esc_html__( 'Closing Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 17,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_tuesday' => 'on',
	          ),
	      ),
	      'nemo_tuesday_finish_minutes' => array(
	          'label'           => esc_html__( 'Closing Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 30,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_tuesday' => 'on',
	          ),
	      ),
	      // -------------- WEDNESDAY -----------------
	      'nemo_working_wednesday' => array(
	          'label'           => esc_html__( 'Add Wednesday Times?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_wednesday_start_hours' => array(
	          'label'           => esc_html__( 'Opening Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 9,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_wednesday' => 'on',
	          ),
	      ),
	      'nemo_wednesday_start_minutes' => array(
	          'label'           => esc_html__( 'Opening Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 15,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_wednesday' => 'on',
	          ),
	      ),
	      'nemo_wednesday_finish_hours' => array(
	          'label'           => esc_html__( 'Closing Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 17,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_wednesday' => 'on',
	          ),
	      ),
	      'nemo_wednesday_finish_minutes' => array(
	          'label'           => esc_html__( 'Closing Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 30,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_wednesday' => 'on',
	          ),
	      ),
	      // -------------- THURSDAY -----------------
	      'nemo_working_thursday' => array(
	          'label'           => esc_html__( 'Add Thursday Times?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_thursday_start_hours' => array(
	          'label'           => esc_html__( 'Opening Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 9,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_thursday' => 'on',
	          ),
	      ),
	      'nemo_thursday_start_minutes' => array(
	          'label'           => esc_html__( 'Opening Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 15,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_thursday' => 'on',
	          ),
	      ),
	      'nemo_thursday_finish_hours' => array(
	          'label'           => esc_html__( 'Closing Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 17,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_thursday' => 'on',
	          ),
	      ),
	      'nemo_thursday_finish_minutes' => array(
	          'label'           => esc_html__( 'Closing Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 30,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_thursday' => 'on',
	          ),
	      ),
	      // -------------- FRIDAY -----------------
	      'nemo_working_friday' => array(
	          'label'           => esc_html__( 'Add Friday Times?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_friday_start_hours' => array(
	          'label'           => esc_html__( 'Opening Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 9,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_friday' => 'on',
	          ),
	      ),
	      'nemo_friday_start_minutes' => array(
	          'label'           => esc_html__( 'Opening Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 15,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_friday' => 'on',
	          ),
	      ),
	      'nemo_friday_finish_hours' => array(
	          'label'           => esc_html__( 'Closing Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 17,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_friday' => 'on',
	          ),
	      ),
	      'nemo_friday_finish_minutes' => array(
	          'label'           => esc_html__( 'Closing Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 30,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_friday' => 'on',
	          ),
	      ),
	      // -------------- SATURDAY -----------------
	      'nemo_working_saturday' => array(
	          'label'           => esc_html__( 'Add Saturday Times?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_saturday_start_hours' => array(
	          'label'           => esc_html__( 'Opening Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 9,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_saturday' => 'on',
	          ),
	      ),
	      'nemo_saturday_start_minutes' => array(
	          'label'           => esc_html__( 'Opening Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 15,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_saturday' => 'on',
	          ),
	      ),
	      'nemo_saturday_finish_hours' => array(
	          'label'           => esc_html__( 'Closing Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 17,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_saturday' => 'on',
	          ),
	      ),
	      'nemo_saturday_finish_minutes' => array(
	          'label'           => esc_html__( 'Closing Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 30,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_saturday' => 'on',
	          ),
	      ),
	      // -------------- SUNDAY -----------------
	      'nemo_working_sunday' => array(
	          'label'           => esc_html__( 'Add Sunday Times?', 'nemo-new-module' ),
	          'type'            => 'yes_no_button',
	          'options'         => array(
	              'on' => esc_html__('','nemo-new-module'),
	              'off' => esc_html__('','nemo-new-module'),
	          ),
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	      ),
	      'nemo_sunday_start_hours' => array(
	          'label'           => esc_html__( 'Opening Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 9,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_sunday' => 'on',
	          ),
	      ),
	      'nemo_sunday_start_minutes' => array(
	          'label'           => esc_html__( 'Opening Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 15,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_sunday' => 'on',
	          ),
	      ),
	      'nemo_sunday_finish_hours' => array(
	          'label'           => esc_html__( 'Closing Time: Hour', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 23,
	          ),
	          'default' => 17,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_sunday' => 'on',
	          ),
	      ),
	      'nemo_sunday_finish_minutes' => array(
	          'label'           => esc_html__( 'Closing Time: Minutes', 'nemo-new-module' ),
	          'type'            => 'range',
	          'range_settings'  => array(
	              'min' => 0,
	              'max' => 59,
	          ),
	          'default' => 30,
	          'option_category' => 'basic_option',
	          'toggle_slug'     => 'main_content',
	          'show_if'         => array(
	              'nemo_working_sunday' => 'on',
	          ),
	      ),
	  );
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf(
			 '
			 <div>
     <div class="nemo_opening_times_header">
         <img class="logo %1$s" alt="logo" src="%2$s">
         <h3>%3$s</h3>
         <p>%4$s</p>
     </div>
     <div class="day">
         Monday: <span class="%5$s opening-hours">%6$s:%7$s - %8$s:%9$s</span>
      <span class="%5$s closed">CLOSED</span>
     </div>
     <div class="day">
         Tuesday: <span class="%10$s opening-hours">%11$s:%12$s - %13$s:%14$s</span>
      <span class="%10$s closed">CLOSED</span>
     </div>
     <div class="day">
         Wednesday: <span class="%15$s opening-hours">%16$s:%17$s - %18$s:%19$s</span>
      <span class="%15$s closed">CLOSED</span>
     </div>
     <div class="day">
         Thursday: <span class="%20$s opening-hours">%21$s:%22$s - %23$s:%24$s</span>
      <span class="%20$s closed">CLOSED</span>
     </div>
     <div class="day">
         Friday: <span class="%25$s opening-hours">%26$s:%27$s - %28$s:%29$s</span>
      <span class="%25$s closed">CLOSED</span>
     </div>
     <div class="day">
         Saturday: <span class="%30$s opening-hours">%31$s:%32$s - %33$s:%34$s</span>
     <span class="%30$s closed">CLOSED</span>
     </div>
     <div class="day">
         Sunday: <span class="%35$s opening-hours">%36$s:%37$s - %38$s:%39$s</span>
     <span class="%35$s closed">CLOSED</span>
     </div>
 </div>
			 '
			 ,

			 //--------------------- Heading

			 			  $this->props['nemo_logo_use'], // 1
			 				$this->props['nemo_logo'], // 2
			 				$this->props['nemo_title'], // 3
			 				$this->props['nemo_content'], // 4

			 				// ---------------------- Monday
			 				$this->props['nemo_working_monday'], // 5
			 				$this->props['nemo_monday_start_hours'], // 7 -1 => 6 and go on
			 				$this->props['nemo_monday_start_minutes'], // 8
			 				$this->props['nemo_monday_finish_hours'], // 9
			 				$this->props['nemo_monday_finish_minutes'], // 10

							// ---------------------- tuesday
							$this->props['nemo_working_tuesday'], // 5
							$this->props['nemo_tuesday_start_hours'], // 7 -1 => 6 and go on
							$this->props['nemo_tuesday_start_minutes'], // 8
							$this->props['nemo_tuesday_finish_hours'], // 9
							$this->props['nemo_tuesday_finish_minutes'], // 10

							// ---------------------- wednesday
							$this->props['nemo_working_wednesday'], // 5
							$this->props['nemo_wednesday_start_hours'], // 7 -1 => 6 and go on
							$this->props['nemo_wednesday_start_minutes'], // 8
							$this->props['nemo_wednesday_finish_hours'], // 9
							$this->props['nemo_wednesday_finish_minutes'], // 10

							// ---------------------- thursday
							$this->props['nemo_working_thursday'], // 5
							$this->props['nemo_thursday_start_hours'], // 7 -1 => 6 and go on
							$this->props['nemo_thursday_start_minutes'], // 8
							$this->props['nemo_thursday_finish_hours'], // 9
							$this->props['nemo_thursday_finish_minutes'], // 10

							// ---------------------- friday
							$this->props['nemo_working_friday'], // 5
							$this->props['nemo_friday_start_hours'], // 7 -1 => 6 and go on
							$this->props['nemo_friday_start_minutes'], // 8
							$this->props['nemo_friday_finish_hours'], // 9
							$this->props['nemo_friday_finish_minutes'], // 10

							// ---------------------- saturday
							$this->props['nemo_working_saturday'], // 5
							$this->props['nemo_saturday_start_hours'], // 7 -1 => 6 and go on
							$this->props['nemo_saturday_start_minutes'], // 8
							$this->props['nemo_saturday_finish_hours'], // 9
							$this->props['nemo_saturday_finish_minutes'], // 10

							// ---------------------- sunday
							$this->props['nemo_working_sunday'], // 5
							$this->props['nemo_sunday_start_hours'], // 7 -1 => 6 and go on
							$this->props['nemo_sunday_start_minutes'], // 8
							$this->props['nemo_sunday_finish_hours'], // 9
							$this->props['nemo_sunday_finish_minutes'], // 10


		 );
	}
}

new GARY_HelloWorld;
