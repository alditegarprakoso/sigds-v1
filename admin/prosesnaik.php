<?php
	include '../koneksi.php';
	
	if(isset($_POST['kirim'])){
	$nisn = $_REQUEST['nisn'];
	if($nisn){
	$sql = "select * from siswa where nisn='$nisn'";
	$query = mysql_query($sql);
	$data = mysql_fetch_assoc($query);
	if($data['kelas'] == 'XI'){
		$sql2 = "update siswa set kelas = 'XII' where nisn='$nisn'";
		$point = mysql_query("update siswa set point = 100 where nisn='$nisn'");
		$query2 = mysql_query($sql2);
		echo "<script>alert('Berhasil naik!');document.location.href='XIInaik.php'</script>/n";
	}
	elseif($data['kelas'] == 'X'){
		$sql3 = "update siswa set kelas = 'XI' where nisn='$nisn'";
		$point2 = mysql_query("update siswa set point = 100 where nisn='$nisn'");
		$query3 = mysql_query($sql3);
		echo "<script>alert('Berhasil naik!');document.location.href='XInaik.php'</script>/n";
	}
	elseif($data['kelas'] == 'XII'){
		$sql4 = "delete from pelanggaran_siswa where nisn='$nisn'";
		$query4 = mysql_query($sql4);
		
		$sql5 = "delete from siswa where nisn='$nisn'";
		$query5 = mysql_query($sql5);
		echo "<script>alert('Berhasil naik!');document.location.href='naikkelas.php'</script>/n";
	}
	}
	else{
		echo "<script>alert('Tidak ada siswa yang dicentang');document.location.href='naikkelas.php'</script>/n";
	}
}
?>