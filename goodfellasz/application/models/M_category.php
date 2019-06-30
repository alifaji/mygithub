<?php
 
 class M_category extends CI_Model{
 
 	function getCategory(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_kategory = $this->db->get('category')->result(); 
        return $data_kategory;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('category');
    }
 	public function insertData($data){
 		$this->db->insert('category',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('category',$data);
 	}

 }
 ?>