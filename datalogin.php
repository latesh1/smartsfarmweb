<?php 
$connect = mysqli_connect("localhost", "root", "", "smartfarms");
$output = '';

function check_input($value)
{
// Stripslashes
if (get_magic_quotes_gpc())
  {
	  
  $value = stripslashes($value);
  }
// Quote if not a number
if (!is_numeric($value))
  {
  $value = "'" . mysql_real_escape_string($value) . "'";
  }
return $value;
}

$connect = mysqli_connect("localhost", "root", "", "smartfarms");
if (!$connect)
  {
  die('Could not connect: ' . mysql_error());
  }

// Make a safe SQL

$username = check_input($_POST['username']);
$password = check_input($_POST['password']);
$query = "SELECT * FROM logintable WHERE
username=$username AND password=$password";

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
