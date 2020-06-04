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

		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu_dev/rstugu/telemedicine/get_pasien/";

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"X-nopas: ".$id
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		//echo $response;
		//echo $id;
        $data = json_decode($response, TRUE);
        //untuk scraping json harus di decode baru di looping dahulu
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function poli()
	{
		$this->load->view('V_telemedicine');

	}

	

}
