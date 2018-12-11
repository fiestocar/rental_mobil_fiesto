<div class="container">
	<h3>Tim Kami <i class="fas fa-user-tie"></i></h3>
	<span class="garis mb-2"></span>
	
	<div class="row">
  	
  	<?php for ($i=0; $i < 6; $i++) {?>
		<div class="col-md-6">
		
			<div class="card mb-2 nama">
				<div class="d-flex flex-row">
					<div class="gambar">
						<img src="<?php echo base_url('assets/img/logo_box.png'); ?>" alt="logo_produk">
					</div>
          <div class="d-flex flex-column px-2">
          		<p><?php echo $nama[$i] ?></p>
							<p><?php echo $nim[$i]; ?></p>
							<p><?php echo $kelas; ?></p>
							<p><i class="fab fa-whatsapp"></i> +62 <?php echo $telpon[$i]; ?></p>
          	<div class="">
          	</div>
          </div>
				</div>
			</div> <!-- Penutup card -->

		</div> <!-- Penutup col -->
		<?php } ?>

	
	</div> <!-- Penutup row -->

</div> <!-- Penutup container -->