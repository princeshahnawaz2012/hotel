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
class Model_mobil extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('sewa_mobil')->result();
    }

    function add($data) {
        $insert = $this->db->insert('sewa_mobil', $data);
        return $insert;
    }

     function getBahasa($bhs){
        $q="SELECT * FROM `sewa_mobil` WHERE `bahasa` = '$bhs'";
        return $this->db->query($q)->result();
    }

     function delete($id){
        $this->db->where('idSM',$id);
        $update = $this->db->delete('sewa_mobil');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idSM', $id);
        $update = $this->db->update('sewa_mobil', $data);
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `sewa_mobil` WHERE `idSM` = '$id'";
        return $this->db->query($q)->result();
    }
    
}
?>
