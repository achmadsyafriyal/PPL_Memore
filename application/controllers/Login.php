<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); //you can autoload this functions by configuring autoload.php in config directory  
		$this->load->library('session');
		$this->load->model('data_model');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function check_login()
	{

		$data['username'] = htmlspecialchars($_POST['name']);
		$data['password'] = htmlspecialchars($_POST['pwd']);
		$res = $this->data_model->islogin($data);
		if ($res) {
			$this->session->set_userdata($data['username']);
			echo base_url() . index_page() . '/dashboard/';

			// $this->load->view('dashboard_view', $data);
		} else {
			echo 0;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		header('location:' . base_url() . "login/" . $this->index());
	}

	// public function view_dashboard()
	// {
	// 	$this->load->view('dashboard_view', $data);
	// }

	public function show()
	{
		echo '<h2>Detail Artikel.</h2>';
	}
}
