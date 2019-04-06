<?php
include('database.php');
$id = $_GET["id"];

if($id != "")
{
$query = "Delete FROM blogs Where usr_id = '$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    header('Location: index.php');
}
else
{
    echo "Data Didn't Deleted";
}
}
else{
    echo "Cant Able To Get Id";
}
?>