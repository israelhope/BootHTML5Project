<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	var $SYS_siteName 			= '';
	var $SYS_metaTitle 			= '';
	var $SYS_metaDescription 	= '';
	var $SYS_metaKeywords 		= array();
	var $SYS_js					= array();
	var $SYS_css 				= array();
	var $SYS_index 				= true; // visible por los robots
	var $SYS_gaAccount 			= null; // Google Analytics Account. example: UA-XXXXXXXX-X
	var $SYS_timezone			= "America/Mexico_City";

	public function __construct(){
		parent::__construct();
		date_default_timezone_set($this->SYS_timezone);
		$this->lang = $this->config->item('language');
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */