<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	var $SYS_siteName 			= '';
	var $SYS_metaTitle 			= '';
	var $SYS_metaDescription 	= '';
	var $SYS_metaKeywords 		= array();
	var $SYS_js					= array();
	var $SYS_css 				= array();
	var $SYS_index 				= true; // visible por los robots
	var $SYS_gaAccount 			= ''; // Google Analytics Account. example: UA-XXXXXXXX-X
	var $SYS_timezone			= "America/Mexico_City";

	public function __construct(){
		parent::__construct();
		date_default_timezone_set($this->SYS_timezone);
		$this->lang = $this->config->item('language');
		$this->charset = $this->config->item('charset');
		// Facebook Open Grap
		$this->og_prefix = array('og: http://ogp.me/ns#','fb: http://ogp.me/ns/fb#');
		$this->og['og:site_name']	= $this->SYS_siteName;
		$this->og['og:title']		= $this->SYS_metaTitle;
		$this->og['og:description']	= $this->SYS_metaDescription;
		$this->og['og:image']		= '';
		$this->og['og:type']		= 'website';
		$this->og['og:url']			= site_url($_SERVER['REQUEST_URI']);
		$this->og['fb:app_id']		= '';
		$this->og['fb:admins']		= array(); // array of facebook id admins
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */