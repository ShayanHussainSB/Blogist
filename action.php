<?php
  include('database.php');

  $name = $_POST['name'];
  $bday = $_POST['birthday'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $pass = $_POST['password'];

$pic_name = $_FILES['uploadimage'] ['name'];
$temp_name = $_FILES['uploadimage'] ['tmp_name'];
$pic_size = $_FILES['uploadimage'] ['size'];
$folder = "upload/";

  if (isset($_POST['btn'])) {
$qry = "Select usr_email From users";
$emaildata = mysqli_query($conn,$qry);
if($emaildata){
  $row = mysqli_fetch_array($emaildata);
  if($email != $row["usr_email"]){
  	if ($name != "" && $email != "" && $pass != "" && $bday != "" && $gender != "") {
      $folder = "upload/".$pic_name;
      move_uploaded_file($temp_name,$folder);
			$query = "Insert into users values(NULL,'$folder','$name','$bday','$gender','$email','$country','$pass')";
			mysqli_query($conn,$query);
			header('Location: login.php');
			mysqli_close($conn);
  	}
  	else
  	{
  		echo "<h1 style='color:green; text-align:center;margin-top:45px;'>Entered Data is Null</h1>";
  	}
  }
  else{
    echo "<h1 style='color:green; text-align:center;margin-top:45px;'>Enter Email Already Exist...</h1>";
  }
}
else{
  echo "<h1 style='color:green; text-align:center;margin-top:45px;'>Query Error Email...</h1>";
}
}
?>