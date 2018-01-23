<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orangtua_model extends CI_Model {

	function register($data){
        $query=$this->db->insert('bk_orangtua',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function show(){

    	$this->db->join('bk_student','bk_student.id_student=bk_orangtua.id_student');
        // $this->db->where('bk_orangtua.status',0);
        $query=$this->db->get('bk_orangtua');
        return $query->result();
    }

    function data($id){
        $this->db->where('nis',$id);
        $query=$this->db->get('bk_orangtua');
        return $query->result();
    }

     function delete($id,$username){
    	$this->db->where('id_orangtua',$id);
    	$data=array(
    	'status'=>1	
    	);
        $query=$this->db->update('bk_orangtua',$data);
       
        $this->db->where('username',$username);
        $data2=array(
        'status'=>1 
        );
        $query2=$this->db->update('bk_user',$data2);
    	 if($query&& $query2){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function restore($id,$username){
        $this->db->where('id_orangtua',$id);
        $data=array(
            'status'=>0
        );
        $query=$this->db->update('bk_orangtua',$data);
       
        $this->db->where('username',$username);
        $data2=array(
            'status'=>0
        );
        $query2=$this->db->update('bk_user',$data2);
         if($query&& $query2){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    function edit($id){
    	$this->db->where('id_orangtua',$id);
    	$query=$this->db->get('bk_orangtua');
    	return $query->result();
    }

    function update($data,$id)
    {
    	$this->db->where('id_orangtua',$id);
    	$query=$this->db->update('bk_orangtua',$data);
    	if($query){
    		return TRUE;
    	}else{
    		return FALSE;
    	}
    }
    /* get data JSON */
    function getData($keyword){
        $this->db->where('status',0);
        //$this->db->like('nama',$keyword);
        $this->db->where('nis',$keyword);
        $query=$this->db->get('bk_orangtua');
        return json_encode($query->result());
    }

	

}

/* End of file Parent_model.php */
/* Location: ./application/models/Parent_model.php */