<?php
include 'header.php';
$q = "SELECT * FROM  availability";
$res = mysqli_query($conn, $q);





?>
<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <form Method="post" action="" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Vaccine Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Select Date</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-control" name="avalible">
                    <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                        <option value="<?php echo $data['a_id'] ?>"><?php echo $data['avalible'] ?></option>
                    <?php } ?>
                </select>
                <label for="floatingInput">availability</label>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary" name="add_not">Add Notification
                </div>
                </button>
            </div>
        </form>
    </div>
</div>

<?php
include 'footer.php';
include 'connect.php';

// ...

if(isset($_POST['add_not'])){
    $vac_name = $_POST['name'];
    $date = date('Y-m-d',strtotime($_POST['date']));
    $avalible = $_POST['avalible'];

    $sql = "INSERT INTO notification (vaccine_name,up_date,availability)VALUES('$vac_name','$date','$avalible')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Notification was successfully Added');window.location.href='show_notification.php';</script>";
    }
    else{
        echo "<script>alert('Notification was Not Added');</script>";

    }

}

?>