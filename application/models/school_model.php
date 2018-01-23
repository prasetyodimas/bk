<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School_model extends CI_Model {

	function register($data){
        $query=$this->db->insert('bk_sekolah',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function show(){
		//$this->db->where('status',0);
    	$query=$this->db->get('bk_sekolah');
    	return $query->result();
    }

    function check(){
    	$this->db->where('status',0);
    	$query=$this->db->get('bk_sekolah');
    	return $query->num_rows();
    }

    function update($data,$id)
    {
        $this->db->where('id_sekolah',$id);
        $query=$this->db->update('bk_sekolah',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

/* End of file school_model.php */
/* Location: ./application/models/school_model.php */