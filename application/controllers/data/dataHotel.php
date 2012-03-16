<?php
class DataHotel extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_hotel');
 $this->load->helper('text');
        if ($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE) {
            redirect('auth/');
        }
    }

    function index() {
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['id']=$this->model_hotel->getBahasa("id");
        $data['en']=$this->model_hotel->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatahotel');
        $this->load->view('admin/footer');
    }

    function delete() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "master";
        $data['msg']="successDel";
        $this->model_hotel->delete($id);
        $data['id']=$this->model_hotel->getBahasa("id");
        $data['en']=$this->model_hotel->getBahasa("en");
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/data/fdatahotel');
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

                    'namaH'=> $this->input->post('namaH'),
                    'urlH' =>$this->input->post('url'),
                    'fasilitasH' => $this->input->post('fasilitas'),
                    'gambarH' => $namaFile


            );


            $id = $this->input->post('idhotel');
            $this->model_hotel->edit($data,$id);

            redirect('data/dataHotel/success/'.$id);

        } else {
            $id = $this->input->post('idhotel');
            $data['menuActive'] = "data";
            $data['msg']="gagal";
            $data['en']=$this->model_hotel->getById($id);
            $this->load->view('admin/fheader');
            $this->load->view('admin/menu',$data);
            $this->load->view('admin/edit/fedithotel');
            $this->load->view('admin/footer');
        }
    }

    function success() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="success";
        $data['en']=$this->model_hotel->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/fedithotel');
        $this->load->view('admin/footer');
    }

    function getById() {
        $id = $this->uri->segment(4);
        $data['menuActive'] = "data";
        $data['msg']="";
        $data['en']=$this->model_hotel->getById($id);
        $this->load->view('admin/fheader');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/edit/fedithotel');
        $this->load->view('admin/footer');
    }

}
?>
