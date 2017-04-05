<?php 

class Dashboard extends MY_Controller
{
	public function index(){
		$this->load->view('adminViews/dashboard');
	}



	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin_id'))
		{
			return redirect('admin/login');
		}
	}
}