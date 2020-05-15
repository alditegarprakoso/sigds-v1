<?php
session_start();
	if(empty($_SESSION['login'])){
		header('location:../login.php');
	}
?>
<html>
<head>
<title>GDS SMK Negeri 1 Ciomas</title>
<link rel="stylesheet" href="../css/indexadmin.css" type="text/css">
</head>

<body>
	<div class="bungkus">
		<div class="header">
			<ul>
			  <li class="active"><a href="indexadmin.php">Beranda</a></li>
			  <li><a href="tatatertibadmin.php">Tata Tertib</a></li>
			  <li><a href="entripelanggaran.php">Entri Pelanggaran</a></li>
			  <li><a href="SP.php">SP</a></li>
			  <li><a href="naikkelas.php">KK</a></li>
			  <li><a href="logout.php">Logout</a></li>
			</ul>
			<h3 style="float:right; text-align:center; margin:-43px 20px 0 0;">
			Gerakan Disiplin Sekolah<br>SMK Negeri 1 Ciomas</h3>
			<img src="../images/baru.png" width="auto" height="70px" style="float:left; margin:-55px 0 0 740px;">
			
			<h1 class="h"><a href="indexadmin.php">Selamat <span>Datang di </span>SIGDS</a></h1>
		</div>
		<div class="content">
			<h2 style="margin-top:10px;">Daftar Siswa yang Melanggar</h2>
    <table class="bordered">
    <thead>
        <th>NISN</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Orang Tua</th>
        <th>Alamat</th>
        <th>Nomor HP</th>
        <th>Point</th>
    </thead>

    <tbody>
    <?php
    include '../koneksi.php';
    $sql = "select * from siswa where point<100";
    $query = mysql_query($sql);
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
        </tr>
    <?php
    }
    ?>
		</tbody>
	</table>
	</div>
	</div>
</body>
</html>