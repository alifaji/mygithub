<?php

class M_report extends CI_Model{

	function getCampaign(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
		$data_campaign = $this->db->get('report')->result(); 
		return $data_campaign;
	}
	function deleteData($del){
		$this->db->where($del);
		$this->db->delete('report');
	}
	public function insertData($data){
		$this->db->insert('report',$data);
	}
	public function updateData($where,$data){	
		$this->db->where($where);
		$this->db->update('report',$data);
	}
	public function detail_report($data){
		$this->db->insert('report_detail',$data);
	}

}
?>