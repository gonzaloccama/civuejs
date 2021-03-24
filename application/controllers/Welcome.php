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
		$data['v3'] = 1;
		$data['_script_'] = 'script';
		$data['_section_'] = 'welcome_message';
		$this->load->view('_layout_', $data);
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

	public function count_app()
	{
		$data['v3'] = 0;
		$data['_script_'] = 'vue/app/script';
		$data['_section_'] = 'vue/app/index';
		$this->load->view('_layout_', $data);
	}
}
