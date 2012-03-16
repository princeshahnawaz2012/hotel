<?php
class DataHa extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_gambar');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['gambar'] = $this->model_gambar->getAll();
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataHA');
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
            $this->model_gambar->editGambar($namaFile,$this->input->post('idG'));

            redirect('data/dataHa/success');

        } else {

            $data['menuActive'] = "master";
            $data['msg']="gagal";
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/data/fdataHA');
            $this->load->view('admin/footer');
        }
    }

    function success() {
        $data['menuActive'] = "master";
        $data['msg']="success";
        $data['gambar'] = $this->model_gambar->getAll();
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataHA');
        $this->load->view('admin/footer');
    }

    function delete(){
        $id = $this->uri->segment(4);
        $data['menuActive'] = "master";
        $data['msg']="successDel";
        $this->model_gambar->deleteGambar($id);
        $data['gambar'] = $this->model_gambar->getAll();
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataHA');
        $this->load->view('admin/footer');
    }
}
?>
