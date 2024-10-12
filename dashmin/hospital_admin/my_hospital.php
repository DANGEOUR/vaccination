<?php
include 'connect.php';

include 'header1.php';
$q = "select * from vaccine";
$res = mysqli_query($conn, $q);

?>
<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
    <div class="bg-light rounded h-100 p-4">
        <form class="mt-5" Method="post" action="" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Hospital Name</label>
            </div>


            <div class="form-floating mb-3">
                <input type="text" name="location" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Location</label>
            </div>



            <div class="mt-4">
                <button type="submit" class="btn btn-primary" name="log_hospital">Login Hospital
            </div>
            </button>
    </div>
    </form>
</div>


<?php

include 'footer1.php';
// ...

if (isset($_POST['log_hospital'])) {
    $h_name = $_POST['name'];
    $h_loc = $_POST['location'];

    $sql = "SELECT * FROM hospital WHERE h_name = '$h_name'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    $checkname = $data['h_name'];
    $checkadd = $data['h_loc'];
    $h_image = $data['h_image'];
    $h_id = $data['h_id'];


    if ($h_name === $checkname && $h_loc === $checkadd) {
        echo "<script>alert('Hospital Login Successfully');window.location.href='display_h.php';</script>";
        $_SESSION['h_name'] = $checkname;
        $_SESSION['h_loc'] = $checkadd;
        $_SESSION['h_image'] = $h_image;
        $_SESSION['h_id'] = $h_id;
    } else {
        echo "<script>alert('Hospital Login faild');</script>";
    }
}


?>


