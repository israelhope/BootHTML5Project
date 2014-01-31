<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	public function index()
	{
		$this->load->view('templates/template_v', $this);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */