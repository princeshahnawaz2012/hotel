<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_conter
 *
 * @author phepen
 */
class model_conter extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function getAll() {
        return $this->db->get('counter')->result();
    }

function getAllC() {
        return $this->db->get('country')->result();
    }
    
    function getAll2() {
        //$this->db->select('tanggal');
        $this->db->from('counter2');
        $this->db->order_by('tanggal','desc');
        $this->db->limit('12');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    
    function add($data){
        $insert = $this->db->insert('counter',$data);
        return $insert;
    }
    
    function addR($data){
        $insert = $this->db->insert('counter2',$data);
        return $insert;
    }

function addC($data){
        $insert = $this->db->insert('country',$data);
        return $insert;
    }
    
    function getLimit(){
        $this->db->select('tanggal,ip');
        $this->db->from('counter');
        $this->db->order_by('tanggal','desc');
        $this->db->limit('12');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
        
    }
    
    function getLimit2(){
        $this->db->select('tanggal');
        $this->db->from('counter2');
        $this->db->order_by('tanggal','desc');
        $this->db->limit('12');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
        
    }
    
    function coun($tgl){
        $this->db->select('tanggal');
        $this->db->from('counter');
        $this->db->where('tanggal',$tgl);
        
        $query = $this->db->get();
        return $query->num_rows;
    }
    
    function counAll(){
        $q="SELECT count('tanggal') as jum FROM counter";
        return $this->db->query($q)->result();
    }

function edit($data,$ngr){
        $this->db->where('negara', $ngr);
        $update = $this->db->update('country', $data);
        return $update;
    }
    
function counN($ngr){
        $this->db->select('negara');
        $this->db->from('counter');
        $this->db->where('negara',$ngr);
        
        $query = $this->db->get();
        return $query->num_rows;
    }
    
}

?>
