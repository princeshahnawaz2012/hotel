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
class Model_term extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('term')->result();
    }

    function add($data) {
        $insert = $this->db->insert('term', $data);
        return $insert;
    }

     function getBahasa($bhs){
        $q="SELECT * FROM `term` WHERE `bahasa` = '$bhs'";
        return $this->db->query($q)->result();
    }

     function delete($id){
        $this->db->where('idterm',$id);
        $update = $this->db->delete('term');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idterm', $id);
        $this->db->set('isiT', $data);
        $update = $this->db->update('term');
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `term` WHERE `idterm` = '$id'";
        return $this->db->query($q)->result();
    }
}
?>
