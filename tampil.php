<?php
    $nisn = $_REQUEST['nisn'];
    include 'koneksi.php';
	$sql = "select*from pelanggaran_siswa where nisn = '$nisn'";
	$query = mysql_query($sql);
	$data = mysql_fetch_assoc($query);
?>
<html>
<head>
    <title>Tampil Data</title>
	<link rel="stylesheet" href="css/tampil.css" type="text/css">
</head>
<body>
	
	<?php
		include 'koneksi.php';
		$nisn = $_REQUEST['nisn'];
		$sql2 = "select *from siswa where nisn='$nisn'";
		$query2 = mysql_query($sql2);
		$data2 = mysql_fetch_assoc($query2);
	?>
		
	<div class="bungkus">
		<form action="" method="POST">
			<h3 style="float:right; text-align:center; margin:15px 370px 0 0;">
			Gerakan Disiplin Sekolah<br>SMK Negeri 1 Ciomas</h3>
			<img src="images/baru.png" width="auto" height="70px" style="float:left; margin:5px 0 0 385px;">
			
			<div class="content"> 
				<table border="0" align="center">
					<caption><h2>Detail Pelanggaran</h2></caption>
					<tbody>
						<tr>
							<td>NISN</td>
							<td>:</td>
							<td><input type="text" name="nisn" value="<?php echo $data2['nisn'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" value="<?php echo $data2['nama'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td>:</td>
							<td><input type="text" name="kelas" value="<?php echo $data2['kelas'] ?>" readonly></td>
						</tr>
					</table>
			<br>
		<form method="post">
		<input type="submit" name="x" value="X" class="enjoy-css">
		<input type="submit" name="xi" value="XI" class="enjoy-css">
		<input type="submit" name="xii" value="XII" class="enjoy-css">

		<?php
			if(isset($_POST['x'])){
			
			$sql = "select*from pelanggaran_siswa where nisn = '$nisn' and kelas='X'";
			$query = mysql_query($sql);
			$nomor = 1;
			
			echo	"<h3>Pelanggaran pada kelas X</h3>
					<table class='bordered'>
					<thead>
						<th>No</th>
						<th>Tanggal Pelanggaran</th>
						<th>Pelanggaran</th>
						<th>Point Pelanggaran</th>
					</tr>";

			while($data=mysql_fetch_assoc($query)){
			
			echo '
					<tr>
						<td>'.$nomor.'</td>
						<td>'.$data['tanggal'].'</td>
						<td>'.$data['pelanggaran'].'</td>
						<td>'.$data['point'].'</td>
					</tr>';
				$nomor = $nomor + 1;
			}
			echo 	'</table>';
		}
	?>
	
			<?php
			if(isset($_POST['xi'])){
			
			$sql = "select*from pelanggaran_siswa where nisn = '$nisn' and kelas='XI'";
			$query = mysql_query($sql);
			$nomor = 1;
			
			echo	"<h3>Pelanggaran pada kelas XI</h3>
					<table class='bordered'>
					<thead>
						<th>No</th>
						<th>Tanggal Pelanggaran</th>
						<th>Pelanggaran</th>
						<th>Point Pelanggaran</th>
					</tr>";

			while($data=mysql_fetch_assoc($query)){
			
			echo '
					<tr>
						<td>'.$nomor.'</td>
						<td>'.$data['tanggal'].'</td>
						<td>'.$data['pelanggaran'].'</td>
						<td>'.$data['point'].'</td>
					</tr>';
				$nomor = $nomor + 1;
			}
			echo 	'</table>';
		}
	?>
	
			<?php
			if(isset($_POST['xii'])){
			
			$sql = "select*from pelanggaran_siswa where nisn = '$nisn' and kelas='XII'";
			$query = mysql_query($sql);
			$nomor = 1;
			
			echo	"<h3>Pelanggaran pada kelas XII</h3>
					<table class='bordered'>
					<thead>
						<th>No</th>
						<th>Tanggal Pelanggaran</th>
						<th>Pelanggaran</th>
						<th>Point Pelanggaran</th>
					</tr>";

			while($data=mysql_fetch_assoc($query)){
			
			echo '
					<tr>
						<td>'.$nomor.'</td>
						<td>'.$data['tanggal'].'</td>
						<td>'.$data['pelanggaran'].'</td>
						<td>'.$data['point'].'</td>
					</tr>';
				$nomor = $nomor + 1;
			}
			echo 	'</table>';
		}
	?>
		</form>
			
	<br><br>
	<input type="submit" name="kembali" value="Kembali" class="enjoy-css">
	<?php
	if(isset($_POST['kembali'])){

		if($_POST['kelas'] == 'X')
		{
				header('location:X.php');
		}
		elseif($_POST['kelas']== 'XI')
		{
				header('location:XI.php');
		}
		elseif($_POST['kelas']== 'XII')
		{
				header('location:XII.php');
		}
	}
	?>
	</div>
</div>
</body>
</html>
