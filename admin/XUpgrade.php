<?php
include_once '../koneksi.php';

@$jumlah = $_POST['jumlah'] - 1;
@$nisn = array(@$jumlah);
for($i=0; $i<=@$jumlah; $i++){
  @$nisn[$i] = $_POST['nisn'.$i];
  @$sql = "UPDATE siswa SET kelas = 'XI' WHERE nisn = '".@$nisn[$i]."'";
  mysql_query(@$sql);
  @$sql2 = "UPDATE siswa SET point = '100' WHERE nisn = '".@$nisn[$i]."'";
  mysql_query(@$sql2);
  @$sql3 = "DELETE print WHERE nisn = '".@$nisn[$i]."'";
  mysql_query(@$sql3);
  
  echo "<script>alert('Berhasil Update');document.location.href='XInaik.php'</script>/n";
}

?>