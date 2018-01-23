<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratUndanganOrangTua_model extends CI_Model {

function show(){
		$this->db->where('bk_undangan_orang_tua.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_undangan_orang_tua.id_student');
    	$query=$this->db->get('bk_undangan_orang_tua');
    	return $query->result();
    }
    
 	function register($data){
        $query=$this->db->insert('bk_undangan_orang_tua',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_undangan_orang_tua',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_undangan_orang_tua.id_student');
        $query=$this->db->get('bk_undangan_orang_tua');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_undangan_orang_tua',$id);
        $query=$this->db->update('bk_undangan_orang_tua',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    

     function delete($id){
        $this->db->where('id_undangan_orang_tua',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_undangan_orang_tua',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }
		

}

/* End of file SuratUndanganOrangTua_model.php */
/* Location: ./application/models/SuratUndanganOrangTua_model.php */