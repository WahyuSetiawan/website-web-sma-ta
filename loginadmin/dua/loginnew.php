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
        header("location:web_sma_ta/admin/index.php");
    }
    else{
    // Login gagal
    ?>
  <script language="javascript">
            alert("Maaf, Username atau Password Anda salah!!");
            document.location="loginnew.php";
    </script>
  <?php  
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset=”utf-8?>
<title>Halaman Login</title>
<style type=”text/css”>
body {
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
background-color: #666;
}
#login {
width: 30%;
height: auto;
margin: 10% auto auto auto;
background-color: #FFF;
padding: 20px;
border-radius: 10px;
}
#login form {
padding: 5px;
padding: 10px 20px;
border-radius: 5px;
background-color: #F5F5F5;
border: solid thin #EEE;
margin: 10px 0 0 0;
}
#login label {
display: block;
font-weight: bold;
}
#login input {
padding: 4px 6px;
}
#login h2 {
margin: 0;
padding: 10px 20px;
font-weight: 16px;
background-color: #066;
color: #FFF;
border-radius: 5px;
}
.tombol {
color: #FFF;
background-color: #099;
cursor: pointer;
border: none;
border-radius: 4px;
width: auto;
}
.tombol:hover {
background-color: #066;
}
</style>
</head>

<body>
<div id=”login”>
<h2>Halaman login</h2>

<form action="web_sma_ta/admin/index.php" method="post" name="login">
<p>
<label for=”username”>Username</label>
<input type=”text” name=”username” id=”username”>
</p>
<p>
<label for=”password”>Password</label>
<input type=”password” name=”password” id=”password”>
</p>
<input name="login" type="submit" value="Submit" />
                    <input type=button value=Batal onclick=self.history.back()>
</form>
<p align=”center”>&copy; SMA Institut Indonesia Sleman</p>
</div>
</body>
</html>