<?php
 
 class M_item extends CI_Model{
 
 	function getItem(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_item = $this->db->get('item')->result(); 
        return $data_item;
    }
    public function getTreatment()
    {
    	$this->db->where(array("item_jenis"=>"Treatment"));
 		$data_treatment = $this->db->get('item')->result(); 
		return $data_treatment;
    }
    public function getProduct()
    {
    	$this->db->where(array("item_jenis"=>"Product"));
 		$data_product = $this->db->get('item')->result(); 
		return $data_product;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('item');
    }
 	public function insertData($data){
 		$this->db->insert('item',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('item',$data);
 	}
	 function get_data_item($id){
		$this->db->from('item');
		$this->db->where('id_item',$id);
		$query = $this->db->get();
		return $query->result();
		}
 }
 ?>