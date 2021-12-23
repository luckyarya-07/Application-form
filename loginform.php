<!DOCTYPE html>
<html>
  <body>
  	<h1>Register Form</h1><br>
	<form method="post" action="process.php" enctype="multipart/form-data">
		First name:<br>
		<input type="text" name="first_name" placeholder="First Name">
		<br><br>
		Last name:<br>
		<input type="text" name="last_name" placeholder="Last Name">
		<br><br>
		Email Id:<br>
		<input type="email" name="email" placeholder="Email Id">
		<br><br>
		Image:
		 <input type="file" name="image" /><br>
                            
    <br><br>
		Password:<br>
		<input type="text" name="password" placeholder="Password">
		<br><br><br>
		<input type="submit" name="save" value="submit">
	</form>

<a href="login.php">Login User</a>
  </body>
</html>