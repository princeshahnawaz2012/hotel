<?php
class Cpagewelcome extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('model_gambar');
$this->load->model('model_visit');
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
                    'visit'=>'welcome'

            );
            $this->model_visit->add($visit);
        $data['gambar'] = $this->model_gambar->getAll();
        $this->load->view('user/frontend/page/vwelcome',$data);
    }

     function ubahBhs() {
        $data = array('EN' => $this->uri->segment(4));
        $this->session->set_userdata($data);
        $this->session->userdata('EN');
        redirect('user/cpagehome/');
    }
}
?>