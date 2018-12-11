<?php echo $this->session->flashdata('gagal_masuk') ?>

<div class="d-flex justify-content-center">
  <?php echo form_open('masuk/proses_masuk',array('class'=>'form')); ?>
    <span class="h3 mb-3 kata-judul">Masuk</span>
    <span class="garis"></span>
    <div class="form-group">
      <label for="email" class="font-weight-bold">Email <i class="fas fa-envelope"></i></label>
      <input type="email" id="email" class="form-control" name="email" required autofocus>
    </div>
    <div class="form-group">
      <label for="kata_sandi" class="font-weight-bold">Kata Sandi <i class="fas fa-key"></i></label>
      <input type="password" id="kata_sandi" class="form-control" name="kata_sandi" required>
    </div>
    <button class="btn tombol btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Masuk</button>
    <p class="atau">atau</p>
    <a class="btn tombol-daftar btn-block" href="<?php echo base_url('daftar'); ?>"><i class="fas fa-edit"></i>  Daftar</a>
  </form>
</div>