<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('inc/header', $data);
		$this->load->view('inc/nav', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('inc/footer', $data);
	}
}
