<!-- <h1>Selamat Datang <?php echo $this->session->userdata('nama');?></h1>
<h4>Email Anda : <?php echo $this->session->userdata('email');?></h4>
<h4>Status anda sebagai: <?php echo $this->session->userdata('status');?></h4>
<h4>Keterangan: <?php echo $this->session->userdata('ket');?></h4> -->

<div class="container">
	<h3>Akunku <i class="fas fa-user-circle"></i></h3>
	<span class="garis mb-2"></span>

	<div class="row">
		<div class="col-12">

			<div class="d-flex flex-column kotak">
				<div class="align-self-center">
					<div class="gambar">
						<img src="<?php echo base_url('assets/img/logo_box.png'); ?>" alt="">
					</div>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Nama</p>
					<p><?php echo $this->session->userdata('nama');?></p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Email</p>
					<p><?php echo $this->session->userdata('email');?></p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Status</p>
					<p><?php echo $this->session->userdata('status');?></p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>No-KTP</p>
					<p>-</p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>No-SIM</p>
					<p>-</p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>No Telepon</p>
					<p>-</p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Alamat</p>
					<p>-</p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Jenis Kelamin</p>
					<p>-</p>
				</div>
				
			</div> <!-- Penutup d-flex -->

		</div> <!-- Penutup col -->

	</div> <!-- Penutup row -->

</div> <!-- Penutup container -->