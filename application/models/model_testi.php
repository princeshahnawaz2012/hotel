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
class Model_testi extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('testimoni')->result();
    }

    function add($data) {
        $insert = $this->db->insert('testimoni', $data);
        return $insert;
    }

     function getBahasa($bhs){
        $q="SELECT * FROM `testimoni` WHERE `bahasa` = '$bhs' order by idtestimoni DESC";
        return $this->db->query($q)->result();
    }

     function delete($id){
        $this->db->where('idtestimoni',$id);
        $update = $this->db->delete('testimoni');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idtestimoni', $id);
        $update = $this->db->update('testimoni', $data);
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `testimoni` WHERE `idtestimoni` = '$id'";
        return $this->db->query($q)->result();
    }
    
}
?>
