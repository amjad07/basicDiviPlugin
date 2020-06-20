<?php

class GARY_HelloWorld extends ET_Builder_Module {

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
			'content' => array(
				'label'           => esc_html__( 'Content', 'gary-time-schedule' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'gary-time-schedule' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new GARY_HelloWorld;
