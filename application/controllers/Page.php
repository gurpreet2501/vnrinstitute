<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Page extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index($view_name)
	{
		$this->load->view('page/'.$view_name);
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */