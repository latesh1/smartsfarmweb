<!DOCTYPE html >
<html >
<head>
<meta charset="utf-8">
<title>contact us php</title>
</head>

<body>
<?php
session_start();
$username=$_POST['c_name'];
$emailid=$_POST['c_email'];
$message=$_POST['c_message'];

if ($username&&$emailid&&$message)
{
$connect = mysql_connect("localhost","root","");
mysql_select_db("smartfarms") or die("couldn't find database");
$query = mysql_query("INSERT INTO `contacttable` (`ID`, `Name`, `Email`, `Message`) VALUES ('', '$username', '$emailid', '$message');");
echo ("Insert Successful");
}
else
echo("Please enter data");
mysql_close($connect);

?>
</body>
</html>
