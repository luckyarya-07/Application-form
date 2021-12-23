<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM login");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	<td>User Id</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Email id</td>
	<td>Password</td>
	<td>Delete Data</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["userid"]; ?></td>
	<td><?php echo $row["first_name"]; ?></td>
	<td><?php echo $row["last_name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["password"]; ?></td>
	<td><a href="delete-process.php?userid=<?php echo $row["userid"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>