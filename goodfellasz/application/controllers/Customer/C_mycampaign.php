<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mycampaign extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//$this->load->model('m_category');
			  // Load SiswaModel ke controller ini
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['data_customer'] = $this->m_customer->getCustomer();
		$data['data_sales'] = $this->m_sales->getSales(); 
		$data['data_product'] = $this->m_product->getProduct();
		$data['data_campaign'] = $this->m_campaign->joinData();
		$data['data_status'] = $this->m_status->getStatus(); 
		$this->load->view('Customer/my_campaign',$data); 
	}
	// public function deleteCampaign($id){
	// 	$del = array('campaign_id' => $id);
	// 	$this->m_campaign->deleteData($del);
 //  		redirect('Sales/C_mycampaign');
	// }
	// public function insertCampaign(){
	// 	$customer = $this->input->post('customer_nama');
	// 	$sales = $this->input->post('sales_nama');
	// 	$product = $this->input->post('product_nama');
	// 	$date = $this->input->post('date_campaign'); 
	// 	$time = $this->input->post('time_campaign'); 
	// 	$status = $this->input->post('status_campaign'); 
	// 	$data = array(
	// 		'campaign_customer'=>$customer,
	// 		'campaign_sales'=>$sales,
	// 		'campaign_product'=>$product,
	// 		'campaign_date'=>$date,
	// 		'campaign_time'=>$time,
	// 		'campaign_status'=>$status
	// 	);
	// 	$this->m_campaign->insertData($data);
	// 	redirect('Sales/C_mycampaign');
	// }
	public function editCampaign(){
		$id = $this->input->post('id_campaign');
		$customer = $this->input->post('customer_nama');
		$sales = $this->input->post('sales_nama');
		$product = $this->input->post('product_nama');
		$date = $this->input->post('date_campaign'); 
		$time = $this->input->post('time_campaign'); 
		$status = $this->input->post('status_campaign'); 
		$tanggapan = $this->input->post('tanggapan_campaign'); 
		$data_campaign = array(
			'campaign_customer'=>$customer,
			'campaign_sales'=>$sales,
			'campaign_product'=>$product,
			'campaign_date'=>$date,
			'campaign_time'=>$time,
			'campaign_status'=>$status
		);
		$data_history = array(
			'history_campaign'=>$id,
			'history_customer'=>$customer,
			'history_sales'=>$sales,
			'history_product'=>$product,
			'history_date'=>$date,
			'history_time'=>$time,
			'history_status'=>$status,
			'history_comment'=>$tanggapan
		);
		$where = array(
			'campaign_id' => $id
		);
 
		$this->m_campaign->updateData($where,$data_campaign);
		$this->m_history->insertData($data_history);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Process Data</div>");
		redirect('Customer/C_mycampaign');
	}
	public function detailCampaign($id){
	    $result=$this->db->get_where('campaign',array("campaign_id"=>$id))->row();	
	    echo json_encode($result);
	}
}
