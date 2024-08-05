<?php 
  include_once("db.php"); 
  session_start();
?>

<?php
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

$con = mysql_connect("localhost", "root", "");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

// Make a safe SQL
$user = check_input($_POST['name']);
$pwd = check_input($_POST['pwd']);
$sql = "SELECT * FROM test WHERE
username=$user AND password=$pwd";

$qury = mysql_query($sql);
$result = mysql_fetch_array($qury);
 
      if($result[0]>0)
      {
        echo "Successful Login!";
       // $_SESSION['userName'] = $uname;
       // echo "<br />Welcome ".$_SESSION['userName']."!";
        echo "<br /><a href='signupform.php'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
        echo "<br /><a href='logout.php'>LogOut</a>";
      }
      else
      {
        echo "Login Failed";
        echo "<br /><a href='signupform.php'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
      }

mysql_close($con);
?>
