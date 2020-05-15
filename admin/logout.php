<?php
	session_start();
	session_destroy();
	echo "<script>alert('Berhasil Keluar');document.location.href='../index.php'</script>/n";
?>
