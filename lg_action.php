<?php 
  include("database.php");

  $email = $_POST["email"];
  $pass = $_POST["password"];

  if ($email != "" && $pass != "") {
  	$query = "Select * From users Where usr_email = '$email' And usr_pass = '$pass'";
  	$qry = mysqli_query($conn,$query);
  	$row = mysqli_fetch_array($qry);
  	$total = mysqli_num_rows($qry);
  	if ($total == 1){
  		session_start();
        $_SESSION['user'] = $row["usr_id"];
        header('location: index.php');
  	}
  	else{
  		die("Email Or Password Incorrect");
  	}
  }

  ?>