<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	var $SYS_author 		= 'Harry';
	var $SYS_title 			= 'Mi título';
	var $SYS_description 	= 'Una corta descripción!!!';
	var $SYS_keywords 		= array();
	var $SYS_js				= array();
	var $SYS_css 			= array();
	var $SYS_analytics_id 	= null;
	var $SYS_timezone		= "America/Mexico_City";

	public function __construct(){
		parent::__construct();
		date_default_timezone_set($this->SYS_timezone);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */