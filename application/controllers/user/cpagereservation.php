<?php
class Cpagereservation extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('model_conter');
        $this->load->model('model_reservation');
$this->load->model('model_visit');
        $this->load->model('model_gambar');
        $this->load->library('form_validation');
        if ($this->session->userdata('EN') != TRUE) {
            $data = array('EN' => "en");
            $this->session->set_userdata($data);
        }
    }
    function index() {
include 'geoip.inc';
        $gi = geoip_open('resources/GeoIP.dat', GEOIP_STANDARD);
        $country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);
        //$this->data['country_code'] = $country_code;
        $country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);
        //$this->data['country_name'] = $country_name;
        
        // close the database
        geoip_close($gi);
        
         $visit = array(
                    'id' => NULL,
                    'negara' => $country_name,
                    'visit'=>'reservasi'

            );
            $this->model_visit->add($visit);
        $data['title']="reservation";
        $data['msg'] ="";
        $data['pengunjung'] = $this->model_conter->counAll();
        $data['gambar']=$this->model_gambar->getGmb();
        $this->load->view('user/vheader',$data);
        $this->load->view('user/vmenu');
        $this->load->view('user/frontend/page/vreservation');
        $this->load->view('user/vfooter');
    }

    function ubahBhs() {
        $data = array('EN' => $this->uri->segment(4));
        $this->session->set_userdata($data);
        $this->session->userdata('EN');
        redirect('user/cpagereservation/');
    }

    function pesan() {

        @session_start();
        if ($_SESSION['security_code'] == $this->input->post('cap')) {
            $data['title']="reservation";
            $data['pengunjung'] = $this->model_conter->counAll();
            $data['msg'] ="sukses";
            $dataBiodata = array(
                    'idBU' => NULL,
                    'nama' => $this->input->post('nama'),
                    'perusahaan' => $this->input->post('company'),
                    'alamat' => $this->input->post('address'),

            );
            $this->model_reservation->addUser($dataBiodata);
            $dataContact = array(
                    'idcontact' => NULL,
                    'email' => $this->input->post('email'),
                    'telp' => $this->input->post('phone'),
                    'hp' => $this->input->post('mobile'),
                    'fax' => $this->input->post('fax')
            );
            $this->model_reservation->addContact($dataContact);
            $tglArr = $this->input->post('arrtanggal');
            $blnArr = $this->input->post('arrbulan');
            $thnArr = $this->input->post('arrtahun');

            $tglDep = $this->input->post('deptanggal');
            $blnDep = $this->input->post('depbulan');
            $thnDep = $this->input->post('deptahun');

            $dataPemesanan = array(
                    'idPe' => NULL,
                    'arrival' => "$thnArr-$blnArr-$tglArr",
                    'departure' =>  "$thnDep-$blnDep-$tglDep",
                    'pax' => $this->input->post('pax'),
                    'akomodasi' => $this->input->post('akomodasi'),
                    'transportasi' => $this->input->post('transportasi'),
                    'guide' => $this->input->post('guide'),
                    'spesial' => $this->input->post('sr')
            );
            $this->model_reservation->addPemesanan($dataPemesanan);

            foreach ($this->model_reservation->getIdUser() as $r) {
                $idUser = $r->idBU;
            }
            foreach ($this->model_reservation->getIdContact() as $r) {
                $idContact = $r->idcontact;
            }
            foreach ($this->model_reservation->getIdPemesanan() as $r) {
                $idPe = $r->idPe;
            }
            $dataD = array(
                    'iduser' => NULL,
                    'idBU' => $idUser,
                    'idcontact' => $idContact,
                    'idPe' => $idPe
                   
            );
            $this->model_reservation->addData($dataD);
@session_destroy();
            $this->load->view('user/vheader',$data);
            $this->load->view('user/vmenu');
            $this->load->view('user/frontend/page/vreservation');
            $this->load->view('user/vfooter');
            
        }else {
            $data['title']="reservation";
            $data['pengunjung'] = $this->model_conter->counAll();
            $data['msg'] ="gagal";
            $this->load->view('user/vheader',$data);
            $this->load->view('user/vmenu');
            $this->load->view('user/frontend/page/vreservation');
            $this->load->view('user/vfooter');

        }

    }

//    }
}
?>