<?php
class Cpagegallery extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_galery');
        $this->load->model('model_conter');
$this->load->model('model_visit');
        $this->load->helper('text');
        $this->load->model('model_gambar');
        if ($this->session->userdata('EN') != TRUE) {
            $data = array('EN' => "en");
            $this->session->set_userdata($data);
        }
    }

    function index() {

        $ip = $_SERVER['REMOTE_ADDR'];
        $masuk = TRUE;
        $msk = TRUE;
$mskC = TRUE;
        $today = date('Y-m-d');

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
                    'visit'=>'gallery'

            );
            $this->model_visit->add($visit);
        $data['title']="gallery";
        $bhs = $this->session->userdata('EN');
        $data['pengunjung'] = $this->model_conter->counAll();
        $data['galeri']=$this->model_galery->getBahasa($bhs);
        $data['gambar']=$this->model_gambar->getGmb();
        $this->load->view('user/vheader',$data);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vgallery');
        $this->load->view('user/vfooter');
    }

    function ubahBhs() {
        $data = array('EN' => $this->uri->segment(4));
        $this->session->set_userdata($data);
        $this->session->userdata('EN');
        redirect('user/cpagegallery/');
    }

    function more(){

        $id = $this->uri->segment(4);
if($id == "cpagegallery"){
$bh = $this->uri->segment(6);
redirect('user/cpagegallery/ubahBhs/'.$this->uri->segment(6));
}
        $data['title']="gallery";
        $this->load->view('user/vheader',$data);
        $bhs = $this->session->userdata('EN');
         $data['gambar']=$this->model_gambar->getGmb();
        $data['berit']=$this->model_galery->getById($id);
        $data['pengunjung'] = $this->model_conter->counAll();
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vreadmoreG',$data);
        $this->load->view('user/vfooter');
    }
    
}
?>