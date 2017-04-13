<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LOGIN ADMIN SMA INSTITUT INDONESIA</title>
</head>

<body>
<?php

extract( $_POST );
if ($error)
{}
?>

<table width="300" height="200" border="0"
align="center"
cellpadding="2" cellspacing="1"
bgcolor="#666666">
<tr>
<td height="18" bgcolor="#FF0000"><b>
<font color="#00FF00">Login Error !!!</font></b>
</td>
</tr>
<tr>
<td align="center" bgcolor="#003366">
<?php
if ($error==1)
{
print("Login ID dan Password");
}
elseif($error==2)
{
print("Login ID atau Password salah");
}
?>
<br><br><a href="login1.php"> [ulangi login]</a>
</td>
</tr>
</table>
<p>&nbsp;</p>
<?php
}
else
{
?>
<table width="300" height="200" border="0"
align="center"
cellpadding="2" cellspacing="1" bgcolor="#3366FF"
<tr>
<td height="18" bgcolor="#00CC66"><b>
<font color="#CCCC33">Login</font></b>
</td>
</tr>
<tr>
<tr>
<td align="center" bgcolor="#66FF33"
<form name="form1" method="post"
action="login.php"><p><br>
<b>LOGIN ADMIN<br>smainstitut.com
</body>
</html>
