<?php
class Profil extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_profil');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['msg'] ="";
        $data['menuActive'] = "master";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fprofil');
        $this->load->view('admin/footer');
    }

    function add() {
        $l = $this->uri->segment(4);
        $this->form_validation->set_rules('aboutus', 'About Us', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('peta', 'Maps', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['msg'] ="";
            $data['menuActive'] = "master";
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/master/fprofil');
            $this->load->view('admin/footer');
        }else {
            $dataGambar = array(
                    'idprofil' => NULL,
                    'tentangP' => $this->input->post('aboutus'),
                    'contactP' => $this->input->post('contact'),
                    'mapP' => $this->input->post('peta'),
                    'bahasa' => $l

            );

            $this->model_profil->add($dataGambar);

            redirect('mas/profil/success');
        }
    }

    function success() {
        $data['menuActive'] = "master";
        $data['msg']="success";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fprofil');
        $this->load->view('admin/footer');
    }
}
?>
