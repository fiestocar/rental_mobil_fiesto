<div class="container">
	<div class="row">
		<div class="col-md-5">
			<form action="" class="form">
				<div class="row">
	        <div class="col-6 mb-1">
	          <label for="pinjam">Tanggal Pinjam</label>
	          <input type="date" class="input-semua" id="pinjam" name="pinjam" placeholder="" value="" required>
	        </div>
	        <div class="col-6 mb-1">
	          <label for="pinjam">Tanggal Kembali</label>
	          <input type="date" class="input-semua" id="pinjam" name="kembali" placeholder="" value="" required>
	        </div>
	      </div>
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
	      </div>
	      <div class="row">
	      	<div class="col">
	      		<!-- <button type="submit" class="btn tombol-cari btn-block"><i class="fas fa-search"></i> Cari Mobil</button> -->
	      		<a class="btn tombol-cari btn-block" href="<?php echo base_url('pencarian'); ?>"><i class="fas fa-search"></i> Cari Mobil</a>
	      	</div>
	      </div>
			</form>
		</div>
		<div class="col-md-7 hasil-pencarian">
			<h3>Hasil Pencarian <i class="fas fa-th-large"></i></h3>
			<span class="garis mb-2"></span>

			<?php for ($i=0; $i < 3; $i++) { ?>
			<div class="card mb-2">
				<div class="d-flex flex-row">
					<div class="gambar">
						<img src="<?php echo base_url('assets/img/logo_box.png'); ?>" alt="logo_produk">
					</div>
          <div class="d-flex flex-column justify-content-between ml-2 detail">
          	<h5>Nama Mobil</h5>
          	<p><i class="fas fa-calendar-alt ml-1"></i> 2018</p>
          	<p>
          		<i class="fas fa-car ml-1"></i> MPV
          	</p>
          	<p>
          		<i class="fas fa-cogs ml-1"></i> AT
          	</p>
          	<p>
          		<i class="fas fa-user ml-1"></i> 6
          	</p>
          </div>
          <div class="d-flex flex-column justify-content-between ml-auto px-1">
          	<h5>Rp.<span class="harga">200.000</span></h5>
          	<p><i class="fas fa-map-marker-alt"></i> Jakarta</p>
          	
          	<div class="d-flex flex-row">
          		<a href="<?php echo base_url('fiesto/garasi'); ?>" class="btn tombol-garasi btn-block m-1">Garasiku</a>
          		<a href="<?php echo base_url('transaksi'); ?>" class="btn tombol-cari btn-block my-1">Sewa</a>
          	</div>

          </div>
				</div>
			</div>
			<?php } ?>

		</div>
	</div> <!-- Penutup Row -->
	<div class="row">
		<div class="col">

		</div>
	</div>
</div>