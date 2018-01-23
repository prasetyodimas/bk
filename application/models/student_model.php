<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

	function register($data){
        $query=$this->db->insert('bk_student',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function show(){
    	//$this->db->where('status',0);
    	$query=$this->db->get('bk_student');
    	return $query->result();
    }

     function delete($id){
    	$this->db->where('id_student',$id);
    	$data=array(
    	'status'=>1	
    	);
        $query=$this->db->update('bk_student',$data);
       
        $this->db->where('id_user',$id);
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

    function restore($id){
        $this->db->where('id_student',$id);
        $data=array(
        'status'=>0
        );
        $query=$this->db->update('bk_student',$data);
       
        $this->db->where('id_user',$id);
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
    	$this->db->where('id_student',$id);
    	$query=$this->db->get('bk_student');
    	return $query->result();
    }

    function update($data,$id)
    {
    	$this->db->where('id_student',$id);
    	$query=$this->db->update('bk_student',$data);
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
        $query=$this->db->get('bk_student');
        return json_encode($query->result());
    }


}

/* End of file student_model.php */
/* Location: ./application/models/student_model.php */