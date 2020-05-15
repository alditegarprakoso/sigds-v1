<?php
session_start();
	if(empty($_SESSION['login'])){
		header('location:../login.php');
	}
?>
<html>
<head>
<title>GDS SMK Negeri 1 Ciomas</title>
<link rel="stylesheet" href="../css/nk.css" type="text/css">
<script type="text/javascript" src="../js/selectall.js"></script>
<script src="../js/jquery.min.js" charset="utf-8"></script>
</head>

<body>
	<div class="bungkus">
		<div class="header">
			<ul>
			  <li><a href="indexadmin.php">Beranda</a></li>
			  <li><a href="tatatertibadmin.php">Tata Tertib</a></li>
			  <li><a href="entripelanggaran.php">Entri Pelanggaran</a></li>
			  <li><a href="SP.php">SP</a></li>
			  <li class="active"><a href="naikkelas.php">KK</a></li>
			  <li><a href="logout.php">Logout</a></li>
			</ul>
			<h3 style="float:right; text-align:center; margin:-43px 20px 0 0;">
			Gerakan Disiplin Sekolah<br>SMK Negeri 1 Ciomas</h3>
			<img src="../images/baru.png" width="auto" height="70px" style="float:left; margin:-55px 0 0 740px;">

			<h1 class="h"><a href="naikkelas.php">Kenaikkan <span>Kelas</span></a></h1>
			<p align="left" style="margin-left:20px;">Perhatian :<br>
		Untuk modul Kenaikkan Kelas ini, diharuskan untuk meng-update dari kelas 12 terlebih dahulu<br>
		Lalu selanjutnya kelas 11 dan terakhir kelas 10</p>
		</div>
		<div class="content">
		<form action="XUpgrade.php" method="post">

			<ul>
				<li class="active"><a href="Xnaik.php">X</a></li>
				<li><a href="XInaik.php">XI</a></li>
				<li><a href="XIInaik.php">XII</a></li>
			</ul>
			<h2 style="margin-top:10px;">Daftar Siswa</h2>
			<input type="checkbox" onClick="toggle(this)" style="margin:0 0 0 870px; text-align:center;">
			<b>Pilih Semua</b>
		<table class="bordered" style="margin-bottom:10px;">
		<thead>
			<th>NISN</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Orang Tua</th>
			<th>Alamat</th>
			<th>Nomor HP</th>
			<th>Point</th>
			<th>Status</th>
		</thead>

		<tbody>
		<?php
		include '../koneksi.php';
		$sql = "select * from siswa where kelas='X'";
		$query = mysql_query($sql);
		$i = 0;
		while ($data = mysql_fetch_assoc($query)){
			?>
			<tr>
				<td><?php echo $data['nisn']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['kelas']; ?></td>
				<td><?php echo $data['jurusan'];  ?></td>
				<td><?php echo $data['namaortu']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['nohp']; ?></td>
				<td><?php echo $data['point']; ?></td>
				<td><input class="nisn" type="checkbox" name="nisn<?=$i;?>" value="<?php echo $data['nisn']; ?>">Naik</a></td>
			</tr>
		<?php
		$i = $i + 1;
		}
		?>
		<input type="hidden" name="jumlah" value="<?php echo $i; ?>">
		</tbody>
		</table>
		<input type="submit" name="kirim" value="Kirim" class="enjoy-css" style="margin-bottom:10px;">
		</div>
		</form>
	</div>
</body>
</html>
