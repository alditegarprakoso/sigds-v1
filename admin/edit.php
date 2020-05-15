<?php
	session_start();
	if(empty($_SESSION['login'])){
		header('location:../login.php');
	}
    $nisn = $_REQUEST['nisn'];
    include '../koneksi.php';
    $sql = "select*from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data = mysql_fetch_assoc($query);
    $tgl=date('d');
    $bln=date('m');
  $thn=date('Y');
?>

<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="../css/edit.css" type="text/css">
</head>

<body>
<div class="bungkus">
<form action="prosesedit.php" method="POST">
	<h3 style="float:right; text-align:center; margin:15px 370px 0 0;">
	Gerakan Disiplin Sekolah<br>SMK Negeri 1 Ciomas</h3>
	<img src="../images/baru.png" width="auto" height="70px" style="float:left; margin:5px 0 0 385px;">
  <div class="content">
    <table border="0" align="center" style="margin-bottom:20px;">
        <caption><h2>Edit Siswa</h2></caption>
        <tbody>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><input type="text" name="nisn"  readonly value="<?php echo $data['nisn'] ?>"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
        </tr>

		<tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo $data['kelas'] ?>"></td>
        </tr>
		
		<tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>"></td>
        </tr>
		
		<tr>
            <td>Orang Tua</td>
            <td>:</td>
            <td><input type="text" name="ortu" value="<?php echo $data['namaortu'] ?>"></td>
        </tr>
		
		<tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
        </tr>
		
		<tr>
            <td>Nomor HP</td>
            <td>:</td>
            <td><input type="text" name="nohp" value="<?php echo $data['nohp'] ?>"></td>
        </tr>
		
		</table>

		  <a href="<?php echo $data['kelas'];?>admin.php" class="enjoy-css">Kembali</a>
	      <input type="submit" name="kirim" value="Kirim" class="enjoy-css">
</div>
</form>
</div>
</body>
</html>
