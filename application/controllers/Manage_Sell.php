<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_Sell extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Kelola Penjualan';
		$this->load->view('inc/header', $data);
		$this->load->view('inc/nav', $data);
		$this->load->view('manage_sell', $data);
		$this->load->view('inc/footer', $data);
	}
}
