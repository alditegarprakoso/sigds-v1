<?php
	include '../koneksi.php';
	$nisn = $_REQUEST['nisn'];
	
	$sql = "delete from siswa where nisn='$nisn'";
	$sql2 = "delete from pelanggaran_siswa where nisn='$nisn'";
	$sql3 = "delete from print where nisn='$nisn'";
	$mysql = mysql_query($sql);
	$query = mysql_query($sql2);
	$query2 = mysql_query($sql3);
	
	if($mysql && $query && $query2){
		echo "<script>alert('Data berhasil dihapus');document.location.href='entripelanggaran.php'</script>/n";
	}
?>