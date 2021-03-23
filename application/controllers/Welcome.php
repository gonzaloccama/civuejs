<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->model('welcome_model', 'welcome');

		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function res_data()
	{

		$dt = array(
			'keyword' => trim($this->input->post('search')),//
		);

		$persons = $this->welcome->getRow('persona', $dt);

//		echo json_encode($dt);

		echo json_encode($persons);
	}
}
