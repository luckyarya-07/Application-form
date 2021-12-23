<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $image = getimagesize($_FILES['image']['tmp_name']);
  
  


  
	 // $image=$_FILES['file'][name];
	 // $target_dir="upload/";
	 // $target_file=$target_dir.basename($_FILES["file"]["name"]);
  //    $imageFileType=strtolower(pathinfo(target_file,PATHINFO_EXTENSION));
  //    extension_arr=array("jpg","jpeg","png","gif");
  //    if(in_array($imageFileType,$extension_arr)){

  //    }
     $folder="images/";
     if(move_uploaded_file($_FILES['image']['tmp_name'], $folder.$image)){
    	
    	echo "uploaded";
     }else{
     	echo "not";
     }

	 $password = $_POST['password'];

	 
	 $sql = "INSERT INTO login (first_name,last_name,email,image,password)
	 VALUES ('$first_name','$last_name','$email','$image','$password')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
?>
<span style ="color: red;">clich here to..!</span><a href="view.php">View Detail</a>