<?php
class Ha extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_gambar');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "master";
        $data['msg']="";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fhalaman_awal');
        $this->load->view('admin/footer');
    }

    function add() {
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
                    'idwelcome' => NULL,
                    'gambarW' => $namaFile

            );

            $this->model_gambar->add($dataGambar);

            redirect('mas/ha/success');

        } else {

            $data['menuActive'] = "master";
            $data['msg']="gagal";
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/master/fhalaman_awal');
            $this->load->view('admin/footer');
        }
    }

    function success() {
        $data['menuActive'] = "master";
        $data['msg']="success";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fhalaman_awal');
        $this->load->view('admin/footer');
    }
}
?>
