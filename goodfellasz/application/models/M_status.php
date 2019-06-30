<?php
 
 class M_status extends CI_Model{
 
 	function getStatus(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_status = $this->db->get('status')->result(); 
        return $data_status;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('status');
    }
 	public function insertData($data){
 		$this->db->insert('status',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('status',$data);
 	}

 }
 ?>