<?php
class DataProfil extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_profil');$this->load->helper('text');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "data";
         $data['msg']="";
        $data['id']=$this->model_profil->getBahasa("id");
        $data['en']=$this->model_profil->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataprofil');
        $this->load->view('admin/footer');
    }

    function delete() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "master";
        $data['msg']="successDel";
        $this->model_profil->delete($id);
        $data['id']=$this->model_profil->getBahasa("id");
        $data['en']=$this->model_profil->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataprofil');
        $this->load->view('admin/footer');
    }

    function edit() {


        $data = array(

                'tentangP' => $this->input->post('aboutus'),
                'contactP' => $this->input->post('contact'),
                'mapP' => $this->input->post('peta')


        );


        $id = $this->input->post('idprofil');
        $this->model_profil->edit($data,$id);

        redirect('data/dataProfil/success/'.$id);


    }

    function success() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="success";
        $data['en']=$this->model_profil->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditprofil');
        $this->load->view('admin/footer');
    }

    function getById() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['en']=$this->model_profil->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditprofil');
        $this->load->view('admin/footer');
    }

}
?>
