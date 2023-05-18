<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Digi_Category extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Kategori Produk Digital';
		$this->load->view('inc/header', $data);
		$this->load->view('inc/nav', $data);
		$this->load->view('digi_category', $data);
		$this->load->view('inc/footer', $data);
	}
}
