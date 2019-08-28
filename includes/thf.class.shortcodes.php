<?php

/*
 * Themesfa CCaptcha_PS: Handle Shortcodes
 */

class THF_CCAPTCHA_PS_Shortcodes {

	/**
	 * Returns an instance of this class.
	 */
	public static function init() {
		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self();
		}

		return $instance;
	}

	/**
	 * Init
	 */
	private function __construct() {
		add_shortcode( 'THF_CCAPTCHA_PS', [ $this, 'THF_CCAPTCHA_PS_Func' ] );
	}

	# [THF_CCAPTCHA_PS]
	public function THF_CCAPTCHA_PS_Func( $attrs ) {
		thf_ccaptcha_ps()->CORE->get_captcha_html();
	}


} 
