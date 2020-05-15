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
    <title>Entri Pelanggaran</title>
    <link rel="stylesheet" href="../css/entriForm.css" type="text/css">
</head>

<body>
<div class="bungkus">
<form action="kurangpoint.php" method="POST">
	<h3 style="float:right; text-align:center; margin:15px 370px 0 0;">
	Gerakan Disiplin Sekolah<br>SMK Negeri 1 Ciomas</h3>
	<img src="../images/baru.png" width="auto" height="70px" style="float:left; margin:5px 0 0 385px;">
    
  <div class="content">
	<table border="0" align="center">
        <caption><h2>Entri Pelanggaran</h2></caption>
        <tbody>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><input type="text" name="nisn" value="<?php echo $data['nisn'] ?>" readonly></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>" readonly></td>
        </tr>

		<tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo $data['kelas'] ?>" readonly></td>
        </tr>

		<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td>
		<?php
			echo"<select name=tanggal readonly><option value=$tgl>$tgl</option></select>";
			echo"<select name=bulan readonly><option value=$bln>$bln</option></select>";
			echo"<select name=tahun readonly><option value=$thn>$thn</option></select>";
        ?>
		</td>
		</tr>
		</table>

        <table style="margin:2% 0 5% 34%;"align="center">
        <tr><td><input type="checkbox" name="pelanggaran1" value="01">Tidak Memakai Atribut</td></tr>
        <tr><td><input type="checkbox" name="pelanggaran2" value="02">Terlambat</td></tr>
        <tr><td><input type="checkbox" name="pelanggaran3" value="03">Memakai Aksesoris</td></tr>
        <tr><td><input type="checkbox" name="pelanggaran4" value="04">Memakai jaket/topi bebas</td></tr>
        <tr><td><input type="checkbox" name="pelanggaran5" value="05">Rambut Tidak Sesuai Aturan</td></tr>
        <tr><td><input type="checkbox" name="pelanggaran6" value="06">Tidak Memakai Helm</td></tr>
        </table>

		  <a href="<?php echo $data['kelas']; ?>admin.php" class="enjoy-css">Kembali</a>
	      <input type="submit" name="kirim" value="Entri" class="enjoy-css">
</div>
</form>
</div>
</body>
</html>
