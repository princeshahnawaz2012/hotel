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
class Model_galery extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('galery')->result();
    }

    function add($data) {
        $insert = $this->db->insert('galery', $data);
        return $insert;
    }

    function getBahasa($bhs){
        $q="SELECT * FROM `galery` WHERE `bahasa` = '$bhs'";
        return $this->db->query($q)->result();
    }

     function delete($id){
        $this->db->where('idgalery',$id);
        $update = $this->db->delete('galery');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idgalery', $id);
        $update = $this->db->update('galery', $data);
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `galery` WHERE `idgalery` = '$id'";
        return $this->db->query($q)->result();
    }
    
}
?>
