<?php
session_start();
	if(empty($_SESSION['login'])){
		header('location:../login.php');
	}
?>
<html>
<head>
<title>GDS SMK Negeri 1 Ciomas</title>
<link rel="stylesheet" href="../css/entripelanggaran.css" type="text/css">
</head>

<body>
	<div class="bungkus">
		<div class="header">
			<ul>
			  <li><a href="indexadmin.php">Beranda</a></li>
			  <li><a href="tatatertibadmin.php">Tata Tertib</a></li>
			  <li class="active"><a href="entripelanggaran.php">Entri Pelanggaran</a></li>
			  <li><a href="SP.php">SP</a></li>
			  <li><a href="naikkelas.php">KK</a></li>
			  <li><a href="logout.php">Logout</a></li>
			</ul>
			<h3 style="float:right; text-align:center; margin:-43px 20px 0 0;">
			Gerakan Disiplin Sekolah<br>SMK Negeri 1 Ciomas</h3>
			<img src="../images/baru.png" width="auto" height="70px" style="float:left; margin:-55px 0 0 740px;">
			
			<h1 class="h"><a href="entripelanggaran.php">Entri <span>Pelanggaran</span></a></h1>
		</div>
		<div class="content">
			<ul>
				<li><a href="Xadmin.php">X</a></li>
				<li><a href="XIadmin.php">XI</a></li>
				<li><a href="XIIadmin.php">XII</a></li>
			</ul>
		</div>
	</div>
</body>
</html>