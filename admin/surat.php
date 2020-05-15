<?php
	include '../koneksi.php';
	ob_start();
	$nisn = $_REQUEST['nisn'];
	$sql = "select*from siswa where nisn = '$nisn'";
    $query = mysql_query($sql);
    $data = mysql_fetch_assoc($query);
	$t = date('d');
	$m = date('M');
	$y = date('Y');
	switch($m){
		case "January": $m = "Januari"; break;
		case "February": $m = "Februari"; break;
		case "March": $m = "Maret"; break;
		case "May": $m = "Mei"; break;
		case "June": $m = "Juni"; break;
		case "July": $m = "Juli"; break;
		case "August": $m = "Agustus"; break;
		case "October": $m = "Oktober"; break;
		case "December": $m = "Desember"; break;
	}
	$query4 = mysql_query("select * from print where nisn='$nisn'");
	$data_print = mysql_fetch_assoc($query4);
	
	if($data_print['print'] == 0){
		$query3 = mysql_query("insert into print(nisn,print) values ('$nisn','1')");
	}
	elseif($data_print['print'] == 1){
		header('location:print.php');
	}
?>

<page>

	<img src="../images/tegarberiman.png" style="float:left; margin-top:35px; margin-left:100px; width:70px;" >
	<img src="../images/baru.png" style="float:right; margin-top:15px;margin-right:100px; width: 80px;">
	<strong><h3 align="center" style="float:left;">PEMERTINTAH KABUPATEN BOGOR
	<br>DINAS PENDIDIKAN<br>
	SMK NEGERI 1 CIOMAS</h3></strong>

	<table align="center" style="margin-top:5px;">
	<tr>
		<td align="center">TEKNOLOGI DAN REKAYASA</td>
	</tr>
	<tr>
		<td align="center">TEKNOLOGI INFORMASI DAN KOMUNIKASI</td>
	</tr>
	<tr>
		<td align="center">NSS : 401020229101 NPSN : 20254135</td>
	</tr>
	<tr>
		<td align="center">Alamat : Jl. Laladon Desa Laladon Kec Ciomas Kab Bogor Telp : (0251)7520933, Kode Pos. 16610</td>
	</tr>
	<tr>
		<td><img src="../images/garis.png" width="600" height="3"></td>
	</tr><tr><td></td></tr>
	</table>

		<p style="margin-left:80px;">Nomor : 421.5/618-KBM/2016
		<b style="margin-left:280px;">Ciomas, <?php echo $t.' '.$m.' '.$y; ?></b><br><br>
		Perihal : Pemberitahuan</p><br>
		<p style="margin-left:80px;">Kepada<br>
		Yth. Bapak/Ibu Orang Tua Siswa<br>
		Di<br>
		Tempat</p>

		<p style="margin-left:80px;">Dengan hormat,</p>
		<p style="margin-left:90px;">Sehubung dengan sikap Disiplin dan Pelanggaran terhadap tata tertib sekolah yang dilakukan siswa :</p>
		<p style="margin-left:80px;"><b>Nama : <?php echo $data['nama']; ?></b><br><br>
		<b>Kelas : <?php echo $data['kelas']; ?></b></p>

		<p style="margin-left:90px;">Dengan ini sekolah mengeluarkan Surat Peringatan dan Pemanggilan Orang Tua karena ada beberapa<br>
		pelanggaran yang dilakukan, yaitu :</p><br>

		<table border="1" align="center" style="border-collapse:collapse;">
			<tr>
				<td>No.</td>
				<td>Pelanggaran</td>
				<td>Tanggal</td>
			</tr>
		<?php
			$no = 0	;
			$query2=mysql_query("select * from pelanggaran_siswa where nisn= '$nisn'");
			while($data2=mysql_fetch_assoc($query2)){
						$no = $no+1;
		?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $data2['pelanggaran']; ?></td>
				<td><?php echo $data2['tanggal']; ?></td>
			</tr>
		<?php
			}
		?>
		</table>
		<br>
		<p style="margin-left:90px;">Demikian Surat Peringatan dibuat agar dapat diperhatikan & ditaati sebaik mungkin oleh yang bersangkutan</p>
		<br><br><br><br><br><br>
		<p style="margin-left:480px;">Ciomas, <?php echo $t.' '.$m.' '.$y; ?><br>
		Kepala SMK Negeri 1 Ciomas</p>
		<br><br><br>
		<p style="margin-left:480px;">Drs. Miswan Wahyudi, MM<br>
		NIP. 196706012000031003</p>
</page>

<?php
	$content = ob_get_clean();
	require_once('html2pdf/html2pdf.class.php');
	$pdf = new HTML2PDF('P','A4','fr','UTF-8');
	$pdf->writeHTML($content);
	$pdf->pdf->IncludeJS('print(TRUE)');
	$pdf->output('SuratPeringatan.pdf');
?>
