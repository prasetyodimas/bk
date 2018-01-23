<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonselingIndividu_model extends CI_Model {

	function show(){
		$this->db->where('bk_konseling_individu.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_konseling_individu.id_student');
    	$query=$this->db->get('bk_konseling_individu');
    	return $query->result();
    }

    function register($data){
        $query=$this->db->insert('bk_konseling_individu',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_konseling_individu',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_konseling_individu.id_student');
        $query=$this->db->get('bk_konseling_individu');
        return $query->result();
    }

     function data($id){
        if($id!=='all'){
            $this->db->where('bk_konseling_individu.id_student',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_konseling_individu.id_student');
        $query=$this->db->get('bk_konseling_individu');
        return $query->result();
    }



     function editWithNik($id_student){
        if($id!=='all'){
            $this->db->where('id_konseling_individu',$id_student);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_konseling_individu.id_student');
        $query=$this->db->get('bk_konseling_individu');
        return $query->result();
    }



    function update($data,$id)
    {
        $this->db->where('id_konseling_individu',$id);
        $query=$this->db->update('bk_konseling_individu',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    

     function delete($id){
        $this->db->where('id_konseling_individu',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_konseling_individu',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

/* End of file KonselingIndividu_model.php */
/* Location: ./application/models/KonselingIndividu_model.php */