<?php
	include '../koneksi.php';
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];
	$ortu = $_POST['ortu'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	
	$sql = "update siswa set nama='$nama', kelas='$kelas', jurusan='$jurusan', namaortu='$ortu', alamat='$alamat', nohp='$nohp' where nisn='$nisn'";
	$query = mysql_query($sql);
	
	if($kelas == 'X'){
		echo "<script>alert('Berhasil edit!');document.location.href='Xadmin.php'</script>/n";
    }
    elseif($kelas== 'XI'){
       echo "<script>alert('Berhasil edit!');document.location.href='XIadmin.php'</script>/n";
    }
    elseif($kelas== 'XII'){
        echo "<script>alert('Berhasil edit!');document.location.href='XIIadmin.php'</script>/n";
    }
?>