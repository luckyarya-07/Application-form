<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM login");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> View data</title>
 </head>
<body>
  To Update detail<a href="update.php">Click here...!</a>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email id</td>
    <td>Image</td>
    <td>Password</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["image"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>

<a href="delete.php">Delete Data From Table</a>
 </body>
</html>