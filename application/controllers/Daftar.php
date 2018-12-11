<?php

	class Daftar extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_semua');

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
			$judul = "Halaman Daftar";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/daftar.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			// data 
			$this->load->view('atribut/header',$data);
			//============ header
			$this->load->view('autentifikasi/daftar');
			//============ footer
			$this->load->view('atribut/footer');
		}
		public function daftar_member(){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$kata_sandi = $this->input->post('kata_sandi');
			$dataMember = array(
				'nama_member' => $nama,
				'email' 		 	=> $email,
				'kata_sandi' 	=> md5($kata_sandi),
				'status' 		 	=> "2"
			);
			$this->db->insert('member',$dataMember);
			redirect('masuk');
		}

	}
?>