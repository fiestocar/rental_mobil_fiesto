<?php 

	class Layanan extends CI_Controller{
		
		function __construct(){
			parent::__construct();

		}

		public function hubungi(){
			$judul = "Layanan Pelanggan";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/hubungi.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('tampilan/layanan/hubungi');
			//============ footer
			$this->load->view('atribut/footer');
		}

		public function syarat(){
			$judul = "Layanan Pelanggan";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/syarat.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('tampilan/layanan/syarat');
			//============ footer
			$this->load->view('atribut/footer');
		}
	}
?>