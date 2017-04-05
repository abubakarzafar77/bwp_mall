<?php 

class Admin_login extends CI_Model
{
	public function login_valid($username , $password)
	{
		$sql = $this->db->get_where('tbl_admin' , array('admin_email'=>$username ,'admin_password'=>$password));


		if($sql->num_rows())
		{
			$login_data['admin_id'] = $sql->row()->admin_id;
			$login_data['admin_email'] = $sql->row()->admin_email;
			$login_data['admin_name'] = $sql->row()->admin_name;
			return $login_data;
		}else
		{
			return FALSE;
		}
	}
}