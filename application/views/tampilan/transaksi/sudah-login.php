<div class="row">
	<div class="col-12">
		<div class="form-group">
      <label for="nama">Nama <span class="penting">*</span></label>
      <input type="text" id="nama" class="input-semua" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
    </div>
    <div class="form-group">
      <label for="email">Email <span class="penting">*</span></label>
      <input type="email" id="email" class="input-semua" name="email" value="<?php echo $this->session->userdata('email'); ?>">
    </div>
    <div class="form-group">
      <label for="ktp">No-KTP <span class="penting">*</span></label>
      <input type="text" id="ktp" class="input-semua" name="ktp">
    </div>
    <div class="form-group">
      <label for="sim">No-SIM <span class="penting">*</span></label>
      <input type="text" id="sim" class="input-semua" name="sim">
    </div>
	</div> <!-- Penutup Col -->
</div> <!-- Penutup Row -->
<div class="row">
	<div class="col-6">
		<button class="btn tombol-bayar btn-block" type="submit">Bayar</button>
	</div>
  <div class="col-6">
    <a class="btn tombol-batal btn-block" href="<?php echo base_url('garasi'); ?>">Batal</a>
  </div>
</div>