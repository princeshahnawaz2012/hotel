<?php
class Tc extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_term');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['msg']="";
        $data['menuActive'] = "master";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fterm');
        $this->load->view('admin/footer');
    }

    function add() {
        $l = $this->uri->segment(4);


        $this->form_validation->set_rules('isi', 'Content', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data['msg']="";
            $data['menuActive'] = "master";
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/master/fterm');
            $this->load->view('admin/footer');
        }else {
            
                $dataGambar = array(
                        'idterm' => NULL,
                        'isiT' => $this->input->post('isi'),
                        'bahasa' => $l

                );

                $this->model_term->add($dataGambar);

                redirect('mas/tc/success');

            
        }
    }

    function success() {
        $data['menuActive'] = "master";
        $data['msg']="success";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fterm');
        $this->load->view('admin/footer');
    }
}
?>
