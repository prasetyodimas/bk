<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit_model extends CI_Model {

	 function show(){
		$this->db->where('bk_visit.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_visit.id_student');
    	$query=$this->db->get('bk_visit');
    	return $query->result();
    }

    function showHomeVisit(){
        $this->db->where('status',0);
        $query=$this->db->get('bk_home_visit');
        return $query->result();
    }

    function showSatkung(){
        $this->db->where('bk_satkung_home_visit.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_satkung_home_visit.id_student');
        $query=$this->db->get('bk_satkung_home_visit');
        return $query->result();
    }

    function register($data){
        $query=$this->db->insert('bk_visit',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function registerHomeVisit($data){
        $query=$this->db->insert('bk_home_visit',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function registerSatkung($data){
        $query=$this->db->insert('bk_satkung_home_visit',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }



     function edit($id){
        if($id!=='all'){
        $this->db->where('id_kunjungan',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_visit.id_student');
        $query=$this->db->get('bk_visit');
        return $query->result();

    }

    function editHomeVisit($id){
        $this->db->where('id_home_visit',$id);
        $query=$this->db->get('bk_home_visit');
        return $query->result();
    }

    function editSatkungVisit($id){
         if($id!=='all'){
            $this->db->where('id_satkung_home_visit',$id);
        }
         $this->db->join('bk_student','bk_student.id_student=bk_satkung_home_visit.id_student');
        $query=$this->db->get('bk_satkung_home_visit');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_kunjungan',$id);
        $query=$this->db->update('bk_visit',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function updateHomeVisit($data,$id)
    {
        $this->db->where('id_home_visit',$id);
        $query=$this->db->update('bk_home_visit',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

       function updateSatkung($data,$id)
    {
        $this->db->where('id_satkung_home_visit',$id);
        $query=$this->db->update('bk_satkung_home_visit',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }


     function delete($id){
        $this->db->where('id_kunjungan',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_visit',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function deleteHomeVisit($id){
        $this->db->where('id_home_visit',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_home_visit',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

      function deleteSatkungVisit($id){
        $this->db->where('id_satkung_home_visit',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_satkung_home_visit',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    



}

/* End of file Visit_model.php */
/* Location: ./application/models/Visit_model.php */