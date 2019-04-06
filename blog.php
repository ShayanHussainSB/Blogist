<?php
  include('database.php');
  session_start();
  $usr_id = $_SESSION['user'];
  $name = $_POST['name'];
  $bday = $_POST['date'];
  $type = $_POST['type'];
  $sub = $_POST['subject'];
  $blog = $_POST['blog'];

$pic_name = $_FILES['uploadimage'] ['name'];
$temp_name = $_FILES['uploadimage'] ['tmp_name'];
$pic_size = $_FILES['uploadimage'] ['size'];
$folder = "upload/";

  if (isset($_POST['btn'])) {
  	if ($name != "" && $usr_id != "" && $blog != "" && $sub != "" && $bday != "" && $type != "") {
      $folder = "upload/".$pic_name;
      move_uploaded_file($temp_name,$folder);
			$query = "Insert into blogs values(NULL,'$usr_id','$name','$bday','$type','$sub','$blog','$folder')";
			$result = mysqli_query($conn,$query);
      if ($result){
			header('Location: index.php');
    }
    else{
      echo "Query Error";
}
			mysqli_close($conn);
  	}
  	else
  	{
  		echo "<h1 style='color:green; text-align:center;margin-top:45px;'>Entered Data is Null</h1>";
  	}
  }
?>