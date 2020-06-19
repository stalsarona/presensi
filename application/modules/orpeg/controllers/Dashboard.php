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
        // $data1 = $this->get_total_data();
        
        // if(count($data1) > 0 ){
        //     $data['data'] = $data1;          
        // } else {
        //     $data['data'] = $this->info_covid_mysql();         
        // }

        $this->load->view('V_dashboard');
        $this->load->view('V_content1');
        $this->load->view('V_footer');
        
    }

    public function view_jadwal(){
        $data['username'] = $this->session->userdata('username');
        $data['nip'] = $this->session->userdata('niplama');
        $this->load->view('V_dashboard');
        $this->load->view('V_jadwal',$data);
        $this->load->view('V_footer');
    }

    public function pendataan()
    {
        if ($this->session->userdata('status_log') != TRUE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Silahkan masuk dahulu !</div>');
					redirect('signin');
		}
        $data['token'] = $this->private_token();
        //$data['total'] = $this->get_total_data();
        $this->load->view('V_pendataan', $data);       
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
    
    public function private_token()
	{
		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/private_token/";
        $data = json_decode($this->get_cors($url), TRUE);
       
		return $data;
    }

    public function get_total_data()
	{
		
		$url = "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/get_data_terakhir";
        $data = json_decode($this->get_cors($url), TRUE);
        
        //print_r($data['status']['ID']);
		return $data;
	}
    
    public function simpan_total()
    {
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $obj = array(
            'JNS_SHIFT' => urlencode($this->input->post('jenis')),
            'KET_SHIFT' => urlencode($this->input->post('ket')),
            'JAM_MASUK' => urlencode($this->input->post('jammasuk')),
            'JAM_PULANG' => urlencode($this->input->post('jampulang')),
            'USER_INPUT' => urlencode($this->input->post('cov_ank_dirawat')),
            'COV_ANK_MNG' => urlencode($this->input->post('cov_ank_meninggal')),
            'COV_ANK_ISO' => urlencode($this->input->post('cov_ank_iso')),
            'PDP_DWS_SMB' => urlencode($this->input->post('pdp_dws_sembuh')),
            'PDP_DWS_RWT' => urlencode($this->input->post('pdp_dws_dirawat')),
            'PDP_DWS_MNG' => urlencode($this->input->post('pdp_dws_meninggal')),
            'PDP_ANK_SMB' => urlencode($this->input->post('pdp_ank_sembuh')),
            'PDP_ANK_RWT' => urlencode($this->input->post('pdp_ank_dirawat')),
            'PDP_ANK_MNG' => urlencode($this->input->post('pdp_ank_meninggal')),
            'ODP_DWS_SMB' => urlencode($this->input->post('odp_dws_sembuh')),
            'ODP_DWS_RWT' => urlencode($this->input->post('odp_dws_dirawat')),
            'ODP_DWS_MNG' => urlencode($this->input->post('odp_dws_meninggal')),
            'ODP_ANK_SMB' => urlencode($this->input->post('odp_ank_sembuh')),
            'ODP_ANK_RWT' => urlencode($this->input->post('odp_ank_dirawat')),
            'ODP_ANK_MNG' => urlencode($this->input->post('odp_ank_meninggal')),
            'USER_INPUT' => urlencode($this->session->userdata('username')),
            'private_key' => $this->input->post('private_token')
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.rstugurejo.jatengprov.go.id:8000/wsrstugu/rstugu/covid/simpan_total",
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
    
    public function info_covid_mysql()
    {
       $data = $this->M_covid->info_covid_mysql();
       foreach($data as $key){}
       if(count($data) > 0){
            $response = array('status' => $key,
                            'message' => 'success',
                            'code' => 200
            );	
        } else {
            $response = array('status' => false,
                            'message' => 'failed',
                            'code' => 403
            );	
        }
       
        return $response;
       
    }


}

/* End of file Covid_informasi.php */
