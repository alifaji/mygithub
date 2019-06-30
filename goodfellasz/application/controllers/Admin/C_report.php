<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_report extends CI_Controller {
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
		$data['data_pelanggan'] = $this->m_pelanggan->get_report();
		$this->load->view('Admin/report',$data); 
	}
	public function detail_report($id){
		$data['detail_report'] = $this->m_pelanggan->detail_report($id);
		$this->load->view('Admin/detail_report',$data); 


	}
}
