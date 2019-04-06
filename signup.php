<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Icons font CSS-->
    <link href="another/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="another/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="another/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="another/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="another/css/main2.css" rel="stylesheet" media="all">
    <style type="text/css">
        input[type=file] {
  cursor: pointer;
  width: 100%;
  height: 34px;
  overflow: hidden;
}

input[type=file]:before {
  width: 158px;
  height: 32px;
  font-size: 16px;
  line-height: 32px;
  content: 'Select your file';
  display: inline-block;
  background: white;
  border: 1px solid #000;
  padding: 0 10px;
  text-align: center;
  font-family: Helvetica, Arial, sans-serif;
}

input[type=file]::-webkit-file-upload-button {
  visibility: hidden;
}
    </style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Register Here :</h2>
                    <form method="POST" action="action.php" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                            <option>Rather Not Say</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="example@something.com" name="email">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="country">
                                    <option disabled="disabled" selected="selected">Country</option>
                                    <option>Pakistan</option>
                                    <option>USA</option>
                                    <option>United Arab Emirates</option>
                                    <option>Fuck You</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <input type="file" id="file" name="uploadimage" />
                        </div>
                            <div class="col-3" style="margin-top: 20px;">
                                <a href="login.php" style="text-decoration: none;"><span style="color: grey;">Already Have an account? Click Here..</span></a>
                            </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="another/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="another/vendor/select2/select2.min.js"></script>
    <script src="another/vendor/datepicker/moment.min.js"></script>
    <script src="another/vendor/datepicker/daterangepicker.js"></script>
    <script src="another/js/global.js"></script>

</body>

</html>
