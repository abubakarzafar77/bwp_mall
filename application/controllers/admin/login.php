<?php 


class Login extends MY_Controller
{
	public function index()
	{
		$this->load->view('admin/admin_login');
	}
}