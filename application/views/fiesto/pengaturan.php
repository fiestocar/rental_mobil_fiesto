<!-- <h1>Selamat Datang <?php echo $this->session->userdata('nama');?></h1>
<h4>Email Anda : <?php echo $this->session->userdata('email');?></h4>
<h4>Status anda sebagai: <?php echo $this->session->userdata('status');?></h4>
<h4>Keterangan: <?php echo $this->session->userdata('ket');?></h4> -->

<div class="container">
	<h3>Akunku <i class="fas fa-edit"></i></h3>
	<span class="garis mb-2"></span>

	<div class="row">
		<div class="col-12">

			<div class="d-flex flex-column kotak">
				<div class="align-self-center">
					<div class="gambar">
						<img src="<?php echo base_url('assets/img/logo_box.png'); ?>" alt="">
						<div class="plus">
							<img src="<?php echo base_url('assets/img/plus.png'); ?>" alt="">
						</div>
					</div>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Nama</p>
					<input type="text" class="input-semua" placeholder="<?php echo $this->session->userdata('nama');?>">
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Email</p>
					<input type="text" class="input-semua" placeholder="<?php echo $this->session->userdata('email');?>">
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Status</p>
					<input type="text" class="input-semua" placeholder="<?php echo $this->session->userdata('status');?>">
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>No-KTP</p>
					<p><span class="penting">Hubungi Administrator</span></p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>No-SIM</p>
					<p><span class="penting">Hubungi Administrator</span></p>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>No Telepon</p>
					<p><span class="penting-hijau">Perlu Verifikasi</span></p>
					<input type="text" class="input-semua" placeholder="+62 08xx-xxxx-xxxx">
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Alamat</p>
					<textarea name="" id="" cols="50" rows="5" class="input-semua" placeholder="Alamat"></textarea>
				</div>

				<div class="d-flex flex-row justify-content-between kotak-dalam">
					<p>Jenis Kelamin</p>
					<select name="jekel">
      			<option value="">-- Pilih --</option>
      			<option value="">Laki-laki</option>
      			<option value="">Perempuan</option>
      		</select>
				</div>
				
			</div> <!-- Penutup d-flex -->

		</div> <!-- Penutup col -->

	</div> <!-- Penutup row -->

</div> <!-- Penutup container -->