<?php 
$connect = mysqli_connect("localhost", "root", "", "smartfarms");
$output = '';

$connect = mysqli_connect("localhost", "root", "", "smartfarms");
if (!$connect)
  {
  die('Could not connect: ' . mysql_error());
  }


$username =$_POST['username'];
$password =$_POST['password'];
$query = "SELECT count(*) FROM logintable WHERE(
     username='".$username."' and  password='".$password."')";

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
      {
 echo "<script> alert('login succuessful');
window.location.href='smartfarm.html';
</script>";
      }
      else
      {
   echo "<script> alert('login failed');
window.location.href='registration.html';
</script>";

    
      }

?>
