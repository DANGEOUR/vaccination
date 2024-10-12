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


    

    <?php

    include "header.php";
    // $sql = "SELECT * FROM hospital";
    // $result = mysqli_query($conn, $sql);
    $sql = "SELECT * FROM hospital JOIN vaccine ON hospital.vac_id = vaccine.vac_id";
    $result = mysqli_query($conn, $sql);
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


    <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-7 text-center mx-auto">
                    <div>
                        <input type="text" id="find" style="display: block; margin:auto; margin-bottom:25px; padding:10px 70px; border-radius: 10px;;" onkeyup="liveSearch()" placeholder="Looking for Hospital">
                    </div>
                    <h2 class="section-heading">Let's Book Hospital for vaccination</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptate!</p>
                </div>
            </div>
            <div class="row" id="search-results">
                <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-lg-4 card-item">
                        <div class="card" style="width: 18rem;">
                            <img src="dashmin/<?php echo $data['h_image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body plant_card">
                                <h5 class="card-title"><?php echo $data['h_name'] ?></h5>
                                <p class="card-text"><?php echo $data['h_loc'] ?></p>
                                <p class="card-text"><?php echo $data['vaccine'] ?></p>
                                <a href="hospital_booking.php?id=<?php echo $data['h_id']; ?>" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
   

    



 
  </div>

  </div> 
  <?php
        include 'fotter.php';
        ?>


<?php


if (isset($_POST['btn'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  $sql = "INSERT INTO contact (first_name,last_name,email,subject,message)VALUES('$fname','$lname','$email','$subject','$message')";
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
    echo "<script>alert('Your data was successfully submited'); window.location.href='contact.php';</script>";
  } else {
    echo "<script>alert('Your data was not successfully submited'); window.location.href='contact.php';</script>";
  }
}




?>

<!-- <script src="index.js"></script> -->

<script>
function liveSearch() {
    let filter = document.getElementById('find').value.toUpperCase();
    let items = document.querySelectorAll('.card-item');

    items.forEach((item) => {
        let h5 = item.querySelector('.card-title');
        let value = h5.textContent || h5.innerText; // Get the text content of the h5 element

        if (value.toUpperCase().indexOf(filter) > -1) {
            item.style.display = "block"; // Show the card
        } else {
            item.style.display = "none"; // Hide the card
        }
    });
}
</script>

</body>

</html>