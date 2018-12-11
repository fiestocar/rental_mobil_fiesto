<?php 

	class Transaksi extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			// if (!$this->session->userdata('ket') == 'masuk') {
			// 	redirect(base_url());
			// }
		}

		public function index(){
			$judul = "Transaksi";
			$data['judul'] = $judul;
			$data['custom_css_1'] = base_url('assets/css/fiesto/transaksi.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('tampilan/transaksi/transaksi');
			//============ footer
			$this->load->view('atribut/footer');
		}
	}

 ?>