<?php
class dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title']   = "This Is Title";
		$data['content'] = "This Is The Contents";
		$this->load->view('dashboard_view', $data);
	}
}
