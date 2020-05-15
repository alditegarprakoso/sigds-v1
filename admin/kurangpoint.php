<?php
session_start();
	if(empty($_SESSION['login'])){
		header('location:../login.php');
	}
include '../koneksi.php';
$nisn2 = $_POST['nisn'];

if(isset($_POST['pelanggaran1'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

    $sql = "select * from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data= mysql_fetch_assoc($query);

    $sql2 = "select * from pelanggaran where kode_pelanggaran = 01";
    $query2 = mysql_query($sql2);
    $data2= mysql_fetch_assoc($query2);
	
	$tgl = $_POST['tanggal'];
	$bln = $_POST['bulan'];
	$thn = $_POST['tahun'];
	$t = $thn.'-'.$bln.'-'.$tgl;
	
	$p = $data2['pelanggaran'];
	$p2 = $data2['point_pelanggaran'];
	
	$ps = "select * from pelanggaran_siswa where nisn='$nisn' AND pelanggaran='$p'";
	$ps2 = mysql_query($ps);
	$data_ps = mysql_fetch_assoc($ps2);
	
	if( $t == $data_ps['tanggal'] && $data_ps['pelanggaran'] == $data2['pelanggaran'] && $nisn == $data_ps['nisn']){
		echo "<script>alert('Pelanggaran sudah dientri!');document.location.href='entriForm.php?nisn=$nisn2'</script>/n";
	}
	else {
		
    $point = $data['point'] + $data2['point_pelanggaran'];
    $hasil = "update siswa set point='$point' where nisn='$nisn'";
    mysql_query($hasil);
	
	$p4 = "insert into pelanggaran_siswa(nisn,nama,kelas,tanggal,pelanggaran,point)
		   values ('$nisn','$nama','$kelas','$thn-$bln-$tgl','$p','$p2')";
    mysql_query($p4);
	}
    
	if($data['kelas'] == 'X'){
		echo "<script>alert('Berhasil entri!');document.location.href='Xadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XI'){
       echo "<script>alert('Berhasil entri!');document.location.href='XIadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XII'){
        echo "<script>alert('Berhasil entri!');document.location.href='XIIadmin.php'</script>/n";
    }
}

if(isset($_POST['pelanggaran2'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

    $sql = "select * from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data= mysql_fetch_assoc($query);

    $sql2 = "select * from pelanggaran where kode_pelanggaran = 02";
    $query2 = mysql_query($sql2);
    $data2= mysql_fetch_assoc($query2);
	
	$tgl = $_POST['tanggal'];
	$bln = $_POST['bulan'];
	$thn = $_POST['tahun'];
	$t = $thn.'-'.$bln.'-'.$tgl;
	
	$p = $data2['pelanggaran'];
	$p2 = $data2['point_pelanggaran'];
	
	$ps = "select * from pelanggaran_siswa where nisn='$nisn' AND pelanggaran='$p'";
	$ps2 = mysql_query($ps);
	$data_ps = mysql_fetch_assoc($ps2);
	
	if( $t == $data_ps['tanggal'] && $data_ps['pelanggaran'] == $data2['pelanggaran'] && $nisn == $data_ps['nisn']){
		echo "<script>alert('Pelanggaran sudah dientri!');document.location.href='entriForm.php?nisn=$nisn2'</script>/n";
	}
	else {
		
    $point = $data['point'] + $data2['point_pelanggaran'];
    $hasil = "update siswa set point='$point' where nisn='$nisn'";
    mysql_query($hasil);
	
	$p4 = "insert into pelanggaran_siswa(nisn,nama,kelas,tanggal,pelanggaran,point)
		   values ('$nisn','$nama','$kelas','$thn-$bln-$tgl','$p','$p2')";
    mysql_query($p4);
	}
    
	if($data['kelas'] == 'X'){
		echo "<script>alert('Berhasil entri!');document.location.href='Xadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XI'){
       echo "<script>alert('Berhasil entri!');document.location.href='XIadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XII'){
        echo "<script>alert('Berhasil entri!');document.location.href='XIIadmin.php'</script>/n";
    }
}

if(isset($_POST['pelanggaran3'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

    $sql = "select * from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data= mysql_fetch_assoc($query);

    $sql2 = "select * from pelanggaran where kode_pelanggaran = 03";
    $query2 = mysql_query($sql2);
    $data2= mysql_fetch_assoc($query2);
	
	$tgl = $_POST['tanggal'];
	$bln = $_POST['bulan'];
	$thn = $_POST['tahun'];
	$t = $thn.'-'.$bln.'-'.$tgl;
	
	$p = $data2['pelanggaran'];
	$p2 = $data2['point_pelanggaran'];
	
	$ps = "select * from pelanggaran_siswa where nisn='$nisn' AND pelanggaran='$p'";
	$ps2 = mysql_query($ps);
	$data_ps = mysql_fetch_assoc($ps2);
	
	if( $t == $data_ps['tanggal'] && $data_ps['pelanggaran'] == $data2['pelanggaran'] && $nisn == $data_ps['nisn']){
		echo "<script>alert('Pelanggaran sudah dientri!');document.location.href='entriForm.php?nisn=$nisn2'</script>/n";
	}
	else {
		
    $point = $data['point'] + $data2['point_pelanggaran'];
    $hasil = "update siswa set point='$point' where nisn='$nisn'";
    mysql_query($hasil);
	
	$p4 = "insert into pelanggaran_siswa(nisn,nama,kelas,tanggal,pelanggaran,point)
		   values ('$nisn','$nama','$kelas','$thn-$bln-$tgl','$p','$p2')";
    mysql_query($p4);
	}
    
	if($data['kelas'] == 'X'){
		echo "<script>alert('Berhasil entri!');document.location.href='Xadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XI'){
       echo "<script>alert('Berhasil entri!');document.location.href='XIadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XII'){
        echo "<script>alert('Berhasil entri!');document.location.href='XIIadmin.php'</script>/n";
    }
}

if(isset($_POST['pelanggaran4'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

    $sql = "select * from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data= mysql_fetch_assoc($query);

    $sql2 = "select * from pelanggaran where kode_pelanggaran = 04";
    $query2 = mysql_query($sql2);
    $data2= mysql_fetch_assoc($query2);
	
	$tgl = $_POST['tanggal'];
	$bln = $_POST['bulan'];
	$thn = $_POST['tahun'];
	$t = $thn.'-'.$bln.'-'.$tgl;
	
	$p = $data2['pelanggaran'];
	$p2 = $data2['point_pelanggaran'];
	
	$ps = "select * from pelanggaran_siswa where nisn='$nisn' AND pelanggaran='$p'";
	$ps2 = mysql_query($ps);
	$data_ps = mysql_fetch_assoc($ps2);
	
	if( $t == $data_ps['tanggal'] && $data_ps['pelanggaran'] == $data2['pelanggaran'] && $nisn == $data_ps['nisn']){
		echo "<script>alert('Pelanggaran sudah dientri!');document.location.href='entriForm.php?nisn=$nisn2'</script>/n";
	}
	else {
		
    $point = $data['point'] + $data2['point_pelanggaran'];
    $hasil = "update siswa set point='$point' where nisn='$nisn'";
    mysql_query($hasil);
	
	$p4 = "insert into pelanggaran_siswa(nisn,nama,kelas,tanggal,pelanggaran,point)
		   values ('$nisn','$nama','$kelas','$thn-$bln-$tgl','$p','$p2')";
    mysql_query($p4);
	}
    
	if($data['kelas'] == 'X'){
		echo "<script>alert('Berhasil entri!');document.location.href='Xadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XI'){
       echo "<script>alert('Berhasil entri!');document.location.href='XIadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XII'){
        echo "<script>alert('Berhasil entri!');document.location.href='XIIadmin.php'</script>/n";
    }
}

if(isset($_POST['pelanggaran5'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

    $sql = "select * from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data= mysql_fetch_assoc($query);

    $sql2 = "select * from pelanggaran where kode_pelanggaran = 05";
    $query2 = mysql_query($sql2);
    $data2= mysql_fetch_assoc($query2);
	
	$tgl = $_POST['tanggal'];
	$bln = $_POST['bulan'];
	$thn = $_POST['tahun'];
	$t = $thn.'-'.$bln.'-'.$tgl;
	
	$p = $data2['pelanggaran'];
	$p2 = $data2['point_pelanggaran'];
	
	$ps = "select * from pelanggaran_siswa where nisn='$nisn' AND pelanggaran='$p'";
	$ps2 = mysql_query($ps);
	$data_ps = mysql_fetch_assoc($ps2);
	
	if( $t == $data_ps['tanggal'] && $data_ps['pelanggaran'] == $data2['pelanggaran'] && $nisn == $data_ps['nisn']){
		echo "<script>alert('Pelanggaran sudah dientri!');document.location.href='entriForm.php?nisn=$nisn2'</script>/n";
	}
	else {
		
    $point = $data['point'] + $data2['point_pelanggaran'];
    $hasil = "update siswa set point='$point' where nisn='$nisn'";
    mysql_query($hasil);
	
	$p4 = "insert into pelanggaran_siswa(nisn,nama,kelas,tanggal,pelanggaran,point)
		   values ('$nisn','$nama','$kelas','$thn-$bln-$tgl','$p','$p2')";
    mysql_query($p4);
	}
    
	if($data['kelas'] == 'X'){
		echo "<script>alert('Berhasil entri!');document.location.href='Xadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XI'){
       echo "<script>alert('Berhasil entri!');document.location.href='XIadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XII'){
        echo "<script>alert('Berhasil entri!');document.location.href='XIIadmin.php'</script>/n";
    }
}

if(isset($_POST['pelanggaran6'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];

    $sql = "select * from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data= mysql_fetch_assoc($query);

    $sql2 = "select * from pelanggaran where kode_pelanggaran = 06";
    $query2 = mysql_query($sql2);
    $data2= mysql_fetch_assoc($query2);
	
	$tgl = $_POST['tanggal'];
	$bln = $_POST['bulan'];
	$thn = $_POST['tahun'];
	$t = $thn.'-'.$bln.'-'.$tgl;
	
	$p = $data2['pelanggaran'];
	$p2 = $data2['point_pelanggaran'];
	
	$ps = "select * from pelanggaran_siswa where nisn='$nisn' AND pelanggaran='$p'";
	$ps2 = mysql_query($ps);
	$data_ps = mysql_fetch_assoc($ps2);
	
	if( $t == $data_ps['tanggal'] && $data_ps['pelanggaran'] == $data2['pelanggaran'] && $nisn == $data_ps['nisn']){
		echo "<script>alert('Pelanggaran sudah dientri!');document.location.href='entriForm.php?nisn=$nisn2'</script>/n";
	}
	else {
		
    $point = $data['point'] + $data2['point_pelanggaran'];
    $hasil = "update siswa set point='$point' where nisn='$nisn'";
    mysql_query($hasil);
	
	$p4 = "insert into pelanggaran_siswa(nisn,nama,kelas,tanggal,pelanggaran,point)
		   values ('$nisn','$nama','$kelas','$thn-$bln-$tgl','$p','$p2')";
    mysql_query($p4);
	}
    
	if($data['kelas'] == 'X'){
		echo "<script>alert('Berhasil entri!');document.location.href='Xadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XI'){
       echo "<script>alert('Berhasil entri!');document.location.href='XIadmin.php'</script>/n";
    }
    elseif($data['kelas']== 'XII'){
        echo "<script>alert('Berhasil entri!');document.location.href='XIIadmin.php'</script>/n";
    }
}
if(!isset($_POST['pelanggaran1']) && !isset($_POST['pelanggaran2']) && !isset($_POST['pelanggaran3']) && !isset($_POST['pelanggaran4']) && !isset($_POST['pelanggaran5']) && !isset($_POST['pelanggaran6']) ){
	echo "<script>alert('Tidak ada pelanggaran yang dientri!');document.location.href='entriForm.php?nisn=$nisn2'</script>/n";
}
?>
