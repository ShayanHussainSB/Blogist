<?php 
include("database.php");
$id = $_GET['id'];
$query = "Select * From blogs Where bg_id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$usr_id = $row['usr_id'];
$qry = "Select * From users Where usr_id = '$usr_id'";
$data = mysqli_query($conn, $qry);
$row_data = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Anton');
	@import url('https://fonts.googleapis.com/css?family=Cinzel');
* {
  box-sizing: border-box;
}
body {
  background-color: teal;
  display: flex;
}
.contain {
  width: 100%;
  max-width: 100%;
  margin: auto;
  background-color: white;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  height: 400px;
  padding: 20px;
  border-radius: 25px;
  transition: all .3s;
}
.item {
  display: flex;
  align-items: center;
}
.img {
  width: 800px;
  height: 300px;
  border-radius: 25px;
  overflow: hidden;
  transform: translateX(-80px);
}
.img:after {
  position: absolute;
  border-radius: 25px;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.3;
}
.img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 25px;
  transition: all .3s;
}
.title {
  font-size: 24px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;
  font-family: 'Anton', sans-serif;
}
.text {
  color: #4e4a67;
  margin-bottom: 30px;
  line-height: 1.5em;
  font-family: 'Cinzel', serif;

}
a{
	text-decoration: none;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600);

body{background:#dfe0d4;}

.comment{
  width:600px;
  padding:5px;
  margin:20px auto 0 auto;
}

.comment-content{
  float:left;
  margin:0 0 0 40px;
  width:400px;
}

.comment-content > span{
  line-height:150%;
  color:#444;
  background:#f5f5f5;
  display:block;
  width:100%;
  padding:10px 15px 10px 15px;
  font-size:.9em;
  display:block;
  position:relative;
  border-radius:3px;
  box-shadow:
    1px 1px 3px rgba(0,0,0,.3);}

.comment-content > span:before{
  content:'';
  position:absolute;
  top:28px;
  left:-28px;
  display:block;
  width:0;
  height:0;
  border:1em solid #f5f5f5;
  border-color:transparent #f5f5f5 transparent transparent; 
}

.comment p{
  font-family:'Open Sans';
  text-shadow:1px 1px 2px #fff;
}

.comment strong{font-weight:700;}
.comment .author{font-weight:300;font-size:.8em}

.comment img{
  float:left;
  max-width:120px;
  border-radius:60px;
  box-shadow:
    0 0 0 1px rgba(0,0,0,.2),
    0 0 0 7px rgba(200,200,200,1),
    0 0 0 9px rgba(175,175,175,1),
    0 0 20px rgba(0,0,0,.7);
  margin:20px 0 0 10px;
}


	</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
	<div class="contain" style="margin-left: 100px; margin-top: 100px;">
  <div class="item">
    <div class="img">
      <img src="<?php echo $row['bg_image']; ?>" alt="Random KH Picture">
    </div>
    <div class="content">
      <div class="title"><?php echo $row['bg_name']; ?></div>
      <div class="text"><?php echo $row['blog']; ?>.</div>
      <div class="text">A Blog By <b><a href="profile.php?id=<?php echo $row_data['usr_id']; ?>"> <?php echo $row_data['usr_name']; ?></a></b>.</div>
    </div>
  </div>
</div>
</div>

<div class="col-md-5">
<div class="comment">
  <img src="http://farm5.staticflickr.com/4012/5126739463_e5598d33fb.jpg">
  <div class="comment-content"><p class="author"><strong>Jack the Ripper</strong> - 10 minutes ago</p>
    <span>
      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.  
    </span>
  </div>
</div>
</div>
</div>
</div>

</body>
</html>