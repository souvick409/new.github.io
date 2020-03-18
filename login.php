<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
<?php
$Lis_us_name=$_POST['us_name'];
$Lis_us_pass=$_POST['us_pass'];
$con=mysql_connect("Localhost","root","") or die("Database Not connected");
$db=mysql_select_db("login",$con) or die("Database Not found");
$query="Select * from loginreg where U_name='".$Lis_us_name."' and U_Pass='".$Lis_us_pass."'";
$res=mysql_query($query,$con) or die("Query not executed");
$row=mysql_fetch_array($res) or die("Row not found");
if($row)
{
	session_start();
	$_SESSION["ses_name"]=$row['U_Name'];
	header('location:seet1.html');
	
}
else
{
	echo "Re login";
}


?>
<body>
</body>
</html>