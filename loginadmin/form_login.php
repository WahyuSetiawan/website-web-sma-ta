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
        header("location: media.php");
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

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: LOGIN ADMIN ::.</title>

<link href="style-form.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
    <div id="top">
        <h1>Please Login Here</h1>
    </div>  <!-- end of top-->
    
    <div id="leftSide">
    <form id="cocok" method="post" role="form" action="<?php $_SERVER['PHP_SELF']?>">
    	<fieldset>
        	<legend>ADMINISTRATOR</legend>
            <form class="form">
            	<label for="username">Username</label>
                <div class="div_texbox">
                      <input name="user" type="text" 
                      class="username" id="username" value="admin" />
                </div>
                
            	<label for="password">Password</label>
                <div class="div_texbox">
          			<input name="pass" type="password"
					class="password" id="password" value="admin" />
        		</div>
                
                
          			<input name="login" type="submit" value="Submit" />
                    <input type=button value=Batal onclick=self.history.back()>
        		
            </form>
            <div class="clear"></div>
        
    </div>  <!-- end og leftside-->
</div>  <!-- end of container-->
</body>

</html>
