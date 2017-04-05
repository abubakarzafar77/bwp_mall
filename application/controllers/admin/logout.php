<?php 

class Logout extends MY_Controller
{
	public function index()
	{
		$this->session->unset_userdata('admin_id');
		return redirect('admin/login');
	}
}