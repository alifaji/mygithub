<?php
 
 class M_member extends CI_Model{
 
 	function getMember(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_member = $this->db->get('member')->result(); 
        return $data_member;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('member');
    }
 	public function insertData($data){
 		$this->db->insert('member',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('member',$data);
 	}

 }
 ?>