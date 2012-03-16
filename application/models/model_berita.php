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
class Model_berita extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('news')->result();
    }

    function add($data) {
        $insert = $this->db->insert('news', $data);
        return $insert;
    }

    function getBahasa($bhs){
        $q="SELECT * FROM `news` WHERE `bahasa` = '$bhs'";
        return $this->db->query($q)->result();
    }

    function delete($id){
        $this->db->where('idnews',$id);
        $update = $this->db->delete('news');
        return $update;
    }

    function edit($data,$id){
        $this->db->where('idnews', $id);
        $update = $this->db->update('news', $data);
        return $update;
    }

    function getById($id){
        $q="SELECT * FROM `news` WHERE `idnews` = '$id'";
        return $this->db->query($q)->result();
    }

    function getSlideNews($bhs){
        $q="SELECT * FROM `news` WHERE `bahasa` = '$bhs' order by tanggalN DESC limit 3";
        return $this->db->query($q)->result();
    }

    function getByMore($id){
        $q="SELECT * FROM `news` WHERE `idnews` = '$id'";
        return $this->db->query($q)->result();
    }
    
}
?>
