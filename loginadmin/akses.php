<?php
session_start();
 
if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../form_login.php";</script>';
}
?>