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
        $sql = "SELECT * FROM vaccine";
        $result = mysqli_query($conn, $sql);

        $sql1 = "SELECT * FROM disability";
        $res = mysqli_query($conn, $sql1);

        $sql2 = "SELECT * FROM other_problem";
        $res1 = mysqli_query($conn, $sql2);

        if(isset($_GET['id'])){
            $h = $_GET['id'];
            $h_sql = "SELECT * FROM hospital WHERE h_id='$h'";
            $h_result = mysqli_query($conn,$h_sql);
            $h_data = mysqli_fetch_assoc($h_result);

            $hospial_name = $h_data['h_name'];

            $_SESSION['hospital_name'] = $hospial_name;

        }

        // if(isset($_GET['id'])){
        //     $vaccine = $_GET['id'];
        //     $vaccine_sql = "SELECT * FROM vaccine WHERE id='$vaccine'";
        //     $vaccine_result = mysqli_query($conn,$vaccine_sql);
        //     $vaccine_data = mysqli_fetch_assoc($vaccine_result);


        //     $vaccine_name = $vaccine_data['vaccine'];

        //     $_SESSION['vaccine_name'] = $vaccine_name;

        // }

        ?>




        <div class="hero-v1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center mx-auto">
                        <span class="d-block subheading">Book Hospital For vaccination</span>
                        <h1 class="heading mb-3">Hospital</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
                    </div>

                </div>
            </div>
        </div>


        <!-- MAIN -->



        <div class="site-section stats">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-7 text-center mx-auto">
                        <h2 class="section-heading">Let's Book Hospital for vaccination</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptate!</p>
                    </div>
                </div>
                <div class="site-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="appointment.php" method="post" enctype="multipart/form-data">
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
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fname">Father name</label>
                                                <input type="text" id="father_name" name="father_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lname">Mother name</label>
                                                <input type="text" id="mother_name" name="mother_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fname">Child Age</label>
                                                <input type="text" id="age" name="age" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lname">Place of birth</label>
                                                <input type="text" id="place_of_birth" name="place_of_birth" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fname">Date of birth</label>
                                                <input type="text" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="dd-mm-yy">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lname">Birth Certificate / Bay Form</label>
                                                <input type="text" id="bcb_numbere" name="bcb_number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fname">Child Image</label>
                                                <input type="file" id="child_image" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lname">Select Your Vaccine</label>
                                                <!-- <input type="text" id="lname" name="lname" class="form-control"> -->
                                                <select class="form-select" name="vaccine" aria-label="Default select example">
                                                    <option selected disabled>Select your vacccine</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                                                        <option value="<?php echo $data['vac_id'] ?>"><?php echo $data['vaccine'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fname">Your Child is disabled ?</label>
                                                <select class="form-select" name="disabled" aria-label="Default select example">
                                                    <option selected disabled>Your child is disabled ?</option>
                                                    <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                                        <option value="<?php echo $data['id'] ?>"><?php echo $data['disability'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lname">Any Other problem in your child ?</label>
                                                <select class="form-select" name="problem" aria-label="Default select example">
                                                    <option selected disabled>Any Other problem ?</option>
                                                    <?php while ($data = mysqli_fetch_assoc($res1)) { ?>
                                                        <option value="<?php echo $data['id'] ?>"><?php echo $data['problem'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lname">Hospial Name</label>
                                                <input type="text" id="bcb_numbere" name="hospital_name" value="<?php print $_SESSION['hospital_name']; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row">
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
                                                <label for="subject">Subject</label>
                                                <input type="text" id="subject" name="subject" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary" name="btn">Request for Appointment</button>
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
                                            Fake street, 3929, London
                                        </address>
                                    </div>
                                    <div class="d-flex">
                                        <span class="icon-phone"></span>
                                        <a href="#">+1 291 2902 392</a>
                                    </div>
                                    <div class="d-flex">
                                        <span class="icon-envelope"></span>
                                        <a href="#">info@mydomain.com</a>
                                    </div>
                                    <div class="d-flex">
                                        <span class="icon-globe"></span>
                                        <a href="#">https://mywebsite.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

</div> 

        <?php
        include 'fotter.php';
        ?>

</body>

</html>