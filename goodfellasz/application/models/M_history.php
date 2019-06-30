<?php
 
 class M_history extends CI_Model{
 
 	public function getHistory($id){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        //$data_kategory = $this->db->get('history')->result(); 
        //return $data_kategory;
        $this->db->from('customer');
        $this->db->join('history', 'history.history_customer = customer.customer_id');
        $this->db->where(array('history_campaign'=>$id));
        $data_history = $this->db->get()->result();
        // $data_history = $this->db->get_where('history', array('history_campaign' => $id))->result();
        	return $data_history;
    }
 	public function insertData($data){
 		$this->db->insert('history',$data);
 	}

 	/*
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('campaign',$data);
 	}
 	    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('campaign');
    } */

 }
 ?>