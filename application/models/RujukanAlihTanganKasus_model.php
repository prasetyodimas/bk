<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RujukanAlihTanganKasus_model extends CI_Model {

	
	function show(){
		$this->db->where('bk_rujukan_alih_tangan_kasus.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_rujukan_alih_tangan_kasus.id_student');
    	$query=$this->db->get('bk_rujukan_alih_tangan_kasus');
    	return $query->result();
    }

    function register($data){
        $query=$this->db->insert('bk_rujukan_alih_tangan_kasus',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_rujukan_alih_tangan_kasus',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_rujukan_alih_tangan_kasus.id_student');
        $query=$this->db->get('bk_rujukan_alih_tangan_kasus');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_rujukan_alih_tangan_kasus',$id);
        $query=$this->db->update('bk_rujukan_alih_tangan_kasus',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    

     function delete($id){
        $this->db->where('id_rujukan_alih_tangan_kasus',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_rujukan_alih_tangan_kasus',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }	

}

/* End of file RujukanAlihTanganKasus_model.php */
/* Location: ./application/models/RujukanAlihTanganKasus_model.php */