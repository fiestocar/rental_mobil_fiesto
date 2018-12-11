<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fiesto/main.css'); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $custom_css_1; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $custom_css_2; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $custom_css_3; ?>">
</head>
<body>
	<!--header>
    <nav class="navbar navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
    </nav>
  </header-->
  <nav class="site-header st-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="<?php echo base_url(); ?>">
        <div class="logo">
          <img src="<?php echo base_url('assets/img/logo_box.png') ?>">
        </div>
      </a>
    </div>
  </nav>
  <nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-row justify-content-between">
      <div class="align-self-start">
        <!-- <a class="py-2 d-none d-md-inline-block text-header" href="<?php echo base_url('supirfiesto'); ?>">Akunku</a> -->
        <!-- <a class="py-2 d-none d-inline-block text-header" href="<?php echo base_url(); ?>">Beranda</a> -->
      </div>
      <div class="align-self-end">
        
        <div class="btn tombol-akun dropdown">
          <span class="font-weight-bold"><?php echo $this->session->userdata('nama'); ?></span>
          <div class="dropdown-content">
            <p>Status: <?php echo $this->session->userdata('status'); ?></p>
            <a href="<?php echo base_url('supirfiesto'); ?>">Akunku</a>
            <a href="<?php echo base_url('supirfiesto/jadwal'); ?>">Jadwalku</a>
            <a href="<?php echo base_url('supirfiesto/keluar'); ?>">Keluar</a>
          </div>
        </div>

      </div>
    </div>
  </nav>
  <div class="wrapper">