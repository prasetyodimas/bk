<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KartuPanggilan_model extends CI_Model {

 	function show(){
		$this->db->where('bk_kartu_panggilan.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_kartu_panggilan.id_student');
    	$query=$this->db->get('bk_kartu_panggilan');
    	return $query->result();
    }

     function register($data){
        $query=$this->db->insert('bk_kartu_panggilan',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }
 function edit($id){
     	if($id!=='all'){
        	$this->db->where('id_kartu_panggilan',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_kartu_panggilan.id_student');
        $query=$this->db->get('bk_kartu_panggilan');
        return $query->result();
    }


    function update($data,$id)
    {
        $this->db->where('id_kartu_panggilan',$id);
        $query=$this->db->update('bk_kartu_panggilan',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function delete($id){
        $this->db->where('id_kartu_panggilan',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_kartu_panggilan',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

/* End of file KartuPanggilan_model.php */
/* Location: ./application/models/KartuPanggilan_model.php */