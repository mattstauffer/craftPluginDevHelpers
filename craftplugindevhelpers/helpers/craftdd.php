<?php
if ( ! function_exists('craftdd')) {
	/**
	 * Dump the passed variable and end the script
	 *
	 * @param $target mixed
	 * @return void
	 */
	function craftdd($target) {
		\CVarDumper::dump($target, 10, true);

		die;
	}
}