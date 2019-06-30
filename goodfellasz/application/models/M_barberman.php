<?php
 
 class M_barberman extends CI_Model{
 
 	function getBarberman(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
		$this->db->from('barberman');
		$this->db->order_by('barberman_cabang','ASC');
        return $this->db->get()->result(); 

	}
	function getBarberman2($cabang){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
		$this->db->from('barberman');
		$this->db->where('barberman_cabang',$cabang);

		$this->db->order_by('barberman_kursi','ASC');
        return $this->db->get()->result(); 

    }
    function deleteData($del){
    	$this->db->where($del);
    	
 		$this->db->delete('barberman');
    }
 	public function insertData($data){
 		$this->db->insert('barberman',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('barberman',$data);
 	}

 }
 ?>