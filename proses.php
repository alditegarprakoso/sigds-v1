<?php
    include 'koneksi.php';
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $sql = "select * from admin";
    $query = mysql_query($sql);
    $data=mysql_fetch_assoc($query);
    $name2 = $data['name'];
    $pass2 = $data['password'];


    if($name == $name2 && $pass == $pass2)
    {
		session_start();
		$_SESSION['login'] = $name;
        echo "<script>;document.location.href='admin/indexadmin.php'</script>/n";
    }

    else
    {
            echo "<script>alert('Username atau Password tidak cocok!');document.location.href='login.php'</script>/n";
    }
?>
