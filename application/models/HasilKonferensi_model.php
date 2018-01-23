<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HasilKonferensi_model extends CI_Model {

	function show(){
		$this->db->where('bk_hasil_konferensi.status',0);
        $this->db->join('bk_student','bk_student.id_student=bk_hasil_konferensi.id_student');
    	$query=$this->db->get('bk_hasil_konferensi');
    	return $query->result();
    }

    function register($data){
        $query=$this->db->insert('bk_hasil_konferensi',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_hasil_konferensi',$id);
        }
        $this->db->join('bk_student','bk_student.id_student=bk_hasil_konferensi.id_student');
        $query=$this->db->get('bk_hasil_konferensi');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_hasil_konferensi',$id);
        $query=$this->db->update('bk_hasil_konferensi',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    

     function delete($id){
        $this->db->where('id_hasil_konferensi',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_hasil_konferensi',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }


}

/* End of file HasilKonferensi_model.php */
/* Location: ./application/models/HasilKonferensi_model.php */