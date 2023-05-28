<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_create'); //adalah untuk meload semua methode function yg ada di dalam model create
		$this->load->model('m_read'); //adalah untuk meload semua methode function yg ada di dalam model read
		$this->load->model('m_edit'); //adalah untuk meload semua methode function yg ada di dalam model edit
		$this->load->model('m_delete'); //adalah untuk meload semua methode function yg ada di dalam model delete

		//keperluan upload file
		$this->load->library('upload');

		//keperluan menggunakan form dan url
		$this->load->helper(array('form', 'url'));
	}
}