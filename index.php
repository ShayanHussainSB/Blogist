<?php 
include("database.php");
session_start();
if ($_SESSION['user'] == "") {
	header("Location:login.php");
}
else{
$id = $_SESSION["user"];
$query = "Select * From users Where usr_id = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
}
$qry = "Select * From blogs";
$data = mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
	<style type="text/css">
  @import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css';
@import 'https://fonts.googleapis.com/css?family=Roboto:700,400';
/*
*  Basic Reset
*/
 
*,
*:after,
*:before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/**
 * Basics Styles
 */
html {
  font-size: 62.5%;
}
body {
  background-color: #eee;
  font-family: Roboto;
  font-weight: 400;
  font-size: 1.6em;
  line-height: 1.6;
  color: #666;
}

a {
  text-decoration: none;
  color: #3498db;
}
  a:hover {
    color: #2980b9;
  }

h2 {
  line-height: 1.2;
  margin-bottom: 1.6rem;
}

.wrapper {
  max-width: 400px;
}

/**
 * Helpers
 */
.border-tlr-radius { 
  border-top-left-radius: 2px;
  border-top-right-radius: 2px; 
}

.text-center { text-align: center; }

.radius { border-radius: 2px; }

.padding-tb { padding-top: 1.6rem; padding-bottom: 1.6rem;}

.shadowDepth0 { box-shadow: 0 1px 3px rgba(0,0,0, 0.12); }

.shadowDepth1 {
   box-shadow: 
      0 1px 3px rgba(0,0,0, 0.12),
      0 1px 2px rgba(0,0,0, 0.24);      
}


/**
 * Card Styles
 */

.card {
  background-color: #fff;
  margin-bottom: 1.6rem;
}

.card__padding {
  padding: 1.6rem;
}
 
.card__image {
  min-height: 100px;
  background-color: #eee;
}
  .card__image img {
    width: 100%;
    max-width: 100%;
    display: block;
  }

.card__content {
  position: relative;
}

/* card meta */
.card__meta time {
  font-size: 1.5rem;
  color: #bbb;
  margin-left: 0.8rem;
}

/* card article */
.card__article a {
  text-decoration: none;
  color: #444;
  transition: all 0.5s ease;
}
  .card__article a:hover {
    color: #2980b9;
  }

/* card action */
.card__action {
  overflow: hidden;
  padding-right: 1.6rem;
  padding-left: 1.6rem;
  padding-bottom: 1.6rem;
}
   
.card__author {}
  .card__author-content {
    display: inline-block;
  }
  .card__author img{
    display: inline-block;
    height: 32px;
    width: 32px;
  }

  .card__author img{
    border-radius: 50%;
    margin-right: 0.6em;
  }

.card__share {
  float: right;
  position: relative;
  margin-top: -42px;
}

.card__social {
  position: absolute;
  top: 0;
  right: 0;
  visibility: hidden;
  width: 160px;
  transform: translateZ(0);
    transform: translateX(0px);
    transition: transform 0.35s ease;
}
  .card__social--active {
    visibility: visible;
    /*z-index: 3;*/
    transform: translateZ(0);
    transform: translateX(-48px);
      transition: transform 0.35s ease;
  }

.share-toggle {
  z-index: 2;
}
.share-toggle:before {
  content: "\f1e0";
  font-family: 'FontAwesome';
  color: #3498db;
}
  .share-toggle.share-expanded:before {
    content: "\f00d";
  }

.share-icon {
  display: inline-block;
  width: 48px;
  height: 48px;
  line-height: 48px;
  text-align: center;
  border-radius: 50%;
  background-color: #fff;
  transition: all 0.3s ease;
  outline: 0;

  box-shadow: 
        0 2px 4px rgba(0,0,0, 0.12),
        0 2px 4px rgba(0,0,0, 0.24);
}
  .share-icon:hover,
  .share-icon:focus {
    box-shadow: 
        0 3px 6px rgba(0,0,0, 0.12),
        0 3px 6px rgba(0,0,0, 0.24);

      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -ms-transform: scale(1.2);
      -o-transform: scale(1.2);
      transform: scale(1.2);
  }

.facebook {
  background-color: #3b5998; 
}
.twitter {
  background-color: #00abe3; 
}
.googleplus {
  background-color: #d3492c;
}

.facebook,
.twitter,
.googleplus {
  color: #fff;
}

  .facebook:hover,
  .twitter:hover,
  .googleplus:hover {
    color: #eee;
  }
  .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
  </style>
</head>
<body>

         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Helix Dynamics</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                      <li class="nav-item ">
                            <a class="nav-link nav-icons" href="index.php">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav-icons" href="create.php">Create a Blog</a>
                        </li>
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar" style="padding: 10px;">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src='<?php echo $row['usr_image']; ?>' alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $row['usr_name']; ?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="profile.php"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

  <div class="row"  style="margin-top: 100px;">
    <?php
    while($row = mysqli_fetch_array($data)){
      $usr_id = $row['usr_id'];
      $qry = "Select * From users Where usr_id = '$usr_id' ";
      $name = mysqli_query($conn,$qry);
      $name_row = mysqli_fetch_array($name);
        echo ' <div class="col-md-04">
        <div class="wrapper" style="margin-left: 100px;">
        <div class="card radius shadowDepth1">
          <div class="card__image border-tlr-radius">
            <img src="'.$row['bg_image'].'" alt="image" class="border-tlr-radius">
                </div>

          <div class="card__content card__padding">
            <div class="card__meta">
              <a href="#">'.$row['bg_type'].'</a>
                        <time>'.$row['bg_data'].'</time>
            </div>

            <article class="card__article">
              <h2><a href="blogdetails.php?id='.$row['bg_id'].'">'.$row['bg_name'].'</a></h2>

              <p>'.$row['bg_sub'].'</p>
            </article>
          </div>

          <div class="card__action">
            
            <div class="card__author">
              <img src="'.$name_row['usr_image'].'" alt="user">
              <div class="card__author-content">
                By <a href="profile.php?id='.$name_row['usr_id'].'">'.$name_row['usr_name'].'</a>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>';
}
?>
</div>
</body>
</html>