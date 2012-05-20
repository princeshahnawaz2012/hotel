<?php
class Cpagenews extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('model_conter');
        $this->load->model('model_berita');
$this->load->model('model_visit');
        $this->load->model('model_gambar');
        if ($this->session->userdata('EN') != TRUE) {
            $data = array('EN' => "en");
            $this->session->set_userdata($data);
        }
    }
    function index(){

include 'geoip.inc';
        $gi = geoip_open('resources/GeoIP.dat', GEOIP_STANDARD);
        $country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);
        //$this->data['country_code'] = $country_code;
        $country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);
        //$this->data['country_name'] = $country_name;
        
        // close the database
        geoip_close($gi);
        
         $visit = array(
                    'id' => NULL,
                    'negara' => $country_name,
                    'visit'=>'news'

            );
            $this->model_visit->add($visit);
        $data['title']="news";
        $this->load->view('user/vheader',$data);
        $bhs = $this->session->userdata('EN');
        $data['berit']=$this->model_berita->getBahasa($bhs);
        $data['pengunjung'] = $this->model_conter->counAll();
        $data['gambar']=$this->model_gambar->getGmb();
        $data['news'] = $this->model_berita->getSlideNews($bhs);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vnews',$data);
        $this->load->view('user/vfooter');
    }
    function ubahBhs() {
        $data = array('EN' => $this->uri->segment(4));
        $this->session->set_userdata($data);
        $this->session->userdata('EN');
        redirect('user/cpagenews/');
    }

    function readM(){
    
include 'geoip.inc';
        $gi = geoip_open('resources/GeoIP.dat', GEOIP_STANDARD);
        $country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);
        //$this->data['country_code'] = $country_code;
        $country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);
        //$this->data['country_name'] = $country_name;
        
        // close the database
        geoip_close($gi);
        
         $visit = array(
                    'id' => NULL,
                    'negara' => $country_name,
                    'visit'=>'news'

            );
            $this->model_visit->add($visit);
            
        $id = $this->uri->segment(4);

if($id == "cpagenews"){
$bh = $this->uri->segment(6);
redirect('user/cpagenews/ubahBhs/'.$this->uri->segment(6));
}
        $data['title']="news";
        $this->load->view('user/vheader',$data);
        $bhs = $this->session->userdata('EN');
         $data['gambar']=$this->model_gambar->getGmb();
        $data['berit']=$this->model_berita->getByMore($id);
        $data['pengunjung'] = $this->model_conter->counAll();
        $data['news'] = $this->model_berita->getSlideNews($bhs);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vreadmore',$data);
        $this->load->view('user/vfooter');
    }
}
?>