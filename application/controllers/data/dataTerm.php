<?php
class DataTerm extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_term');$this->load->helper('text');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['id']=$this->model_term->getBahasa("id");
        $data['en']=$this->model_term->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataterm');
        $this->load->view('admin/footer');
    }

     function delete() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "master";
        $data['msg']="successDel";
        $this->model_term->delete($id);
        $data['id']=$this->model_term->getBahasa("id");
        $data['en']=$this->model_term->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataterm');
        $this->load->view('admin/footer');
    }


    function edit() {


        $data =  $this->input->post('isi');
       


        $id = $this->input->post('idterm');
        $this->model_term->edit($data,$id);

        redirect('data/dataTerm/success/'.$id);


    }

    function success() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="success";
        $data['en']=$this->model_term->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditterm');
        $this->load->view('admin/footer');
    }

    function getById() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['en']=$this->model_term->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditterm');
        $this->load->view('admin/footer');
    }
}
?>
