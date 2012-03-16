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
class Model_pt extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('paket_tour')->result();
    }

    function add($data) {
        $insert = $this->db->insert('paket_tour', $data);
        return $insert;
    }

     function getBahasa($bhs){
        $q="SELECT * FROM `paket_tour` WHERE `bahasa` = '$bhs'";
        return $this->db->query($q)->result();
    }

     function delete($id){
        $this->db->where('idPK',$id);
        $update = $this->db->delete('paket_tour');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idPK', $id);
        $update = $this->db->update('paket_tour', $data);
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `paket_tour` WHERE `idPK` = '$id'";
        return $this->db->query($q)->result();
    }

    
}
?>
