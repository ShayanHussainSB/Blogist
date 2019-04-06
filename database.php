<?php
$dbhost = "localhost";
$dbuser = "root";

// Create connection
$conn = new mysqli($dbhost,$dbuser);
// Connect Database
$db = mysqli_select_db($conn,"website");
?>