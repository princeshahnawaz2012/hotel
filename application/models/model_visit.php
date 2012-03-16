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
class Model_visit extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function getAll(){
         return $this->db->get('testimoni')->result();
    }

    function add($data) {
        $insert = $this->db->insert('visited', $data);
        return $insert;
    }
    
    function counAll($visit){
        $q="SELECT count('visit') as v FROM visited WHERE visit='$visit'";
        return $this->db->query($q)->result();
    }
    
    function counN($ngr){
        $this->db->select('visit');
        $this->db->from('visited');
        $this->db->where('visit',$ngr);
        
        $query = $this->db->get();
        return $query->num_rows;
    }
    
    function counNN($ngr,$visit){
        $this->db->select('visit');
        $this->db->from('visited');
        $this->db->where('negara',$ngr);
        $this->db->where('visit',$visit);
        
        $query = $this->db->get();
        return $query->num_rows;
    }

     
    
}
?>