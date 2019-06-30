<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_promo extends CI_Controller {
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
		$data['data_promo'] = $this->m_promo->getPromo();
		$this->load->view('Admin/promo',$data); 
	}
	public function deletePromo($id){
		$del = array('id_promo' => $id);
		$this->m_promo->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_promo');
	}
	public function insertPromo(){
		$promo = $this->input->post('isi_promo');
		$mulai = $this->input->post('mulai_promo');
		$akhir = $this->input->post('akhir_promo');
		$tujuan = $this->input->post('tujuan_promo');
		$bulan = "";
		$isipromo = "";
		$data = array(
			'promo_isi'=>$promo,
			'promo_mulai'=>$mulai,
			'promo_akhir'=>$akhir,
			'promo_tujuan'=>$tujuan
		);
		$this->m_promo->insertData($data);

		$this->load->library('phpmailer_lib');
        
		// PHPMailer object
		$data_pelanggan = $this->m_pelanggan->getPelanggan();
		$mail = $this->phpmailer_lib->load();
		
		foreach ($data_pelanggan as $key){
			if($tujuan == "Semua"){
				$mail->isSMTP();
				$mail->Host     = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'alifprasetyoaji97@gmail.com';
				$mail->Password = 'mautauaja123';
				$mail->SMTPSecure = 'ssl';
				$mail->Port     = 465;
				
				$mail->setFrom($key->pelanggan_email, 'goodfellas');
				
				// Add a recipient
				$mail->addAddress('alifprasetyoaji97@gmail.com');
				
				// Add cc or bcc 
				$mail->addCC($key->pelanggan_email);
				
				// Email subject
				$mail->Subject = 'Barbershop goodfellass';
				
				// Set email format to HTML
				$mail->isHTML(true);
				
				// Email body content
				$isipromo .= "<h3> TELAH HADIR PROMO DARI GOODFELLAS MULAI $mulai SAMPAI $akhir </h3>
				             <p>$promo</p>			   
				";
				$mail->Body = $isipromo;
		
				// Send email
				if(!$mail->send()){
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				}else{
					echo 'Message has been sent';
				}
		
			
			}
			else {
				$bulan = substr($key->pelanggan_tanggal,5,-3);
				if($tujuan == $bulan){
					$mail->isSMTP();
					$mail->Host     = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->Username = 'alifprasetyoaji97@gmail.com';
					$mail->Password = 'mautauaja123';
					$mail->SMTPSecure = 'ssl';
					$mail->Port     = 465;
					
					$mail->setFrom($key->pelanggan_email, 'goodfellas');
					
					// Add a recipient
					$mail->addAddress('alifprasetyoaji97@gmail.com');
					
					// Add cc or bcc 
					$mail->addCC($key->pelanggan_email);
					
					// Email subject
					$mail->Subject = 'Barbershop goodfellass';
					
					// Set email format to HTML
					$mail->isHTML(true);
					
					// Email body content

					$mail->Body = $mulai;
					$mail->Body = $akhir;
					$mail->Body = $promo;
			
					// Send email
					if(!$mail->send()){
						echo 'Message could not be sent.';
						echo 'Mailer Error: ' . $mail->ErrorInfo;
					}else{
						echo 'Message has been sent';
					}
			
				}
			}
		}
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/Data/C_promo');
		// Instantiation and passing `true` enables exceptions
		
	}
	public function editPromo(){
		$id = $this->input->post('id_promo');
		$promo = $this->input->post('isi_promo');
		$mulai = $this->input->post('mulai_promo');
		$akhir = $this->input->post('akhir_promo');
		$tujuan = $this->input->post('tujuan_promo');
		$data = array(
			'promo_isi'=>$promo,
			'promo_mulai'=>$mulai,
			'promo_akhir'=>$akhir,
			'promo_tujuan'=>$tujuan
		);
		$where = array(
			'id_promo' => $id
		);
 
		$this->m_promo->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_promo');
	}
	public function detailPromo($id){
	    $result=$this->db->get_where('promo',array("id_promo"=>$id))->row();	
	    echo json_encode($result);
	}
}
