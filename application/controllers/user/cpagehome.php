<?php
class Cpagehome extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_conter');
        $this->load->model('model_berita');
        $this->load->model('model_visit');
        $this->load->helper('text');
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
                    'visit'=>'home'

            );
            $this->model_visit->add($visit);
        
        
        foreach ($this->model_conter->getAll() as $r) {
            if ($ip == $r->ip && $today == $r->tanggal) {
                $masuk = FALSE;
            }
        }

        foreach ($this->model_conter->getAll2() as $r) {
            if ($today == $r->tanggal) {
                $msk = FALSE;
            }
        }

foreach ($this->model_conter->getAllC() as $r) {
            if ($country_name == $r->negara) {
                $mskC = FALSE;

            }
        }


$konter = array(
                    
'total' => $this->model_conter->counN($country_name)

            );
            $this->model_conter->edit($konter,$country_name);




        if ($msk) {
            $konter2 = array(
                    'id' => NULL,
                    'tanggal' => $today
            );
            $this->model_conter->addR($konter2);
        }

if ($mskC) {
           $ni = array(
                    'id' => NULL,
'negara' => $country_name,
'total' => 1

            );
            $this->model_conter->addC($ni);
        }

        if ($masuk) {
            $konter = array(
                    'idcounter' => NULL,
                    'tanggal' => $today,
                    'ip' => $ip,
'negara' => $country_name

            );
            $this->model_conter->add($konter);

        }

        $data['title']="home page";
        $bhs = $this->session->userdata('EN');
        $data['pengunjung'] = $this->model_conter->counAll();
        $data['news'] = $this->model_berita->getSlideNews($bhs);

        $this->load->view('user/vcontent_rev',$data);

    }

    function ubahBhs() {
        $data = array('EN' => $this->uri->segment(4));
        $this->session->set_userdata($data);
        $this->session->userdata('EN');
        redirect('user/cpagehome/');
    }
}
?>