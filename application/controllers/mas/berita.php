<?php
class Berita extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_berita');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['msg']="";
        $data['menuActive'] = "master";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fberita');
        $this->load->view('admin/footer');
    }

    function add() {
    $l = $this->uri->segment(4);
  
        $tanggal = str_replace("/", "-", $this->input->post('tanggal'));
        $this->form_validation->set_rules('judulB', 'News Title', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required');
        $this->form_validation->set_rules('isiB', 'Content', 'required');
        $t = substr($tanggal, 6);
        $a = substr($tanggal, 0,2);
        $g = substr($tanggal, 3,2);
        $tgl = "$t-$a-$g";
        
        if ($this->form_validation->run() == FALSE) {
            $data['msg']="";
            $data['menuActive'] = "master";
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/master/fberita');
            $this->load->view('admin/footer');
        }else {
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
                        'idnews' => NULL,
                        'judulN' => $this->input->post('judulB'),
                        'tanggalN' => $tgl,

                        'isiN' => $this->input->post('isiB'),
                        'gambarN' => $namaFile,
                        'bahasa' => $l

                );

                $this->model_berita->add($dataGambar);

                redirect('mas/berita/success');

            } else {

                $data['msg']="gagal";
                $data['menuActive'] = "master";
                $this->load->view('admin/fheader');
                $this->load->view('admin/menu',$data);
                $this->load->view('admin/master/fberita');
                $this->load->view('admin/footer');
            }
        }
    }

    function success() {
        $data['menuActive'] = "master";
        $data['msg']="success";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fberita');
        $this->load->view('admin/footer');
    }
}
?>
