<?php
 
 class M_treatment extends CI_Model{
 
 	function getTreatment(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_treatment = $this->db->get('treatment')->result(); 
        return $data_treatment;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('treatment');
    }
 	public function insertData($data){
 		$this->db->insert('treatment',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('treatment',$data);
 	}

 }
 ?>