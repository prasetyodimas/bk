<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {


	function register($data){
        $query=$this->db->insert('bk_guru',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function show(){

        //$this->db->where('bk_guru.status',0);
    	$query=$this->db->get('bk_guru');
    	return $query->result();
    }

     function delete($id,$username){
    	$this->db->where('id_guru',$id);
    	$data=array(
    	'status'=>1	
    	);
        $query=$this->db->update('bk_guru',$data);
       
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
        $this->db->where('id_guru',$id);
        $data=array(
        'status'=>0
        );
        $query=$this->db->update('bk_guru',$data);
       
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
    	$this->db->where('id_guru',$id);
    	$query=$this->db->get('bk_guru');
    	return $query->result();
    }

    function update($data,$id)
    {
    	$this->db->where('id_guru',$id);
    	$query=$this->db->update('bk_guru',$data);
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
        $this->db->where('nik',$keyword);
        $query=$this->db->get('bk_guru');
        return json_encode($query->result());
    }

	

}

/* End of file Guru_model.php */
/* Location: ./application/models/Guru_model.php */