<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from login where email='$email' and password='$password'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$email;
	}
}
if (isset($_SESSION["login"]))
{
	?>
   
 <script type="text/javascript">
 	
 	window.open('welcome.php','_self');
 </script>

   <?php
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<div class="floating-box">

<form name="form1" method="post">


   <label for="uname">Email id</label>
   <input type="text" id="loginid2" name="email"><br><br>

   <label for="pwd">Password</label>
   <input type="password" id="pass2" name="password"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="loginform.php">Register Here</a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="login.php">Please try again</p>';
		  }
		  ?>
 </center>
</form>

</div>
<center>
</body>
</html>