<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_gambar
 *
 * @author phepen
 */
class Model_gambar extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function getAll(){
         return $this->db->get('welcome')->result();
    }
    
    function editGambar($gmb,$idc){
        $this->db->where('idwelcome', $idc);
        $this->db->set('gambarW', $gmb);
        $update = $this->db->update('welcome');
        return $update;
    }

    function add($data) {
        $insert = $this->db->insert('welcome', $data);
        return $insert;
    }

    function deleteGambar($id){
        $this->db->where('idwelcome',$id);
        $update = $this->db->delete('welcome');
        return $update;
    }

    function getGmb(){
        $q="SELECT * FROM `welcome` order by idwelcome DESC";
        return $this->db->query($q)->result();
    }
    
    
}

?>
