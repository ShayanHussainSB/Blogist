<?php
error_reporting(0); 
include("database.php");
session_start();
$id = $_GET['id'];
if ($_SESSION['user'] == "") {
	header("Location:login.php");
}
else{
if ($id != ""){
$identity = $_GET['id'];
$qry = "Select * From users Where usr_id = '$identity'";
$rslt = mysqli_query($conn,$qry);
$row = mysqli_fetch_array($rslt);
$query = "Select * From blogs Where usr_id = '$identity'";
$result = mysqli_query($conn,$query);
}
else{
$identity = $_SESSION["user"];
$query = "Select * From users Where usr_id = '$identity'";
$rslt = mysqli_query($conn,$query);
$row = mysqli_fetch_array($rslt);

$qry = "Select * From blogs Where usr_id = '$identity'";
$result = mysqli_query($conn,$qry);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Raleway:400,200,300,800);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.snip0057 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 380px;
  max-width: 60%;
  width: 100%;
  background: #ffffff;
  color: #000000;
}
figure.snip0057 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
figure.snip0057 .image {
  width: 50%;
  overflow: hidden;
  z-index: 1;
  -webkit-transform: skewX(-15deg);
  transform: skewX(-15deg);
}
figure.snip0057 .image img {
  position: relative;
  width: 100%;
  display: block;
  left: -15%;
  -webkit-transform: skew(15deg);
  transform: skew(15deg);
}
figure.snip0057:before {
  position: absolute;
  content: '';
  height: 100%;
  width: 45%;
  background: rgba(0, 0, 0, 0.2);
  -webkit-transform: skewX(-17deg);
  transform: skewX(-17deg);
  -webkit-box-shadow: 15px 0px 25px rgba(0, 0, 0, 0.7);
  box-shadow: 15px 0px 25px rgba(0, 0, 0, 0.7);
}
figure.snip0057 figcaption {
  padding: 20px 30px 20px 20px;
  position: absolute;
  right: 0;
  bottom: 10px;
  width: 50%;
}
figure.snip0057 figcaption h2,
figure.snip0057 figcaption p {
  margin: 0;
  text-align: right;
  padding: 10px 0;
  width: 100%;
}
figure.snip0057 figcaption h2 {
  font-size: 1.3em;
  font-weight: 300;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}
figure.snip0057 figcaption h2 span {
  font-weight: 800;
}
figure.snip0057 figcaption p {
  font-size: 0.9em;
  opacity: 0.8;
}
figure.snip0057 figcaption .icons {
  width: 100%;
  text-align: right;
}
figure.snip0057 figcaption .icons i {
  font-size: 26px;
  padding: 5px;
  top: 50%;
  color: #000000;
  opacity: 0;
}
figure.snip0057 figcaption a {
  opacity: 0.3;
}
figure.snip0057 figcaption a:hover {
  opacity: 0.8;
  text-decoration: none;
}
figure.snip0057 .position {
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: right;
  padding: 15px 30px;
  font-size: 0.9em;
  opacity: 1;
  font-style: italic;
  color: #ffffff;
  background: #000000;
}
figure.snip0057.blue .position {
  background: #20638f;
}
figure.snip0057.red .position {
  background: #962d22;
}
figure.snip0057.yellow .position {
  background: #bf6516;
}
figure.snip0057:hover figcaption,
figure.snip0057.hover figcaption {
  bottom: 40px;
}
figure.snip0057:hover .icons i,
figure.snip0057.hover .icons i {
  opacity: 1;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
figure.snip0057:hover:before,
figure.snip0057.hover:before {
  -webkit-animation: shadow 0.6s ease-in-out;
  animation: shadow 0.6s ease-in-out;
}
@-webkit-keyframes shadow {
  0% {
    left: 0px;
  }
  50% {
    left: -5px;
  }
  100% {
    left: 0px;
  }
}
@keyframes shadow {
  0% {
    left: 0px;
  }
  50% {
    left: -5px;
  }
  100% {
    left: 0px;
  }
}


/* Demo purposes only */
html {
  height: 100%;
}
body {
  background-color: #212121;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-flow: wrap;
  margin: 0;
  height: 100%;
}
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
	</style>
</head>
<body>
<figure class="snip0057 red hover">
  <figcaption>
    <h2><span><?php echo $row['usr_name']; ?></span></h2>
    <p>A member of Helix Dynamics With some great writing skills :"Welcome TO Helix Create You Own Blog"..</p>
    <div class="icons"><a href="#"><i class="ion-ios-home"></i> <?php echo $row['usr_country']; ?></a><a href="#"><i class="ion-ios-email"></i><?php echo $row['usr_email']; ?></a><a href="#"><i class="ion-icon-female"></i></a></div>
  </figcaption>
  <div class="image"><img src="<?php echo $row['usr_image']; ?>" alt="<?php echo $row['usr_name']; ?>"/></div>
  <div class="position"><?php echo $row['usr_email']; ?></div>
</figure>
<div class="container" style="margin-top: 100px;">
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Date</th>
          <th>Type</th>
          <th>Subject</th>
          <th>Blog</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php
      while($blogs = mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo  "<td>".$blogs["bg_id"]."</td>";
        echo  "<td>".$blogs["bg_name"]."</td>";
        echo  "<td>".$blogs["bg_data"]."</td>";
        echo  "<td>".$blogs["bg_type"]."</td>";
        echo  "<td>".$blogs["bg_sub"]."</td>";
        echo  "<td>".$blogs["blog"]."</td>";
        if ( $_GET['id'] != "") {
           echo  "<td></td>";
           echo  "<td></td>";
      }
      else{
        echo  "<td><a href='delete.php?id=".$blogs["bg_id"]."'>Delete</a></td>";
        echo  "<td><a href='edit.php?id=".$blogs["bg_id"]."'>Edit</a></td>";
       }
        echo "</tr>";
      }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>