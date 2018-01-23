<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anekdot_model extends CI_Model {

	function show(){
		$this->db->where('bk_anekdot.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_anekdot.id_student');
    	$query=$this->db->get('bk_anekdot');
    	return $query->result();
    }

	 function register($data){
        $query=$this->db->insert('bk_anekdot',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_anekdot',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_anekdot.id_student');
        $query=$this->db->get('bk_anekdot');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_anekdot',$id);
        $query=$this->db->update('bk_anekdot',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    

     function delete($id){
        $this->db->where('id_anekdot',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_anekdot',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }



}

/* End of file Anekdot_model.php */
/* Location: ./application/models/Anekdot_model.php */