<?php
 
 class M_pembayaran extends CI_Model{
 
 	function getPembayaran(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_product = $this->db->get('product')->result(); 
        return $data_product;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('product');
    }
 	public function insertData($data){
 		$this->db->insert('product',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('product',$data);
 	}

 }
 ?>