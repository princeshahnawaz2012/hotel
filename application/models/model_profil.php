<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_berita
 *
 * @author fendi
 */
class Model_profil extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('profil')->result();
    }

    function add($data) {
        $insert = $this->db->insert('profil', $data);
        return $insert;
    }

    function getBahasa($bhs){
        $q="SELECT * FROM `profil` WHERE `bahasa` = '$bhs'";
        return $this->db->query($q)->result();
    }

     function delete($id){
        $this->db->where('idprofil',$id);
        $update = $this->db->delete('profil');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idprofil', $id);
        $update = $this->db->update('profil', $data);
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `profil` WHERE `idprofil` = '$id'";
        return $this->db->query($q)->result();
    }
    
}
?>
