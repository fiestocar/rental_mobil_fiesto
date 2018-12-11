<?php

	class Masuk extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('M_semua');

			switch ($this->session->userdata('status')) {
				case 'admin':
					redirect(base_url());
					break;
				case 'member':
					redirect(base_url('fiesto'));
					break;
				case 'supir':
					redirect(base_url('supirfiesto'));
					break;
			}
		}

		public function index(){
			$judul = "Halaman Masuk";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/masuk.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			// data 
			$this->load->view('atribut/header',$data);
			//============ header
			$this->load->view('autentifikasi/masuk');
			//============ footer
			$this->load->view('atribut/footer');
		}

		function proses_masuk(){
			$email = $this->input->post('email');
			$kata_sandi = $this->input->post('kata_sandi');
			$query = array(
				'email' => $email,
				'kata_sandi' => md5($kata_sandi)
			);

			$cek = $this->M_semua->cek_masuk("member",$query)->num_rows();
			if($cek > 0){
				$hasil = $this->M_semua->cek_masuk("member",$query)->row_array();
				switch ($hasil['status']) {
					case 1:
						//masuk admin
							$data_sesi = array(
								'nama' => $hasil['nama_member'],
								'email' => $email,
								'status' => "admin",
								'header' => "atribut/header-akun",
								'ket' => "masuk");
							$this->session->set_userdata($data_sesi);
							redirect(base_url("su"));
						break;
					case 2:
						//masuk member
							$data_sesi = array(
								'nama' => $hasil['nama_member'],
								'email' => $email,
								'status' => "member",
								'header' => "fiesto/header_akun",
								'ket' => "masuk"
							);
							$this->session->set_userdata($data_sesi);
							redirect(base_url("fiesto"));
						break;
					case 3:
						//masuk supir
							$data_sesi = array(
								'nama' => $hasil['nama_member'],
								'email' => $email,
								'status' => "supir",
								'header' => "supirfiesto/header_akun",
								'ket' => "masuk"
							);
							$this->session->set_userdata($data_sesi);
							redirect(base_url("supirfiesto"));
						break;
					default:
						$this->session->sess_destroy();
						break;
				}
			}else{
				$this->session->set_flashdata('gagal_masuk',
				'<div class="container">
				  <div class="alert alert-danger alert-dismissible fade show" role="alert">
				    <strong>Email atau Kata Sandi Salah</strong> silahkan coba lagi.
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				      <span aria-hidden="true">&times;</span>
				    </button>
				  </div>
				</div>');
				redirect(base_url("masuk"));
			}
		}
	}

 ?>