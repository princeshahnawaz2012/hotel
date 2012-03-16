<?php
class DataPt extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_pt');$this->load->helper('text');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['id']=$this->model_pt->getBahasa("id");
        $data['en']=$this->model_pt->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatapt');
        $this->load->view('admin/footer');
    }

    function delete() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "master";
        $data['msg']="successDel";
        $this->model_pt->delete($id);
        $data['id']=$this->model_pt->getBahasa("id");
        $data['en']=$this->model_pt->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatapt');
        $this->load->view('admin/footer');
    }

    function edit() {


        $data = array(

                'namaPK' => $this->input->post('namapt'),
                'isiPK' => $this->input->post('isi')


        );


        $id = $this->input->post('idPK');
        $this->model_pt->edit($data,$id);

        redirect('data/dataPt/success/'.$id);


    }

    function success() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="success";
        $data['en']=$this->model_pt->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditpt');
        $this->load->view('admin/footer');
    }

    function getById() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['en']=$this->model_pt->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditpt');
        $this->load->view('admin/footer');
    }
}
?>
