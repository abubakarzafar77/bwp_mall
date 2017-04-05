<?php 

class InsertProduct extends MY_Controller
{
	public function index(){
		$this->load->helper('form');
		$this->load->view('adminViews/insert_prodect');
	}

	public function insertData(){
		echo 'hello insertion';
	}
}