<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movement extends CI_Controller {
	public function __construct(){
	     parent::__construct();

	//$this->load->helper('url','download');
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
		redirect('C_login/index');
	}
	public function showAdmin(){
		redirect('Admin/Master/User/C_admin');
	}
	public function showOwner(){
		redirect('Admin/Master/User/C_owner');
	}
	public function showBarberman(){
		redirect('Admin/Master/User/C_barberman');
	}
	public function showCustomer(){
			redirect('Admin/Master/User/C_customer');	
	}
	public function showPelanggan(){
			redirect('Admin/Master/User/C_pelanggan');	
	}
	public function showMember(){
			redirect('Admin/Master/User/C_member');	
	}
	public function showProduct(){
			redirect('Admin/Master/Data/C_product');	
	}
	public function showHairstyle(){
			redirect('Admin/Master/Data/C_hairstyle');	
	}
	public function showTreatment(){
			redirect('Admin/Master/Data/C_treatment');	
	}
	public function showPromo(){
			redirect('Admin/Master/Data/C_promo');	
	}
	public function showCabang(){
			redirect('Admin/Master/Data/C_cabang');	
	}
	public function showAntrian(){
			redirect('Admin/C_antrian');	
	}
	public function showPoint(){
			redirect('Admin/C_point');	
	}
	public function showPembayaran(){
			redirect('Admin/C_pembayaran');	
	}
	public function showAntrianPelanggan(){
			redirect('Customer/C_myantrian');	
	}
	public function showItem(){
			redirect('Admin/Master/Data/C_item');	
	}







	/*
	public function tampil_sales(){
		redirect('Admin/Master/User/C_sales');
	}
	public function tampil_customer(){
			redirect('Admin/Master/Data/C_customer');	
	}
	public function showCategory(){
		redirect('Admin/Master/Data/C_category');

	}
	public function showStatus(){
		redirect('Admin/Master/Data/C_status');

	}
	public function showCampaign(){
		redirect('Admin/C_campaign');

	}
	public function showClosing(){
		redirect('Admin/C_closing');

	}
	public function showTable(){
		redirect('Admin/C_table');

	}
	public function showReport(){
		redirect('Admin/C_report');

	}
	public function myCustomer(){
		redirect('Customer/C_mycustommer');
	}
	public function myClosing(){
		redirect('Customer/C_myclosing');
	}
	public function myCampaign(){
		redirect('Customer/C_mycampaign');
	}
	/*
	public function showHistory(){
		redirect('C_history/index');

	}*/
	
	
	/*
	public function rekap_hari(){
		$this->load->view('rekaphari');

	}
	public function rekap_bulan(){
		$this->load->view('rekapbulan');

	}
	public function konfigurasi(){
		$this->load->view('konfigurasi');
	}
	public function tampil_dasboard(){
		$this->load->view('dashboard');

	}
	public function konfigurasi_libur(){
		$this->load->view('libur');

	}
	public function kalender(){
		$this->load->view('calender');

	}
	public function tarik_data(){
		$this->load->view('tarik_data');

	}
	public function market(){
		$this->load->view('market_lead');

	}*/
	
}
