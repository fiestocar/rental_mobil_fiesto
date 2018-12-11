<div class="d-flex justify-content-center">
  <?php echo form_open('daftar/daftar_member',array('class'=>'form')); ?>
    <span class="h3 mb-3 kata-judul">Daftar</span>
    <span class="garis"></span>
    <div class="form-group">
      <label for="nama">Nama <span class="penting">*</span></label>
      <input type="text" id="nama" class="form-control" name="nama" required autofocus>
    </div>
    <div class="form-group">
      <label for="email">Email <span class="penting">*</span></label>
      <input type="email" id="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
      <label for="ktp">No-KTP <span class="penting">*</span></label>
      <input type="text" id="ktp" class="form-control" name="ktp" required>
    </div>
    <div class="form-group">
      <label for="sim">No-SIM</label>
      <input type="text" id="sim" class="form-control" name="sim">
    </div>
    <div class="form-group">
      <label for="kata_sandi">Kata Sandi <span class="penting">*</span></label>
      <input type="password" id="kata_sandi" class="form-control" name="kata_sandi" required>
    </div>
    <div class="custom-control custom-checkbox my-2">
      <input type="checkbox" class="custom-control-input" id="same-address" name="setuju">
      <label class="custom-control-label" for="same-address">Setuju dengan syarat & ketentuan yang berlaku</label>
    </div>
    <button class="btn tombol btn-block" type="submit"><i class="fas fa-edit"></i> Daftar</button>
    <label><span class="penting">*</span> Harus diisi</label>
  </form>
</div>