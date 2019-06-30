<?php 

class C_login extends CI_Controller{

	function __construct(){
		parent::__construct();		

	}

	function index(){
		$this->load->view('login');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where_admin = array(
			'admin_username' => $username,
			//'admin_password' => md5($password)
			'admin_password' => $password
			);
		$where_customer = array(
			'pelanggan_username' => $username,
			//'admin_password' => md5($password)
			'pelanggan_password' => $password
		 );
		$cek = $this->m_login->cek_login("admin",$where_admin);
		$tes = $this->m_login->cek_login("pelanggan",$where_customer);
		$id  = "";
		if($cek->num_rows() > 0){
		
			
		$data= $cek->row();
			$data_session = array(
				'nama' => $username,
				'status' => "login_admin"
				//'id'=>$data->admin_id
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("movement/showAntrian"));

		}else if ($tes->num_rows() > 0) {
		
			$data= $tes->row();
			$data_session = array(
				'nama' => $username,
				'status' => "login_customer",
				'id_pelanggan' =>$data->id_pelanggan

				//'id' => $data->id_owner,
				//'owner' =>$data->owner_nama
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("movement/showAntrianPelanggan"));
		}else{
			echo $this->session->set_flashdata('pesan',"<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove-sign\"></i> Username atau Password yang anda masukkan salahl </div>");
			redirect('C_login/index');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('movement/index'));
	}
	function lupa_password(){
		$username = $this->input->post('username');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$output = "";
		$where_pelanggan = array(
			'pelanggan_username' => $username,
			'pelanggan_email' => $email,
			'pelanggan_telp' => $telp

		 );
		$result = $this->m_login->cek_login("pelanggan",$where_pelanggan);
		if($result->num_rows() > 0){
			$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
			$password = array(); 
			$alpha_length = strlen($alphabet) - 1; 
			for ($i = 0; $i < 8; $i++) 
			{
				$n = rand(0, $alpha_length);
				$password[] = $alphabet[$n];
			}
			$password_baru = implode($password); 
			$where = array(
				'pelanggan_username' => $username,
				'pelanggan_email' => $email,
				'pelanggan_telp' => $telp
			);
			$data = array(
				'pelanggan_password'=>$password_baru
			);
			$this->m_pelanggan->updateData($where,$data);
			$this->load->library('phpmailer_lib');
        
		// PHPMailer object
		$mail = $this->phpmailer_lib->load();
		
		// Instantiation and passing `true` enables exceptions
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'alifprasetyoaji97@gmail.com';
		$mail->Password = 'mautauaja123';
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;
		
		$mail->setFrom('alifprasetyoaji97@gmail.com', 'goodfellas');
		
		// Add a recipient		
		// Add cc or bcc 
		$mail->addCC($email);
		
		// Email subject
		$mail->Subject ="goodfellas";
		
		// Set email format to HTML
		$mail->isHTML(true);
		// Email body content
		$output .= "Password Baru Anda <h4> $password_baru </h4>, Terimakasih";
		$mail->Body = $output;

		// Send email
		if(!$mail->send()){
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			echo 'Message has been sent';
		}
		echo $this->session->set_flashdata('pesan',"<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-success-sign\"></i> Berhasil Lupa Password, Silahkan Cek Email </div>");

			redirect('C_login/index');

		}
		else{
			echo $this->session->set_flashdata('pesan',"<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove-sign\"></i> Anda Belum Terdaftar, Silahkan Daftar </div>");
			redirect('C_login/index');
		}

	}

}