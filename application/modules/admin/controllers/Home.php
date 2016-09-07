<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('level_user') != 'admin')
		{
			redirect('auth/users');
		}
	}

	public function index()
	{
		$this->template->admin('index');	
	}

}

/* End of file Home.php */
/* Location: ./application/modules/admin/controllers/Home.php */