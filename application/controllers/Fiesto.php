<?php 

	//MASUK SEBAGAI MEMBER
	class Fiesto extends CI_Controller{

		function __construct(){
			parent::__construct();		
			
			if (!$this->session->userdata('ket') == 'masuk') {
					redirect(base_url());
			}elseif ($this->session->userdata('status')=='supir') {
				redirect(base_url('supirfiesto'));
			}
		}

		function index(){
			$judul = "Halaman Member";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/fiesto-akun.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('fiesto/akun');
			//============ footer
			$this->load->view('atribut/footer');
		}

		public function pengaturan(){
			$judul = "Pengaturan";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/pengaturan.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('fiesto/pengaturan');
			//============ footer
			$this->load->view('atribut/footer');
		}

		public function garasi(){
			$judul = "Garasi";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/garasi.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data
			$this->load->view($header,$data);
			//============ header
			$this->load->view('fiesto/garasi');
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