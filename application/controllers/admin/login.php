<?php 


class Login extends MY_Controller
{
	public function index()
	{
		if($this->session->userdata('admin_id')){
			return redirect('admin/dashboard');
		}
		$this->load->helper('form');
		$this->load->view('adminViews/admin_login');
	}
	public function admin_login()
	{
		if($this->session->userdata('admin_id')){
			return redirect('admin/dashboard');
		}

		$this->load->library('form_validation');

		if($this->form_validation->run('admin_login_rules')== FALSE)
		{
			$this->load->view('adminViews/admin_login');
		}else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = md5($password);
			
			$this->load->model('adminModels/admin_login');

			$login_data = $this->admin_login->login_valid($username , $password);

			if($login_data)
			{
				$this->session->set_userdata($login_data);

				return redirect('admin/dashboard');
			}else
			{
				$invalid_value = 'invalid <strong>Username</strong> and <strong>Passward</strong> !';
				$this->session->set_flashdata('invalid_login' , $invalid_value);
				return redirect('admin/login');
			}

		}
	}
}