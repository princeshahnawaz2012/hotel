<?php
class Dashboar extends CI_Controller {
	#constructer to autoload model_center,model_visit
    function __construct() {
        parent::__construct();
        $this->load->model('model_conter');
$this->load->model('model_visit');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "dashboar";
        $data['msg'] ="";
        $i = 0;
        foreach ($this->model_conter->getLimit2() as $r) {
            $i++;
            $data["aa$i"] = $this->model_conter->coun($r->tanggal);
        }
$data['negara'] =$this->model_conter->getAllC();
        $data['conTgl'] = $this->model_conter->getAll2();
$data['welcome']=$this->model_visit->counN('welcome');
$data['home']=$this->model_visit->counN('home');
$data['profil']=$this->model_visit->counN('profil');
$data['product']=$this->model_visit->counN('reservasi');
$data['tour']=$this->model_visit->counN('paket');
$data['hotel']=$this->model_visit->counN('hotel');

$data['gallery']=$this->model_visit->counN('gallery');
$data['rental']=$this->model_visit->counN('rental');
$data['testi']=$this->model_visit->counN('testimoni');
$data['term']=$this->model_visit->counN('term');
$data['news']=$this->model_visit->counN('news');
$data['ngr']="All Country";

        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/dashboar');
        $this->load->view('admin/footer');
    }
	
	function cekVisited() {
	$n = str_replace("%20", " ", $this->uri->segment(4));
        $data['menuActive'] = "dashboar";
        $data['msg'] ="";
        $i = 0;
        foreach ($this->model_conter->getLimit2() as $r) {
            $i++;
            $data["aa$i"] = $this->model_conter->coun($r->tanggal);
        }
$data['negara'] =$this->model_conter->getAllC();
        $data['conTgl'] = $this->model_conter->getAll2();
$data['welcome']=$this->model_visit->counNN($n,'welcome');
$data['home']=$this->model_visit->counNN($n,'home');
$data['profil']=$this->model_visit->counNN($n,'profil');
$data['product']=$this->model_visit->counNN($n,'reservasi');
$data['tour']=$this->model_visit->counNN($n,'paket');
$data['hotel']=$this->model_visit->counNN($n,'hotel');

$data['gallery']=$this->model_visit->counNN($n,'gallery');
$data['rental']=$this->model_visit->counNN($n,'rental');
$data['testi']=$this->model_visit->counNN($n,'testimoni');
$data['term']=$this->model_visit->counNN($n,'term');
$data['news']=$this->model_visit->counNN($n,'news');
$data['ngr']=$n;

        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/dashboar');
        $this->load->view('admin/footer');
    }

}
?>
