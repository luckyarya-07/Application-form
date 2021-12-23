<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM login");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> Update data</title>
</head>
<body>
<table>
<tr>
<td>Employee Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email id</td>
<td>Password</td>
<td>Update Details</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["userid"]; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><a href="update-process.php?userid=<?php echo $row["userid"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>