<!DOCTYPE html >
<html >
<body>


<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];


if ($username&&$password)
{
$connect = mysql_connect("localhost","root","");
mysql_select_db("smartfarms") or die("couldn't find database");

if($query = mysql_query("DELETE FROM `logintable` WHERE `username`='$username' and `password`='$password'"))      
{
 echo "<script> alert('Delete succuessful');
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
