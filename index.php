<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Online Test </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <style>
    div.background {
      background: url(image/pic1.jpg) no-repeat center center fixed;
      background-size: cover;
      height: 50%;
      overflow: hidden;
      border: 2px solid black;
    }

    div.transbox {
      margin: 200px;
      background-color: #ffffff;
      border: 1px solid black;
      opacity: 0.6;
      height: 70%;
      width: 40%;
      margin-left: 400px;
      align: justify;
    }

    div.transbox p {
      margin: 5%;
      font-weight: bold;
      color: #000000;
      align: justify;
    }

    div.transbox h1 {
      margin: 50px;
      font-size: 50px;
      font-weight: bold;
    }
  </style>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value; var letters = /^[A-Za-z]+$/;
      //name field should contain Uppercase or lowercase alpabets only and cannot be left empty.
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out."); return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        alert("Passwords must match.");
        return false;
      }
    }
  </script>

</head>

<body>

  <div class="header">
    <div class="row">
      <div class="col-lg-3">
        <span class="logo">Online Test </span>
      </div>
      <!-- total grids 12 in bootstrap -->
      <div class="col-md-5 col-md-offset-4">
        <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span
            class="title1"><b>Signin</b></span>
        </a>
      </div>
      <!--sign in modal start-->
      <!-- data-toggle attribute is used on the button to specify that clicking it should toggle the display of a modal dialog -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <!-- A modal is a UI component that appears as a pop-up window or dialog on top of the main content, temporarily blocking interactions with the background. It's used to display important information, gather user input, or confirm actions -->
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">


                <fieldset>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email"></label>
                    <div class="col-md-6">
                      <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md"
                        type="email">

                    </div>
                  </div>


                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6">
                      <input id="password" name="password" placeholder="Enter your Password"
                        class="form-control input-md" type="password">

                    </div>
                  </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Log in</button>
              </fieldset>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--sign in modal closed-->

    </div><!--header row closed-->
  </div>


  <!--Footer start-->
  <div class="row footer">
    <div class="col-md-3 box">
      <a href="index.php" target="_blank">About us</a>
    </div>
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
    </div>
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
    </div>
    <div class="col-md-3 box">
      <a href="feedback.php" target="_blank">Feedback</a>
    </div>
  </div>
  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
        </div>

        <div class="modal-body">
          <p>
          <div class="row">
            <div class="col-md-4">
              <img src="image/anu.jpg" width=100 height=100 alt="Anuradha Singh" class="img-rounded">
            </div>
            <div class="col-md-5">

              <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91----------</h4>
              <h4 style="font-family:'typo' ">Anuradha Singh</h4>
              <h4 style="font-family:'typo' ">SSIPMT RAIPUR</h4>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-md-4">
              <img src="image/diya.jpeg" width=100 height=100 alt="Diya" class="img-rounded">
            </div>
            <div class="col-md-5">

              <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91----------</h4>
              <h4 style="font-family:'typo' ">Diya Sharma</h4>
              <h4 style="font-family:'typo' ">SSIPMT RAIPUR</h4>
            </div>
          </div>


          </p>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form role="form" method="post" action="admin.php?q=index.php">
                <div class="form-group">
                  <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                </div>
                <div class="form-group" >
                  <input type="submit" name="login" value="Login" class="btn btn-primary" />
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
        <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--footer end-->







  <div class="background ">
    <div class="transbox">
      <h1>About Us</h1>
      <p>Online examination system is a web-based examination system where examinations are given
        online. Either through the internet or intranet using computer system. The main goal of this online examination
        system is to effectively evaluate the student thoroughly through a totally automated system that not only reduce
        the required time but also obtain fast and accurate results. The main objective of our software is to
        efficiently evaluate the candidate thoroughly through a fully automated system there is no need of paper and
        pen. The user can write exam without going to the exam centre.</p>

    </div>
  </div>



  <div class="bg1">
    <div class="row">
      <h1 style="font: size 30px; color:white; margin-left:1050px; font-style:bold">Sign Up Form</h1>
      <div class="col-md-7"></div>
      <div class="col-md-4 panel">
        <!-- sign in form begins -->
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()"
          method="POST">
          <fieldset>
 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="gender"></label>
              <div class="col-md-12">
                <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                  <option value="Male">Select Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md"
                  type="text">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="email"></label>
              <div class="col-md-12">
                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md"
                  type="email">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="mob"></label>
              <div class="col-md-12">
                <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md"
                  type="number">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md"
                  type="password">

              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md"
                  type="password">

              </div>
            </div>
            <?php if (@$_GET['q7']) {
              echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
            } ?>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12">
                <input type="submit" class="sub" value="sign up" class="btn btn-primary" />
              </div>
            </div>

          </fieldset>
        </form>
      </div><!--col-md-6 end-->
    </div>
  </div>
  </div><!--container end-->


  <footer class="container-fluid  footer">
    <div class="container">

      <div class="row"><!-- row -->

        <div class="col-lg-3 col-md-3"><!-- widgets column left -->
          <ul class="list-unstyled clear-margins"><!-- widgets -->

            <li class="widget-container widget_nav_menu"><!-- widgets list -->

              <h1 class="title-widget">Useful links</h1>

              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Regular Batch</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Test & Discussion</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Fast Track T & D</a></li>
              </ul>

            </li>

          </ul>


        </div><!-- widgets column left end -->



        <div class="col-lg-3 col-md-3"><!-- widgets column left -->

          <ul class="list-unstyled clear-margins"><!-- widgets -->

            <li class="widget-container widget_nav_menu"><!-- widgets list -->

              <h1 class="title-widget">Useful links</h1>

              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Test Series Schedule</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Postal Coaching</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> PG Dr. Bhatia Books</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> UG Courses</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Satellite Education</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Study Centres</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> State P.G. Mocks</a></li>
                <li><a href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Results</a></li>

              </ul>

            </li>

          </ul>


        </div><!-- widgets column left end -->



        <div class="col-lg-3 col-md-3"><!-- widgets column left -->

          <ul class="list-unstyled clear-margins"><!-- widgets -->

            <li class="widget-container widget_nav_menu"><!-- widgets list -->

              <h1 class="title-widget">Useful links</h1>

              <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Enquiry Form</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Online Test Series</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Grand Tests Series</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Subject Wise Test Series</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Smart Book</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Test Centres</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Admission Form</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Computer Live Test</a></li>

              </ul>

            </li>

          </ul>


        </div><!-- widgets column left end -->


        <div class="col-lg-3 col-md-3"><!-- widgets column center -->



          <ul class="list-unstyled clear-margins"><!-- widgets -->

            <li class="widget-container widget_recent_news"><!-- widgets list -->

              <h1 class="title-widget">Contact Detail </h1>

              <div class="footerp">

                <h2 class="title-median">Poject Pvt. Ltd.</h2>
                <p><b>Email id:</b> <a href="mailto:info@webenlance.com">info@project.com</a></p>
                <p><b>Helpline Numbers </b>

                  <b style="color:#ffc106;">(8AM to 10PM):</b> +91-1234567890, +91-1234567890
                </p>

                <p><b>Corp Office / Postal Address</b></p>
                <p><b>Phone Numbers : </b>1234567890, </p>
                <p> 0987654321, 1234567890</p>
              </div>

              <div class="social-icons">

                <ul class="nomargin">

                  <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb"
                      id="social"></i></a>
                  <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw"
                      id="social"></i></a>
                  <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp"
                      id="social"></i></a>
                  <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em"
                      id="social"></i></a>

                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--header-->

  <div class="footer-bottom">

    <div class="container">

      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

          <div class="copyright">

            © 2021, Project, All rights reserved

          </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

          <div class="design">

            <a href="#">Franchisee </a> | <a target="_blank" href="">Web Design & Development
              by  Students</a>

          </div>

        </div>

      </div>

    </div>

  </div>

</body>

</html>