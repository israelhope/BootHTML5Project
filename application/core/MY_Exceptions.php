<?php if (! defined('BASEPATH')) exit('No direct script access');

class MY_Exceptions extends CI_Exceptions{

	function __construct(){
		parent::__construct();
	}

	/**
	 * 404 Page Not Found Handler
	 *
	 * @access	private
	 * @param	string
	 * @return	string
	 */
	function show_404($page = '', $log_error = TRUE)
	{
		$heading = "404 Page Not Found";
		$message = "The page you requested was not found.";

		// By default we log this, but allow a dev to skip it
		if ($log_error)
		{
			global $data;
			log_message('error', '404 Page Not Found --> '.$_SERVER['REQUEST_URI'].' '.$_SERVER['REMOTE_ADDR']);
		}

		echo $this->show_error($heading, $message, 'error_404', 404);
		exit;
	}
}