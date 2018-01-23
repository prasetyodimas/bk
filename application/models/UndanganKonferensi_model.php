<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UndanganKonferensi_model extends CI_Model {

	function show(){
		$this->db->where('status',0);
        //$this->db->join('bk_student','bk_student.id_student=bk_hasil_konferensi.id_student');
    	$query=$this->db->get('bk_undangan_konferensi');
    	return $query->result();
    }

    function register($data){
        $query=$this->db->insert('bk_undangan_konferensi',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_undangan_konferensi',$id);
        }
        $query=$this->db->get('bk_undangan_konferensi');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_undangan_konferensi',$id);
        $query=$this->db->update('bk_undangan_konferensi',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    

     function delete($id){
        $this->db->where('id_undangan_konferensi',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_undangan_konferensi',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }	

}

/* End of file UndanganKonferensi_model.php */
/* Location: ./application/models/UndanganKonferensi_model.php */