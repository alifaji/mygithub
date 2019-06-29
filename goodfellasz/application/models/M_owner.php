<?php
 
 class M_owner extends CI_Model{
 
 	function getOwner(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_owner = $this->db->get('owner')->result(); 
        return $data_owner;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('owner');
    }
 	public function insertData($data){
 		$this->db->insert('owner',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('owner',$data);
 	}

 }
 ?>