<?php
 
 class M_sales extends CI_Model{
 
 	function getSales(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        /*$data_sales = $this->db->get('sales')->result(); 
        return $data_sales;*/
        $this->db->order_by("sales_nama", "asc");
        $data_sales = $this->db->get('sales');
        return $data_sales->result();
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('sales');
    }
 	public function insertData($data){
 		$this->db->insert('sales',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('sales',$data);
 	}

 }
 ?>