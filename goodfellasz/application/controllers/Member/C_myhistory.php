<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_myhistory extends CI_Controller {
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
	public function index($id)
	{
		//$id = $this->uri->segment(5);
		$data['data_history'] = $this->m_history->getHistory($id);
		$this->load->view('Customer/my_history',$data); 
	}
	/*
	public function deleteProduct($id){
		$del = array('produk_id' => $id);
		$this->m_product->deleteData($del);
  		redirect('C_product/index');
	}
	public function insertProduct(){
		$category = $this->input->post('category_nama');
		$produk = $this->input->post('nama_product');
		$harga = $this->input->post('harga_product');
		$data = array(
			'produk_category'=>$category,
			'produk_nama'=>$produk,
			'produk_harga'=>$harga
		);
		$this->m_product->insertData($data);
		redirect('C_product/index');
	}
	public function editProduct(){
		$id = $this->input->post('id_product');
		$category = $this->input->post('category_nama');
		$produk = $this->input->post('nama_product');
		$harga = $this->input->post('harga_product');

		$data = array(
			'produk_category'=>$category,
			'produk_nama'=>$produk,
			'produk_harga'=>$harga
		);
		$where = array(
			'produk_id' => $id
		);
 
		$this->m_product->updateData($where,$data);
		redirect('C_product/index');
	}
	public function detailProduct($id){
	    $result=$this->db->get_where('product',array("produk_id"=>$id))->row();	
	    echo json_encode($result);
	}
	*/
}
