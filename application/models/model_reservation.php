<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_reservation
 *
 * @author fendi
 */
class Model_reservation extends CI_Model {
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function addUser($data) {
        $insert = $this->db->insert('biodata_user', $data);
        return $insert;
    }

    function addContact($data) {
        $insert = $this->db->insert('contact', $data);
        return $insert;
    }
    function addPemesanan($data) {
        $insert = $this->db->insert('pemesanan', $data);
        return $insert;
    }
    function addData($data) {
        $insert = $this->db->insert('user', $data);
        return $insert;
    }

    function getIdUser(){
        $q="SELECT * FROM `biodata_user` order by idBU DESC limit 1";
        return $this->db->query($q)->result();
    }

    function getIdContact(){
        $q="SELECT * FROM `contact` order by idcontact DESC limit 1";
        return $this->db->query($q)->result();
    }

    function getIdPemesanan(){
        $q="SELECT * FROM `pemesanan` order by idPe DESC limit 1";
        return $this->db->query($q)->result();
    }

    function getByAll(){
        $q="SELECT * FROM `user` u INNER JOIN biodata_user bu ON u.idBU = bu.idBU INNER JOIN contact c ON u.idcontact = c.idcontact INNER JOIN pemesanan pe ON u.idPe = pe.idPe order by u.iduser desc";
        return $this->db->query($q)->result();
    }
    function delete($id){
        $this->db->where('iduser',$id);
        $update = $this->db->delete('user');
        return $update;
    }

    function getBy($id){
        $q="SELECT * FROM `user` u INNER JOIN biodata_user bu ON u.idBU = bu.idBU INNER JOIN contact c ON u.idcontact = c.idcontact INNER JOIN pemesanan pe ON u.idPe = pe.idPe where u.iduser=$id";
        return $this->db->query($q)->result();
    }
}
?>
