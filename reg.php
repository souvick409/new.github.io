<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$Lis_us_name=$_POST['us_name'];
$Lis_us_email=$_POST['us_emai'];
$Lis_us_pass=$_POST['us_pass'];
$con=mysql_connect("localhost","root","") or die("Database Not connected");
$db=mysql_select_db("login",$con) or die("Database Not found");
$query="insert into loginreg values('".$Lis_us_name."','".$Lis_us_email."','".$Lis_us_pass."')";
$res=mysql_query($query,$con) or die("Query not executed");
if($res)
{
	header('location:index.html');
}
else
{
	echo "Data Not Inserted";
}


?>
<body>
</body>
</html>