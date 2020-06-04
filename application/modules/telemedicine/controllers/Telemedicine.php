<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telemedicine extends CI_Controller {
 
	public function index()
	{
		$this->load->view('V_daftar');

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
	
	public function get_cors($url, $header)
	{
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
		CURLOPT_HTTPHEADER => $header,
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
	}

	public function get_poli(){
		$url = 'http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu_dev/rstugu/telemedicine/get_poli';
		$header = array(             
				"X-token: 0+i7PtVybDWFUEAPTpoUcWiAn5fjxcqDrRFFn/K2n78="	
			);
		$data = $this->get_cors($url, $header);
		$key = json_decode($data, TRUE);
		$hasil = array();
		$nomor = 0;
		foreach($key as $key){
			$nomor++;
			$hasil[] = array('nomor' => $nomor,
							 'kodebagian' => $key['KODEBAGIAN'],
							 'namabagian' => $key['NAMABAGIAN'],
							 'action' => '<div class="icon-btn"><button class="btn btn-primary btn-outline-primary" id="btn-paru" data-kodebagian="'.$key['KODEBAGIAN'].'">
							 			  <i class="icofont icofont-check-circled"></i></button></div>'
			);
		}
		$result = array('aaData' => $hasil);
		$this->output->set_content_type('application/json')->set_output(json_encode($result));	
	}

	public function get_poli_detail($kodebagian)
	{
		$url = 'http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu_dev/rstugu/telemedicine/get_poli_detail';
		$header = array(             
				"X-kodebagian:".$kodebagian	
			);
		$data = $this->get_cors($url, $header);
		$key = json_decode($data, TRUE);
		$hasil = array();
		$nomor = 0;
		foreach($key as $key){
			$nomor++;
			$hasil[] = array('nomor' => $nomor,
							 'kodebagian' => $key['KODEBAGIAN'],
							 'namabagian' => $key['NAMABAGIAN'],
							 'kodedokter' => $key['KODEDOKTER'],
							 'namadokter' => $key['NAMADOKTER'],
							 'action' => '<a class="btn btn-sm btn-primary" id="btn-paru"
							 			href="'.base_url().'?poli='.urlencode($key['NAMABAGIAN']).'&dokter='.urlencode($key['NAMADOKTER']).'"
								 >Daftar</a>'
			);
		}
		$result = array('aaData' => $hasil);
		$this->output->set_content_type('application/json')->set_output(json_encode($result));	
	}

}
