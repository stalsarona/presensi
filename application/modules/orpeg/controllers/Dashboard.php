<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        
        // $this->load->model('M_monitoring');
        
    }
    
    public function index()
    {
        // $data['private_token'] = $this->private_token();
        
        // if(count($data1) > 0 ){
        //     $data['data'] = $data1;          
        // } else {
        //     $data['data'] = $this->info_covid_mysql();         
        // }
        if ($this->session->userdata('status_log') != TRUE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Silahkan masuk dahulu !</div>');
					redirect('login');
		}
        $this->load->view('V_dashboard');
        $this->load->view('V_content1');
        
    }

    public function view_jadwal(){
        if ($this->session->userdata('status_log') != TRUE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Silahkan masuk dahulu !</div>');
					redirect('login');
        }
        
        $data['data'] = $this->get_jadwal();
        $data['username'] = $this->session->userdata('username');
        $data['nip'] = $this->session->userdata('niplama');
        $data['token'] = $this->private_token();
        $this->load->view('V_dashboard');
        $this->load->view('V_jadwal',$data);
    }

    public function get_jadwal_by_id(){
        $id = $this->input->post('id');

		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wspresensi/rstugu/MonPresensi/get_jadwal_by_id/";

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
			"X-id: ".$id
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

    public function private_token(){
		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wspresensi/rstugu/MonPresensi/private_token/";
        $data = json_decode($this->get_cors($url), TRUE);
       
		return $data;
    }

    public function simpan_jadwal(){
        $jmasuk   = $this->input->post('jammasuk');
        $mmasuk   = $this->input->post('menitmasuk');
        $jpulang  = $this->input->post('jampulang');
        $mpulang  = $this->input->post('menitpulang');
        $masuk    = ($jmasuk*60)+$mmasuk;
        $pulang   = ($jpulang*60)+$mpulang;
        $durasi   = $pulang-$masuk;
		$obj = array(
            'JNS_SHIFT'   => urlencode($this->input->post('idwktkerja')),
            'KET_SHIFT'   => urlencode($this->input->post('ketwktkerja')),
            'JAM_MASUK'   => $jmasuk,
            'MENIT_MASUK' => $mmasuk,
            'JAM_PULANG'  => $jpulang,
            'MENIT_PULANG'=> $mpulang,
            'DURASI'      => $durasi,
            'USER_INPUT'  => urlencode($this->session->userdata('username')),
            'JAM_INPUT'   => date("Y-m-d H:i:s"),
            'KOMP_INPUT'  => gethostbyaddr($_SERVER['REMOTE_ADDR']),
            'private_key' => $this->input->post('private_token')
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.rstugurejo.jatengprov.go.id:8000/wspresensi/rstugu/MonPresensi/simpan_jadwal/",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $obj,
          
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
    }
    
    public function error(){
        $this->load->view('V_dashboard');
        $this->load->view('V_content1');
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
    
    public function get_jadwal()
	{
		
		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wspresensi/rstugu/MonPresensi/get_jadwal";
        $data = json_decode($this->get_cors($url), TRUE);
        
		return $data;
	}
    
    public function test()
	{
		$newdata = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
        );
        
        $this->session->set_userdata($newdata);
		//echo $this->session->userdata('username');
    }
    
}

/* End of file Dashboard.php */