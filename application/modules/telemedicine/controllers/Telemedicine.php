<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telemedicine extends CI_Controller {

	public function index()
	{
		$this->load->view('V_daftar');

	}

	public function poli()
	{
		$this->load->view('V_telemedicine');

	}

}
