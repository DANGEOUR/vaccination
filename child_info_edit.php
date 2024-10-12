<?php

include "connect.php";

$new_sql = "SELECT * FROM notification JOIN availability on notification.availability = availability.a_id";
$new_res = mysqli_query($conn, $new_sql);
// $new_data = mysqli_fetch_assoc($new_res);

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

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</head>

<style>
    .container table {
        margin-top: 100px;
    }
</style>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">UpComing Dates of Vaccination</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table" border="1">
                        <thead>
                            <tr>
                                <th>Vaccine Name</th>
                                <th>UpComing Date</th>
                                <th>Avalibilty</th>
                            </tr>
                        <tbody>
                            <?php while ($data = mysqli_fetch_assoc($new_res)) { ?>
                                <tr>
                                    <td><?php echo $data['vaccine_name'] ?></td>
                                    <td><?php echo $data['up_date'] ?></td>
                                    <td><?php echo $data['avalible'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
                <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
            </div>
        </div>
    </div>

    <?php include "header.php";

    $sql = "SELECT * FROM appointment";
    $result = mysqli_query($conn, $sql);
    // $data = mysqli_fetch_assoc($result);

    ?>

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



        <div class="hero-v1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center mx-auto">
                        <span class="d-block subheading">Child Information</span>
                        <h1 class="heading mb-3">If you want so you will Edit Your Child information.</h1>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container" >
            <table class="table" border="1" id="myTable" >
                <thead>
                    <tr>
                        <th scope="col">F.Name</th>
                        <th scope="col">L.Name</th>
                        <th scope="col">F.Name</th>
                        <th scope="col">M.Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">P O B</th>
                        <th scope="col">D O B</th>
                        <th scope="col">B.Certificate</th>
                        <th scope="col">Image</th>
                        <th scope="col">Vaccine</th>
                        <th scope="col">Disability</th>
                        <th scope="col">Problem</th>
                        <th scope="col">Hospital</th>
                        <th scope="col">Time</th>
                        <th scope="col">Edit</th>
                        <th scope="col ">Delete</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Vaccinated</th>
                        <th scope="col ">Notification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_assoc($result)) { ?>

                        <tr>
                            <th scope="row"><?php echo $data['first_name']; ?></th>
                            <td><?php echo $data['last_name']; ?></td>
                            <td><?php echo $data['father_name']; ?></td>
                            <td><?php echo $data['mother_name']; ?></td>
                            <td><?php echo $data['age']; ?></td>
                            <td><?php echo $data['place_of_birth']; ?></td>
                            <td><?php echo $data['date_of_birth']; ?></td>
                            <td><?php echo $data['birth_certificate']; ?></td>
                            <td><img src="<?php echo $data['child_image']; ?>" alt="" width="50" height="50" style="border-radius: 30px;"></td>

                            <td><?php echo $data['vaccine_id']; ?></td>
                            <td><?php echo $data['disability_id']; ?></td>
                            <td><?php echo $data['problem_id']; ?></td>
                            <td><?php echo $data['hospital']; ?></td>
                            <td><?php echo $data['Time']; ?></td>
                            <td><a href="edit_now.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-danger">Edit</a></td>
                            <td><a href="delete_now.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-danger">Delete</a></td>
                            <td>

                                <?php

                                if ($data['status'] == 1) {
                                    echo "<p class='text-danger font-weight-bold'>Approved</p>";
                                } elseif ($data['status'] == 2) {
                                    echo "<p class='text-danger font-weight-bold'>Rejected</p>";
                                } else {
                                    echo "<p class='text-danger font-weight-bold'>Pending</p>";
                                }


                                ?>


                            </td>
                            <td>
                                <?php


                                if ($data['vaccinated'] == 1) {
                                    echo "<p class='text-danger font-weight-bold'>Vaccinated</p>";
                                } elseif ($data['vaccinated'] == 2) {
                                    echo "<p class='text-danger font-weight-bold'>Not vaccinated</p>";
                                } else {
                                    echo "<p class='text-danger font-weight-bold'>Pending</p>";
                                }




                                ?>
                            </td>
                            <td><a href="edit_now.php" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-bell fa-shake fa-2x" style="color: #f0003c; margin-left:20px;"></i></a></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>

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


        <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            let table = new DataTable('#myTable');
        </script>
</body>

</html>