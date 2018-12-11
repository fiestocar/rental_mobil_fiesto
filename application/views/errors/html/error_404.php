<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Tidak Ada</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
.text{
	display: block;
	text-align: center;
	font-size: 50px;
	font-weight: bold;
	color: #e67e22;
	margin-bottom: 50px;
}
.text-fiesto{
	display: block;
	text-align: center;
	font-size: 40px;
	font-weight: bold;
	color: #e67e22;
	margin-bottom: 50px;
	padding-top: 20px;
	border-top: 5px solid #e67e22;
}
.bg{
	background: #2c3e50;
}
</style>
</head>
<body class="bg">
		<span class="text"><?php echo $heading; ?></span>
		<span class="text"><?php echo $message; ?></span>
		<span class="text" style="margin-top: 200px;">Mohon maaf halaman yang anda tuju</span>
		<span class="text">mungkin belum jadi atau sedang dibuat</span>
		<span class="text-fiesto">Fiesto Car</span>
	<!--div id="container">
		<h1></h1>
	</div-->
</body>
</html>