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

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: LOGIN ADMIN ::.</title>

<link href="style-form.css" rel="stylesheet" type="text/css" />
</head>

<body>

        <h1>Please Login Here</h1>
    </div>  <!-- end of top-->
    <h5> 
<?php date_default_timezone_set("Asia/Jakarta");
echo date('l, d  F  Y | h:i A')
;?> 
</h5>
    <div id="leftSide">
    <form id="cocok" method="post" role="form" action="<?php $_SERVER['PHP_SELF']?>">
    	<fieldset>
        	<legend>ADMINISTRATOR</legend>
            <form class="form">
            	<label for="username">Username</label>
                <div class="div_texbox">
                      <input name="user" type="text" 
                      class="username" id="username" value="" />
                </div>
                
            	<label for="password">Password</label>
                <div class="div_texbox">
          			<input name="pass" type="password"
					class="password" id="password" value="" />
        		</div>
                
                
          			<input name="login" type="submit" value="Login" />
                    <input type="reset" value="Reset" />
        		
            </form>
            <div class="clear"></div>
        
    </div>  <!-- end og leftside-->
</div>  <!-- end of container-->
</body>

</html>
