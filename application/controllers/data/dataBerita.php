<?php
class DataBerita extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_berita');$this->load->helper('text');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['id']=$this->model_berita->getBahasa("id");
        $data['en']=$this->model_berita->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataberita');
        $this->load->view('admin/footer');
    }

    function delete() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "master";
        $data['msg']="successDel";
        $this->model_berita->delete($id);
        $data['id']=$this->model_berita->getBahasa("id");
        $data['en']=$this->model_berita->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdataberita');
        $this->load->view('admin/footer');
    }

    function edit() {
        $tanggal = str_replace("/", "-", $this->input->post('tanggal'));

        $t = substr($tanggal, 6);
        $a = substr($tanggal, 0,2);
        $g = substr($tanggal, 3,2);
        $tgl = "$t-$a-$g";
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

                    'judulN' => $this->input->post('judulB'),
                    'tanggalN' => $tgl,
                    'isiN' => $this->input->post('isiB'),
                    'gambarN' => $namaFile


            );


            $id = $this->input->post('idnews');
            $this->model_berita->edit($data,$id);

            redirect('data/dataBerita/success');

        } else {
            $id = $this->input->post('idnews');
            $data['menuActive'] = "data";
            $data['msg']="gagal";
            $data['en']=$this->model_berita->getById($id);
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/edit/feditberita');
            $this->load->view('admin/footer');
        }
    }

    function success() {
        $id = $this->input->post('idnews');
        $data['menuActive'] = "data";
        $data['msg']="success";
        $data['en']=$this->model_berita->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditberita');
        $this->load->view('admin/footer');
    }

    function getById() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['en']=$this->model_berita->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/feditberita');
        $this->load->view('admin/footer');
    }



}
?>
