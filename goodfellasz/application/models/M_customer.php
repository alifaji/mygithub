<?php
 
 class M_customer extends CI_Model{
 
 	function getCustomer(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_custommer = $this->db->get('customer')->result(); 
        return $data_custommer;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('customer');
    }
 	public function insertData($data){
 		$this->db->insert('customer',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('customer',$data);
 	}

 }
 ?>