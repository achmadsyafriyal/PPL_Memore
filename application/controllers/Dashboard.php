<?php
class dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); //you can autoload this functions by configuring autoload.php in config directory  
		$this->load->library('session');
		$this->load->model('data_model');
	}

	function index()
	{
		$this->cek_admin();
		$data['title'] = 'Halaman Dasboard Administrator';
		// if ($this->session->level == 'admin') {
		// 	$this->template->load('template', 'view_home', $data);
		// } else {
		$data['users'] = $this->data_model->view_where('users', array('username' => $this->session->username))->row_array();
		// $data['modul'] = $this->Model_app->view_join_one('users', 'users_modul', 'id_session', 'id_umod', 'DESC');
		// $this->template->load('administrator/template', 'administrator/view_home', $data);
		// }

		$this->load->view('dashboard_view', $data);
	}

	function cek_admin()
	{
		// if (!$this->session->userdata('level')) {
		// 	redirect('login/check_login');
		// }
	}
}
