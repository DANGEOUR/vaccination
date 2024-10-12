<?php
include "connect.php";
include "header.php";

$x = $_GET['id'];
$q1 = "select * from hospital Where h_id='$x'";
$res1 = mysqli_query($conn, $q1);
$data1 = mysqli_fetch_assoc($res1);

$q = "select * from vaccine";
$res = mysqli_query($conn, $q);


?>


<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <form Method="post" action="" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $data1['h_name'] ?>">
                <label for="floatingInput">HOSPITAL NAME</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" name="image" class="form-control" id="floatingInput" placeholder="name@example.com" onChange="readURL(this)">
                <img id="proimg" src="./<?php echo $data1['h_image'] ?>" height=100 />
                <label for="floatingInput">HOSPITAL IMAGE</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="location" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $data1['h_loc'] ?>">
                <label for="floatingInput">LOCATION</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-control" name="vaccine">
                    <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                        <option value="<?php echo $data['vac_id'] ?>"> <?php if ($data['vac_id'] == $data1['vac_id']) {
                                                                        echo 'selected';
                                                                    }  ?> <?php echo $data['vaccine'] ?></option>
                    <?php } ?>
                </select>
                <label for="floatingInput">VACCINE</label>
                <div class="mt-4">
                    <button type="submit" class="btn btn-dark" name="update">Update Details
                </div>
                </button>
            </div>
        </form>
    </div>
</div>

<?php


include "footer.php";


if (isset($_GET['id'])) {
    $x = $_GET['id'];


    // $sql = "SELECT * FROM hospital WHERE h_id='$x'";
    // $result = mysqli_query($conn, $sql);

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $imagetn = $_FILES['image']['tmp_name'];

        $folder = 'hospital_images/';
        $path = $folder . $image;
        move_uploaded_file($path, $imagetn);


        $location = $_POST['location'];
        $vaccine = $_POST['vaccine'];


        $sql = "UPDATE hospital SET h_name='$name',h_image='$path',h_loc='$location',vac_id='$vaccine' WHERE h_id='$x'";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "<script>alert('Hospital Details Was Updated'); window.location.href='show_hospital.php';</script>";
        } else {
            echo "<script>alert('Hospital Details Was not Updated'); window.location.href='show_hospital.php';</script>";
        }
    }
}






?>


<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                    .css("visibility", "visible");
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>