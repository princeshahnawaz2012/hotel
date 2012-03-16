<?php
class Cpagetestimonial extends CI_Controller{
    function __construct() {
        parent::__construct();
         $this->load->model('model_testi');
$this->load->library('form_validation');
         $this->load->model('model_conter');
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
                    'visit'=>'testimoni'

            );
            $this->model_visit->add($visit);
        $data['title']="testimonial";
$data['cek']="";
        $bhs = "id";
        $data['pengunjung'] = $this->model_conter->counAll();
         $data['testi']=$this->model_testi->getBahasa($bhs);
         $data['gambar']=$this->model_gambar->getGmb();
         
        $this->load->view('user/vheader',$data);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vtestimonial');
        $this->load->view('user/vfooter');
    }

     function ubahBhs() {
        $data = array('EN' => $this->uri->segment(4));
        $this->session->set_userdata($data);
        $this->session->userdata('EN');
        redirect('user/cpagetestimonial/');
    }

function add() {
        $l = "id";


        $this->form_validation->set_rules('namaT', 'Name', 'required');
        $this->form_validation->set_rules('umurT', 'Age', 'required');
        $this->form_validation->set_rules('negaraT', 'Country', 'required');
        $this->form_validation->set_rules('isi', 'Content', 'required');
@session_start();
        if ($_SESSION['security_code'] == $this->input->post('cap')) {
        if ($this->form_validation->run() == FALSE) {
            $data['title']="testimonial";
        $bhs = "id";
        $data['pengunjung'] = $this->model_conter->counAll();
         $data['testi']=$this->model_testi->getBahasa($bhs);
         $data['gambar']=$this->model_gambar->getGmb();
         $data['cek']="err";

        $this->load->view('user/vheader',$data);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vtestimonial');
        $this->load->view('user/vfooter');
        }else {
            $config['upload_path'] = 'uploads';
            $config['allowed_types'] = 'jpg|jpeg|gif|png|JPG';
            $config['max_size'] = '4000';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload', $config);
            $data = $this->upload->do_upload('file');
            if ($data) {
                $file = $this->upload->data();
                $namaFile = $file['file_name'];
                $dataGambar = array(
                        'idtestimoni' => NULL,
                        'namaT' => $this->input->post('namaT'),
                        'umurT' => $this->input->post('umurT'),
                        'negaraT' => $this->input->post('negaraT'),
                        'isiT' => $this->input->post('isi'),
                        'gambarT' => $namaFile,
                        'bahasa' => $l

                );

                $this->model_testi->add($dataGambar);
@session_destroy();
                redirect('user/cpagetestimonial/success');

            } else {

               redirect('user/cpagetestimonial/error');
            }
        }

}else{
 redirect('user/cpagetestimonial/error');

}
    }

    function success() {
        $data['title']="testimonial";
        $bhs = "id";
        $data['pengunjung'] = $this->model_conter->counAll();
         $data['testi']=$this->model_testi->getBahasa($bhs);
         $data['gambar']=$this->model_gambar->getGmb();
         $data['cek']="ok";
        $this->load->view('user/vheader',$data);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vtestimonial');
        $this->load->view('user/vfooter');
    }

function error() {
        $data['title']="testimonial";
       $bhs = "id";
        $data['pengunjung'] = $this->model_conter->counAll();
         $data['testi']=$this->model_testi->getBahasa($bhs);
         $data['gambar']=$this->model_gambar->getGmb();
         $data['cek']="err";
        $this->load->view('user/vheader',$data);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vtestimonial');
        $this->load->view('user/vfooter');
    }
}
?>