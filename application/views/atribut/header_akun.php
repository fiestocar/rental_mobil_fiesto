<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fiesto/main.css'); ?>">
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
      <a class="py-2" href="#">
        <div class="logo"></div>
      </a>
    </div>
  </nav>
  <nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <div class="align-self-start">
        <a class="py-2 d-none d-md-inline-block text-header" href="<?php echo base_url(); ?>">Beranda</a>
        <a class="py-2 d-none d-md-inline-block text-header" href="#">Tentang</a>
      </div>
      <div class="align-self-end">
        <a href="<?php echo base_url('fiesto/keluar'); ?>" class="btn tombol-gabung">Daftar</a>
      </div>
    </div>
  </nav>
  <div class="wrapper">