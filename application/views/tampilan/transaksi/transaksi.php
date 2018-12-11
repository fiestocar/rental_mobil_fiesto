<div class="container traksaksi">
	<h3>Transaksi <i class="fas fa-money-check"></i></h3>
	<span class="garis mb-2"></span>


	<div class="row">

		<div class="col-md-4">
			<div class="d-flex flex-row text-sub">
				<span class="garis" style="width: 50px;"></span>
				<p style="width: 150px;">Data Mobil</p>
				<span class="garis"></span>
			</div>
			
			<div class="card">
				<div class="gambar text-center">
					<img src="<?php echo base_url('assets/img/logo_box.png'); ?>" alt="Gambar Mobil">
				</div>
				<div class="card-body">
					<!-- <div class="d-flex flex-column justify-content-between"> -->
						<span class="garis mb-1"></span>
						<h4>Nama Mobil</h4>
						<h5 class="text-muted"><i class="fas fa-calendar-alt"></i> 2018</h5>
						<p class="h5"><i class="fas fa-car"></i> MPV</p>
						<p class="h5"><i class="fas fa-cogs"></i> AT</p>
						<p class="h5"><i class="fas fa-user"></i> 6</p>
						<h4>Rp.<span class="harga">200.000</span></h4>
					<!-- </div> -->
				</div>
			</div> <!-- Penutup Card -->
		</div> <!-- Penutup Col -->
	
		<div class="col-md-8">
			<div class="d-flex flex-row text-sub">
				<span class="garis" style="width: 50px;"></span>
				<p style="width: 200px;">Data Penyewaan</p>
				<span class="garis"></span>
			</div>

			<form action="" class="form">
				<div class="row text-center">
					<div class="col-12">
						<div class="row">
			        <div class="col-6 mb-1">
			          <label for="pinjam">Tanggal Pinjam</label>
			          <input type="date" class="input-semua" id="pinjam" name="pinjam" placeholder="" value="" required>
			        </div>
			        <div class="col-6 mb-1">
			          <label for="pinjam">Tanggal Kembali</label>
			          <input type="date" class="input-semua" id="pinjam" name="kembali" placeholder="" value="" required>
			        </div>
			      </div> <!-- Penutup Row -->
			      <div class="row">
			      	<div class="col-6">
			          <label for="wilayah">Wilayah</label>
			      		<select name="wilayah">
			      			<option value="">Jakarta</option>
			      			<option value="">Bogor</option>
			      			<option value="">Depok</option>
			      			<option value="">Tangerang</option>
			      			<option value="">Bekasi</option>
			      		</select>
			      	</div>
			      	<div class="col-6">
			          <label for="jumlah">Jumlah Sewa</label>
			      		<select name="jumlah">
			      			<option value="">1</option>
			      			<option value="">2</option>
			      		</select>
			      	</div>
			      </div> <!-- Penutup Row -->
			      <div class="row">
			      	<div class="col">
			          <label for="jumlah">Tambahan</label>
			      		<select name="jumlah">
			      			<option value="">Tanpa Supir</option>
			      			<option value="">Dengan Supir</option>
			      			<option value="">Plus Bensin</option>
			      			<option value="">Plus Bensin + Dengan Supir</option>
			      		</select>
			      	</div>
			      </div>
					</div>
				</div> <!-- Penutup Row -->

				<div class="d-flex flex-row text-sub mt-2">
					<span class="garis" style="width: 50px;"></span>
					<p style="width: 110px;">Data Anda</p>
					<span class="garis"></span>
				</div>

				<?php switch ($this->session->userdata('status')) {
					case 'member':
						$this->load->view('tampilan/transaksi/sudah-login');
						break;
					case '':
						$this->load->view('tampilan/transaksi/belum-login');
						break;
				} ?>

			</form> <!-- Penutup Form -->

		</div> <!-- Penutup col-md-7 -->

	</div> <!-- Penutup Row -->

</div> <!-- Penutup Container -->