<?php
 
 class M_cabang extends CI_Model{
 
 	function getCabang(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_cabang = $this->db->get('cabang')->result(); 
        return $data_cabang;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('cabang');
    }
 	public function insertData($data){
 		$this->db->insert('cabang',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('cabang',$data);
 	}

 }
 ?>