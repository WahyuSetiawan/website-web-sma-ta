<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN SMA INSTITUT INDONESIA</title>

<link href="style-form.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>Login<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td>
<input type='submit' name='submit' value='Submit'/>
<input type=button value=Batal onclick=self.history.back()>
</td></tr>
</table>

</form>
<?php
session_start();
include 'koneksi.php';
define('INCLUDE_CHECK',1);
if(isset($_POST['submit'])){
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
        header("location: media.php");
    }
    else{
    // Login gagal
    ?>
  <script language="javascript">
            alert("Maaf, Username atau Password Anda salah!!");
            document.location="login3.php";
    </script>
  <?php  
    }
}
?>
</body>
</html>