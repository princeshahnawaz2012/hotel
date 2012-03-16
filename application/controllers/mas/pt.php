<?php
class Pt extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_pt');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['msg']="";
        $data['menuActive'] = "master";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fpaket_tour');
        $this->load->view('admin/footer');
    }

    function add() {
        $l = $this->uri->segment(4);

        $tanggal = str_replace("/", "-", $this->input->post('tanggal'));
        $this->form_validation->set_rules('namapt', 'Packet Tour Title', 'required');
        $this->form_validation->set_rules('isi', 'Content', 'required');
        $t = substr($tanggal, 6);
        $a = substr($tanggal, 0,2);
        $g = substr($tanggal, 3,2);
        $tgl = "$t-$a-$g";

        if ($this->form_validation->run() == FALSE) {
            $data['msg']="";
            $data['menuActive'] = "master";
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/master/fpaket_tour');
            $this->load->view('admin/footer');
        }else {

               
                $dataGambar = array(
                        'idPK' => NULL,
                        'namaPK' => $this->input->post('namapt'),
                        'isiPK' => $this->input->post('isi'),
                        'bahasa' => $l

                );

                $this->model_pt->add($dataGambar);

                redirect('mas/pt/success');

            
        }
    }

    function success() {
        $data['menuActive'] = "master";
        $data['msg']="success";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fpaket_tour');
        $this->load->view('admin/footer');
    }
}
?>
