<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKonsultasi_model extends CI_Model {

	function show(){
		$this->db->where('bk_data_konsultasi.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_data_konsultasi.id_student');
    	$query=$this->db->get('bk_data_konsultasi');
    	return $query->result();
    }
    
 	function register($data){
        $query=$this->db->insert('bk_data_konsultasi',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_data_konsultasi',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_data_konsultasi.id_student');
        $query=$this->db->get('bk_data_konsultasi');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_data_konsultasi',$id);
        $query=$this->db->update('bk_data_konsultasi',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function delete($id){
        $this->db->where('id_data_konsultasi',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_data_konsultasi',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }


}

/* End of file DataKonsultasi_model.php */
/* Location: ./application/models/DataKonsultasi_model.php */