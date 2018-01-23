<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('status',0);
		//$this->db->or_where('username',$username);	
		$this->db->where('password',$password);
		$query=$this->db->get('bk_user');
		if ($query->num_rows() > 0)
		{
		  foreach($query->result() as $data){
		  	$session=array(
			'login'=>'TRUE',
			'level'=>$data->level,
			'id_user'=>$data->id_user,
			'username'=>$data->username,
				);
			$this->session->set_userdata($session);
			return TRUE;
		  }
		}else{
			return FALSE;
		}
	}

	function register($data){
        $query=$this->db->insert('bk_user',$data);
        if($query){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function show($id){
    	$this->db->where('id_user',$id);
    	$query=$this->db->get('bk_user');
    	return $query->result();
    }

     function all(){
    	$query=$this->db->get('bk_user');
    	return $query->result();
    }



     function update($data,$id)
    {
    	$this->db->where('id_user',$id);
    	$query=$this->db->update('bk_user',$data);
    	if($query){
    		return TRUE;
    	}else{
    		return FALSE;
    	}
    }



}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */