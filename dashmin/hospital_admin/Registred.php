<?php
include 'connect.php';

include 'header1.php';
$q = "select * from vaccine";
$res = mysqli_query($conn, $q);

?>
 <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
    <div class="bg-light rounded h-100 p-4">
        <form Method="post" action="" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Hospital Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" name="image" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Hospital Image</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="location" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Location</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-control" name="vaccine">
                    <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                        <option value="<?php echo $data['vac_id'] ?>"><?php echo $data['vaccine'] ?></option>
                    <?php } ?>
                </select>
                <label for="floatingInput">Select vaccine</label>
                
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary" name="add_hospital">Add Notification
                </div>
                </button>
            </div>
        </form>
    </div>
</div>

<?php
include 'footer1.php';

// ...


if (isset($_POST['add_hospital'])) {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $imagetn = $_FILES['image']['tmp_name'];

    $folder = 'hospital_images/';
    $path = $folder . $image;
    move_uploaded_file($path, $imagetn);

    $location = $_POST['location'];
    $vaccine = $_POST['vaccine'];


    $sql = "INSERT INTO hospital(h_name,h_image,h_loc,vac_id)VALUES('$name','$path','$location','$vaccine')";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        echo "<script>alert('Hospital was added successfully');</script>";
    } else {
        echo "<script>alert('Hospital was added ');</script>";
    }
}



?>