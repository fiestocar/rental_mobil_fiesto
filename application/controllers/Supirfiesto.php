<?php 

	//MASUK SEBAGAI SUPIR
	class Supirfiesto extends CI_Controller{

		function __construct(){
			parent::__construct();		
			
			if (!$this->session->userdata('ket') == 'masuk') {
					redirect(base_url());
			}elseif ($this->session->userdata('status')=='member') {
				redirect(base_url('fiesto'));
			}
		}

		function index(){
			$judul = "Halaman Supir";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/fiesto-akun.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('supirfiesto/akun');
			//============ footer
			$this->load->view('atribut/footer');
		}

		public function jadwal(){
			$judul = "Jadwalku";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/jadwal.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data
			$this->load->view($header,$data);
			//============ header
			$this->load->view('supirfiesto/jadwal');
			//============ footer
			$this->load->view('atribut/footer');
		}

		function keluar(){
			$data_sesi = array(
				'nama' => "",
				'email' => "",
				'status' => "",
				'header' => "atribut/header",
				'ket' => ""
			);
			$this->session->set_userdata($data_sesi);
			// $this->session->sess_destroy();
			redirect(base_url('masuk'));
		}

	}

?>