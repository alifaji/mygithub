<?php
 
 class M_hairstyle extends CI_Model{
 
 	function getHairstyle(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_hairstyle = $this->db->get('hairstyle')->result(); 
        return $data_hairstyle;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('hairstyle');
    }
 	public function insertData($data){
 		$this->db->insert('hairstyle',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('hairstyle',$data);
 	}

 }
 ?>