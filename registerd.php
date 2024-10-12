<!doctype html>
<html lang="en">

<head>
<title>Vaccination Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <!-- <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Covid<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="prevention.html" class="nav-link">Prevention</a>
                  <ul class="dropdown">
                    <li><a href="#" class="nav-link">Stay at home</a></li>
                    <li><a href="#" class="nav-link">Keep social distancing</a></li>
                    <li><a href="#" class="nav-link">Wear facemasl</a></li>
                    <li><a href="#" class="nav-link">Wash your hands</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="symptoms.html" class="nav-link">Symptoms</a></li>
                <li><a href="about.html" class="nav-link">About</a></li>


                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="active"><a href="contact.html" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header> -->

    <?php

    include "header.php";

    ?>




    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Signup</span>
            <h1 class="heading mb-3">Create Your Account</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
          </div>

        </div>
      </div>
    </div>


    <!-- MAIN -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" id="fname" name="fname" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" id="lname" name="lname" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="image">Chose Profile</label>
                    <input type="file" id="file" name="image" class="form-control">

                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <input type="submit" class="btn btn-primary" name="signup_btn" value="Create An Account">
                </div>
              </div>

            </form>
          </div>

        
          <div class="col-lg-5 ml-auto">
                        <h3 class="mb-3 side-title">Quick info</h3>
                        <div class="quick-contact">

                            <div class="d-flex">
                                <span class="icon-room"></span>
                                <address>
                                    Pakistan
                                </address>
                            </div>
                            <div class="d-flex">
                                <span class="icon-phone"></span>
                                <a href="#">+92 12345678</a>
                            </div>
                            <div class="d-flex">
                                <span class="icon-envelope"></span>
                                <a href="#">info@mydomain.com</a>
                            </div>
                            <div class="d-flex">
                                <span class="icon-globe"></span>
                                <a href="#">https://vaccination.com</a>
                            </div>
                        </div>
                    </div>
        </div>
      </div>
    </div>

   
  </div>

  </div> <!-- .site-wrap -->

  <?php
        include 'fotter.php';
        ?>


  <?php


  if (isset($_POST['signup_btn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $image = $_FILES['image']['name'];
    $imagetn = $_FILES['image']['tmp_name'];

    $folder = 'signup_pics/';
    $path = $folder . $image;
    move_uploaded_file($imagetn, $path);

    $sql = "INSERT INTO signup (first_name,last_name,email,password,image)VALUES('$fname','$lname','$email','$password','$path')";
    $result = mysqli_query($conn, $sql);


    if ($result) {
      echo "<script>alert('Your Account Successsfully Created'); window.location.href='registerd.php';</script>";
    } else {
      echo "<script>alert('Your Account was not Created'); window.location.href='registerd.php';</script>";
    }
  }





  ?>



</body>

</html>