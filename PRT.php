<?php

/**
 * Class PRT
 * PHP_Rendering_Templates Class to display template on calling file
 */

class PRT {

	protected static $file_path;

	public function __construct() {

        global $file_path;

        $this->file_path = $file_path;

    }

	/**
	 * Find and rendering a template with variables of PHP file
	 *
	 * @param $file_path
	 * @param $variables
	 *
	 * @return string
	 */
	public static function render( $file_path, $variables = array() ){

		if ( $file_path ){

			$output = $this->render_template( $file_path, $variables );

		}

		return $output;

	}

	/**
	 * Execute the template by extracting the variables into scope, and including the template file.
	 *
	 * @internal param $file_path
	 * @internal param $variables
	 *
	 * @return string
	 */
	public function render_template(){

		ob_start();

		extract( func_get_args()[1] );

		include func_get_args()[0];

		return ob_get_clean();

	}

}
