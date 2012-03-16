<?php
class Auth extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        $this->load->library('form_validation');
        
    }

    function index() {
        $this->load->view('admin/fheader');
        $this->load->view('admin/login/body_login');
        $this->load->view('admin/footer');
    }

    function cekLogin() {
        $username = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        foreach ($this->model_login->getAll() as $r):
            if ($username == $r->username && $pass == $r->password) {
                $data = array('ID' => $r->idadmin, 'USERNAME' => $r->username, 'PASS' => $r->password);
                $this->session->set_userdata($data);
                redirect('admin/dashboar');
            } else {
                $this->index();
        }
        endforeach;
    }

    function logout() {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('ID');
        $this->index();
    }

    function change() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {
            $this->form_validation->set_rules('admin', 'Nama', 'required');
            $this->form_validation->set_rules('pl', 'Nama', 'required');
            $this->form_validation->set_rules('pb', 'Angkatan', 'required');
            $this->form_validation->set_rules('upb', 'Alamat', 'required');
            $pl = $this->input->post('pl');
            $pb = $this->input->post('pb');
            $upb = $this->input->post('upb');


            if (md5($pl) == $this->session->userdata('PASS') && $pb == $upb) {
                if ($this->form_validation->run() == FALSE) {
                    $data['menuActive'] = "dashboar";
                    $data['msg'] = "gagal";
                    $this->load->view('admin/fheader');
                    $this->load->view('admin/menu',$data);
                    $this->load->view('admin/dashboar');
                    $this->load->view('admin/footer');
                } else {

                    $dataAdmin = array(
                            'username' => $this->input->post('admin'),
                            'password' => md5($this->input->post('upb')),
                    );

                    $this->model_login->editAdmin($this->input->post('idadmin'), $dataAdmin);
                    redirect('auth/logout');
                }
            } else {
                $data['menuActive'] = "dashboar";
                $data['msg'] = "gagal2";
                $this->load->view('admin/fheader');
                $this->load->view('admin/menu',$data);
                $this->load->view('admin/dashboar');
                $this->load->view('admin/footer');
            }
        }
    }
}
?>
