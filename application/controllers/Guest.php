<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_read'); //adalah untuk meload semua methode function yg ada di dalam model read
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}