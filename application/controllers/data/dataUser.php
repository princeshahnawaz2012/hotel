<?php
class DataUser extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_reservation');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "data";
        $data['msg']="";

        $data['user']=$this->model_reservation->getByAll();
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatauser');
        $this->load->view('admin/footer');
    }

    function delete() {
        $data['menuActive'] = "data";
        $data['msg']="";
        $id = $this->uri->segment(4);
        $this->model_reservation->delete($id);
        $data['user']=$this->model_reservation->getByAll();
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatauser');
        $this->load->view('admin/footer');
    }

    function detail(){
        $data['menuActive'] = "data";
        $data['msg']="";
        $id = $this->uri->segment(4);
        
        $data['user']=$this->model_reservation->getBy($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/fuserpesan');
        $this->load->view('admin/footer');
    }




}
?>
