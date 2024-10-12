<?php

include "connect.php";
session_start();


$sql = "SELECT * FROM vaccine";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Management System</title>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- utton trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">My Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div>
                            <img src="<?php echo $_SESSION['login'] ?>" alt="" width="90" height="90" style="border-radius: 100px; ">
                        </div>
                        <div>
                            <label for="name">Name</label>
                            <?php if (!isset($_SESSION['name'])) { ?>
                                <h6>sorry</h6>
                            <?php } else { ?>
                                <h6><?php echo $_SESSION['name']; ?></h6>

                            <?php } ?>
                            <label for="email">Email</label>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <h6>sorry</h6>
                            <?php } else { ?>
                                <h6><?php echo $_SESSION['email']; ?></h6>

                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Vaccination System<span class="text-primary">.</span> </a></div>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                            <?php if (isset($_SESSION['hospital'])) { ?>

                                <li><?php echo $_SESSION['hospital']; ?></li>

                            <?php } ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Vaccines
                                </a>
                                <ul class="dropdown-menu">
                                    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                                        <li><a class="dropdown-item" href="hospital_booking.php?id=<?php echo $data['vac_id']; ?>"><?php print $data['vaccine']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="about.php" class="nav-link">About</a></li>


                            <li><a href="contact.php" class="nav-link">Contact</a></li>
                            <?php if (!isset($_SESSION['login'])) { ?>
                                <li><a href="registerd.php" class="nav-link">Register</a></li>
                                <li><a href="login.php" class="nav-link">Login</a></li>

                            <?php } else { ?>

                                <li><a href="logout.php" class="nav-link">LogOut</a></li>
                                <li><a href="#" class="nav-link"><img type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal" src="<?php echo $_SESSION['login'] ?>" alt="" width="50" height="50" style="border-radius: 30px;"></a></li>

                            <?php  } ?>

                            <?php if (isset($_SESSION['logo'])) { ?>
                                <li><a href="logout.php" class="nav-link"><?php echo $_SESSION['logo']; ?></a></li>

                            <?php } ?>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

            </div>
        </div>

    </header>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>