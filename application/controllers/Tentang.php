<?php 

	class Tentang extends CI_Controller{
		
		function __construct(){
			parent::__construct();

		}

		public function index(){
			$nama = array(
				'Irfan Nugraha',
				'Bagus Alfiras',
				'Irsyad zain ismail',
				'Wisnu Kristanto',
				'William Nugraho',
				'Danang derani putra'
			);
			$nim = array(
				'1216',
				'12163958',
				'12166654',
				'12166670',
				'1216',
				'1216'
			);
			$telpon = array(
				'852-1091-5843',
				'812-9373-9848',
				'819-1170-2246',
				'838-1183-8345',
				'895-0931-3508',
				'858-8508-6477'
			);
			$kelas = "12.5A.39";

			$judul = "Tim Kami";
			$data['judul'] = $judul;
			$data['nama'] = $nama;
			$data['nim'] = $nim;
			$data['kelas'] = $kelas;
			$data['telpon'] = $telpon;
			$data['custom_css_1'] = base_url('assets/css/fiesto/tentang.css');
			$data['custom_css_2'] = "";
			$data['custom_css_3'] = "";
			$header = $this->session->userdata('header');
			// data 
			$this->load->view($header,$data);
			//============ header
			$this->load->view('tampilan/tentang');
			//============ footer
			$this->load->view('atribut/footer');
		}
	}

 ?>