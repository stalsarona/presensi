<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telemedicine extends CI_Controller {

	public function index()
	{
		$this->load->view('V_daftar');

	}

	public function get_cors($url)
    {
      
        $ch0 	 = curl_init();
                curl_setopt($ch0, CURLOPT_URL, $url);
                curl_setopt ($ch0, CURLOPT_RETURNTRANSFER, 1);
        $exec0 	 = curl_exec ($ch0);
        curl_close ($ch0); 
        return $exec0;
	}

	public function get_pasien()
    {
		$id = $this->input->post('nopas');
		//$get_pass = $this->get_log();
        $url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu_dev/rstugu/telemedicine/get_pasien/".$id."";
        $data = json_decode($this->get_cors($url), TRUE);
        //$data = $this->get_cors($url);
        //untuk scraping json harus di decode baru di looping dahulu
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function poli()
	{
		$this->load->view('V_telemedicine');

	}

	

}
