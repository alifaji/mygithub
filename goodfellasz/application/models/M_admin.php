<?php
 
 class M_admin extends CI_Model{
 
 	function getAdmin(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_admin = $this->db->get('admin')->result(); 
        return $data_admin;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('admin');
    }
 	public function insertData($data){
 		$this->db->insert('admin',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('admin',$data);
 	}

 }
 ?>