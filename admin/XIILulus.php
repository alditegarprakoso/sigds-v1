<?php
include_once '../koneksi.php';

@$jumlah = $_POST['jumlah'] - 1;
@$nisn = array(@$jumlah);
for($i=0; $i<=@$jumlah; $i++){
  @$nisn[$i] = $_POST['nisn'.$i];
  @$sql = "DELETE from siswa WHERE nisn = '".@$nisn[$i]."'";
  mysql_query(@$sql);
  @$sql2 = "DELETE from pelanggaran_siswa WHERE nisn = '".@$nisn[$i]."'";
  mysql_query(@$sql2);
  @$sql3 = "DELETE from print WHERE nisn = '".@$nisn[$i]."'";
  mysql_query(@$sql3);
  
  echo "<script>alert('Berhasil Update');document.location.href='XIInaik.php'</script>/n";
}

?>
