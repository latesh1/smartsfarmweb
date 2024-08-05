<!DOCTYPE html >
<html >
<body>


<?php
session_start();
$username=$_POST['username'];
$oldpass=$_POST['oldpass'];
$password=$_POST['password'];


if ($username&&$password&&$oldpass)
{
$connect = mysql_connect("localhost","root","");
mysql_select_db("smartfarms") or die("couldn't find database");

if($query = mysql_query("UPDATE `logintable` SET `password`='$password' WHERE `username`='$username' and password='$oldpass'"))      
{
 echo "<script> alert('update succuessful');
window.location.href='smartfarm.html';
</script>";
      }
}
else
      {
   echo "<script> alert('USER NOT FOUND');
window.location.href='registration.html';
</script>";
}
?>
</body>
</html>
