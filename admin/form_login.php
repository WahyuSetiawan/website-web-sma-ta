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
            document.location="form_login.php";
    </script>
  <?php  
    }
}
?>

<html>
<head>
	<title>Login Admin SMA IiS</title>
</head>
<body>
 
	<form action="index.php" method="post">
	<center><h2>Login Form</h2></center>
	<table align="center">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="Username" required /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Password" required /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="login" value="Login" /></td>
		</tr>
	</table>
	</form>
 
</body>
</html>