<?php
    include "koneksi.php";
	
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
	
    $query= "INSERT INTO tb_login VALUES (
        '.$username."', '". Spassword."',
        '".$email."
	)";
	
    $sql = mysql_query($query) or die (mysql_error());
	
    if ($sql){
         echo '<script language="javascript">
         alert ("Data berhasil di simpan!. Silahkan Login.");
         document.location="login.php";</script>';
    }else{
        echo '<script language "javascript">
        alert ("Data gagal di simpan!.");
        document.location="login.php";</script>';
    }
?>