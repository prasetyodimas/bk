<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model {

function show(){
		$this->db->where('bk_agenda.status',0);
        $query=$this->db->get('bk_agenda');
    	return $query->result();
    }

	 function register($data){
        $query=$this->db->insert('bk_agenda',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function edit($id){
        if($id!=='all'){
            $this->db->where('id_agenda',$id);
        }
        $query=$this->db->get('bk_agenda');
        return $query->result();
    }

    function update($data,$id)
    {
        $this->db->where('id_agenda',$id);
        $query=$this->db->update('bk_agenda',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

     function delete($id){
        $this->db->where('id_agenda',$id);
        $data=array(
        'status'=>1 
        );
        $query=$this->db->update('bk_agenda',$data);
         if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }
	

}

/* End of file Agenda_model.php */
/* Location: ./application/models/Agenda_model.php */