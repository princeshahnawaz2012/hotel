<?php
class DataGaleri extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_galery');$this->load->helper('text');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {

        $data['menuActive'] = "data";
        $data['msg']="";
        $data['id']=$this->model_galery->getBahasa("id");
        $data['en']=$this->model_galery->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatagaleri');
        $this->load->view('admin/footer');
    }

     function delete(){
        $id = $this->uri->segment(4);
        $data['menuActive'] = "master";
        $data['msg']="successDel";
        $this->model_galery->delete($id);
        $data['id']=$this->model_galery->getBahasa("id");
        $data['en']=$this->model_galery->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatagaleri');
        $this->load->view('admin/footer');
    }

    function edit() {
      
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
            $data = array(

                    'judulG' => $this->input->post('judulG'),
                    'isiG' => $this->input->post('isi'),
                    'gambarG' => $namaFile


            );


            $id = $this->input->post('idgalery');
            $this->model_galery->edit($data,$id);

            redirect('data/dataGaleri/success/'.$id);

        } else {
            $id = $this->input->post('idgalery');
            $data['menuActive'] = "data";
            $data['msg']="gagal";
            $data['en']=$this->model_galery->getById($id);
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/edit/feditgalery');
            $this->load->view('admin/footer');
        }
    }

    function success() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="success";
        $data['en']=$this->model_galery->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditgalery');
        $this->load->view('admin/footer');
    }

    function getById() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['en']=$this->model_galery->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditgalery');
        $this->load->view('admin/footer');
    }

}
?>
