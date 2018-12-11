<?php 

	class Pencarian extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			if (!$this->session->userdata('ket') == 'masuk') {
				$data_sesi = array(
				'nama' => "",
				'email' => "",
				'status' => "",
				'header' => "atribut/header",
				'ket' => ""
				);
				$this->session->set_userdata($data_sesi);
			}
		}

		public function index(){
			$judul = "Pencarian";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/pencarian.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('tampilan/pencarian');
			//============ footer
			$this->load->view('atribut/footer');
		}
	}

 ?>