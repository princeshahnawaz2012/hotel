<?php
class Hotel extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_hotel');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['msg']="";
        $data['menuActive'] = "master";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fhotel');
        $this->load->view('admin/footer');
    }
    function add() {
        $l = $this->uri->segment(4);


        $this->form_validation->set_rules('namaH', 'Name Hotel', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('fasilitas', 'Content', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['msg']="";
            $data['menuActive'] = "master";
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/master/fhotel');
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
                        'idhotel' => NULL,
                        'namaH'=> $this->input->post('namaH'),
                        'urlH' =>$this->input->post('url'),
                        'fasilitasH' => $this->input->post('fasilitas'),
                        'gambarH' => $namaFile,
                        'bahasa' => $l

                );

                $this->model_hotel->add($dataGambar);

                redirect('mas/hotel/success');

            } else {

                $data['msg']="gagal";
                $data['menuActive'] = "master";
                $this->load->view('admin/fheader');
                $this->load->view('admin/menu',$data);
                $this->load->view('admin/master/fhotel');
                $this->load->view('admin/footer');
            }
        }
    }

    function success() {
        $data['menuActive'] = "master";
        $data['msg']="success";
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/master/fhotel');
        $this->load->view('admin/footer');
    }
}
?>
