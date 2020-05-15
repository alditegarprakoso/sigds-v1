<?php
include 'koneksi.php';
    $sql = "select*from detail_siswa";
    $query = mysql_query($sql);
    $data = mysql_fetch_assoc($query);
function datediff($tgl1, $tgl2){
$tgl1 = strtotime($tgl1);
$tgl2 = strtotime($tgl2);
$diff_secs = abs($tgl1 - $tgl2);
$base_year = min(date("Y", $tgl1), date("Y", $tgl2));
$diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);
return array( "years" => date("Y", $diff) - $base_year, "months_total" );
}
$tgl1 = '2016-05-20';
$tgl2 = date("Y/m/d/ h:m:s");
$a = datediff($tgl1, $tgl2);
echo 'tanggal 1 = '.$tgl1; echo '<br>';
echo 'tanggal 2 = '.$tgl2; echo '<br>';
?>