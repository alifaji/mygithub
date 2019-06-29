<?php

class M_campaign extends CI_Model{

	function getCampaign(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
		$data_campaign = $this->db->get('campaign')->result(); 
		return $data_campaign;
	}
	function deleteData($del){
		$this->db->where($del);
		$this->db->delete('campaign');
	}
	public function insertData($data){
		$this->db->insert('campaign',$data);
	}
	public function updateData($where,$data){	
		$this->db->where($where);
		$this->db->update('campaign',$data);
	}
	public function campaignRemaining(){
		$this->db->select('campaign_sales, COUNT(campaign_customer) as sisa_campaign');
		$this->db->from('campaign');
		$this->db->where(array("campaign_status !="=>"Close"));
 		$this->db->group_by('campaign_sales'); 
 		$this->db->order_by('campaign_sales', 'asc'); 
 		$query = $this->db->get()->result();
 		return $query;
	}
	public function campaignClosing(){
		$this->db->select('campaign_sales, COUNT(campaign_customer) as sisa_closing');
		$this->db->from('campaign');
		$this->db->where(array('campaign_status'=>"Close"));
 		$this->db->group_by('campaign_sales'); 
 		$this->db->order_by('campaign_sales', 'asc'); 
 		$query = $this->db->get()->result();
 		return $query;
	}
	public function joinData(){
		
		$this->db->select('*');
		
		$this->db->from('customer');
		$this->db->join('campaign', 'campaign.campaign_customer = customer.customer_id');
		//$this->db->distinct('campaign_customer');
		$query = $this->db->get()->result();
		return $query;
	}

	public function joinDistinct(){
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->join('campaign', 'campaign.campaign_customer = customer.customer_id');
		$this->db->where('campaign_sales=', $this->session->userdata("sales"));
		$this->db->group_by('campaign_customer');

		$query = $this->db->get()->result();
		return $query;

		// select * from customer join campaign WHERE customer.customer_id = campaign.campaign_customer && campaign.campaign_sales ='alif prasetyo' GROUP BY campaign_customer
		
	}
	public function joinReportTable(){
		$this->db->select('campaign_sales, 
			COUNT(IF(campaign_status="Client",1, NULL)) "Client",
			COUNT(IF(campaign_status="In Progress",1, NULL)) "InProgress", 
			COUNT(IF(campaign_status="Pending",1, NULL)) "Pending",
			COUNT(IF(campaign_status="Close",1, NULL)) "Close"  
			' 
		);
		$this->db->from('campaign');
 		$this->db->group_by('campaign_sales'); 
 		//$this->db->order_by('campaign_sales', 'asc'); 
 		$query = $this->db->get()->result();
 		return $query;
	}

	public function getJoinSales($nama){
		$this->db->select('campaign.campaign_sales, customer.customer_nama,
			COUNT(IF(campaign_status="Client",1, NULL)) "Client",
			COUNT(IF(campaign_status="In Progress",1, NULL)) "InProgress", 
			COUNT(IF(campaign_status="Pending",1, NULL)) "Pending",
			COUNT(IF(campaign_status="Close",1, NULL)) "Close"  
			' 
		);
		$this->db->from('campaign');
		$this->db->join('customer', 'campaign.campaign_customer = customer.customer_id', 'left');
		$this->db->where(array('campaign.campaign_sales'=>$nama));
 		$this->db->group_by('campaign_sales, customer_nama'); 
 		//$this->db->order_by('campaign_sales', 'asc'); 
 		$query = $this->db->get()->result();
 		return $query;
	}

}
?>