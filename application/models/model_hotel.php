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
class Model_hotel extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('hotel')->result();
    }

    function add($data) {
        $insert = $this->db->insert('hotel', $data);
        return $insert;
    }

    function getBahasa($bhs){
        $q="SELECT * FROM `hotel` WHERE `bahasa` = '$bhs'";
        return $this->db->query($q)->result();
    }

     function delete($id){
        $this->db->where('idhotel',$id);
        $update = $this->db->delete('hotel');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idhotel', $id);
        $update = $this->db->update('hotel', $data);
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `hotel` WHERE `idhotel` = '$id'";
        return $this->db->query($q)->result();
    }
}
?>
