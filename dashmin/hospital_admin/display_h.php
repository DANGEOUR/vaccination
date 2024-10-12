<?php




include "header1.php";

?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>




<div class="container my-5">
    <div class="image">
        <img src="../<?php echo $_SESSION['h_image']; ?>" alt="" width="300" height="300" style="border-radius: 13px;">
    </div>
    <div>
        <h1><?php echo $_SESSION['h_name'] ?></h1>
    </div>
    <div>
        <h1><?php echo $_SESSION['h_loc'] ?></h1>
    </div>
</div>

<?php

// $new = "SELECT * FROM hospital";
// $new_q = mysqli_query($conn,$new);
// $new_d = mysqli_fetch_assoc($new_q);

$h_name = $_SESSION['h_name'];


$sql = "SELECT * FROM appointment join vaccine on appointment.vaccine_id = vaccine.vac_id WHERE appointment.hospital = '$h_name' ";
$result = mysqli_query($conn,$sql);




?>


<div class="container">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Vaccine</th>
                <th scope="col">date-Time</th>
                <th scope="col">status</th>
                <th scope="col">Approve</th>
                <th scope="col">Reject</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th scope="row"><?php echo $data['first_name'] ?></th>
                <td><?php echo $data['last_name'] ?></td>
                <td><?php echo $data['vaccine'] ?></td>
                <td><?php echo $data['Time'] ?></td>
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
                <td><a href="vaccinated.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Vaccinated</a></td>
                <td><a href="unvaccinated.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Unvaccinated</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>




<?php

include "footer1.php";

?>

<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>