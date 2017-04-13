<?php
session_start();
include 'koneksi.php';
define('INCLUDE_CHECK',1);

// Jika user ingin login
if(isset($_POST['login'])) {
  $nama=htmlentities($_POST['user']);
  $pass=htmlentities($_POST['pass']);
  $result = mysql_query("SELECT * FROM admin WHERE username = '$nama' and password='$pass'");
  $user_data = mysql_fetch_array($result);
  $data_ada = mysql_num_rows($result);
    if ($data_ada == 1){
        $_SESSION['admin'] = true;
        $_SESSION['username'] = $user_data['username'];
        $_SESSION['password'] = $user_data['password'];
		
        // Login sukses
        header("location: utama.php");
    }
    else{
    // Login gagal
    ?>
  <script language="javascript">
            alert("Maaf, Username atau Password Anda salah!!");
            document.location="login.php";
    </script>
  <?php  
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> => LOGIN ADMIN SMA II SLEMAN <=</title>

<link href="Login_Template_for_Backend_by_pide_art/style.css" rel="stylesheet" type="text/css" />

<!--[if IE 6]><link rel="stylesheet" type="text/css" href="ie6.css" media="screen"><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="ie7.css" media="screen"><![endif]-->

</head>

<body>

<div id="login"><!-- design by www.pidedesign.net -->

<div id="title">
<p>INSTITUT INDONESIA SLEMAN</p>
<p><span class="color_site">LOGIN ADMIN</span></p><!-- titolo sito -->
</div>

<form id="cocok" method="post" role="form" action="<?php $_SERVER['PHP_SELF']?>">

<!-- username -->
<div class="item">Username</div>
<div class="input"><input name="user" type="text" class="username" id="username" value="" /></div>

<!-- password -->
<div class="item">Password</div>
<div class="input"><input name="pass" type="password"
					class="password form-control"  id="password" value="" /></div>
<!-- login -->
<div class="item2">

<input name="login" type="submit" value="Login" />
              <input type="reset" value="Reset" />
</div>

</form>

</div>

</body>
</html>
