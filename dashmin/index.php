<?php


include "connect.php";
include "header.php";
$sql = "SELECT * FROM appointment";
$result = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM signup";
$res1 = mysqli_query($conn, $sql);
$data1 = mysqli_fetch_assoc($res1);




// $new = "SELECT * FROM approve";
// $new_res = mysqli_query($conn,$new);
// $new_data = mysqli_fetch_assoc($new_res);

?>

<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


<div class="container child_detail" style="display: block; margin:auto; margin-top:100px;">
    <table class="table" id="myTable">
        <thead>
            <tr>

                <th scope="col">F.Name</th>
                <th scope="col">L.Name</th>
                <th scope="col">Fa.Name</th>
                <th scope="col">Ma.Name</th>
                <th scope="col">Age</th>
                <th scope="col">P.O.B</th>
                <th scope="col">D.O.B</th>
                <th scope="col">Birth.C</th>
                <th scope="col">Image</th>
                <th scope="col">Vaccine</th>
                <th scope="col">Desability</th>
                <th scope="col">Problem</th>
                <th scope="col">Hospital</th>
                <th scope="col">Time</th>
                <th scope="col">Vaccinated</th>
                <th scope="col">Approve</th>
                <th scope="col">Reject</th>

            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $data['first_name'] ?></th>
                    <td><?php echo $data['last_name'] ?></td>
                    <td><?php echo $data['father_name'] ?></td>
                    <td><?php echo $data['mother_name'] ?></td>
                    <td><?php echo $data['age'] ?></td>
                    <td><?php echo $data['place_of_birth'] ?></td>
                    <td><?php echo $data['date_of_birth'] ?></td>
                    <td><?php echo $data['birth_certificate'] ?></td>
                    <td><img src="../<?php echo $data['child_image']; ?>" alt="" width="50" height="50" style="border-radius: 30px;"></td>
                    <td><?php echo $data['vaccine_id'] ?></td>
                    <td><?php echo $data['disability_id'] ?></td>
                    <td><?php echo $data['problem_id'] ?></td>
                    <td><?php echo $data['hospital'] ?></td>
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

                    <td><a class="btn btn-warning" href="accept.php?id=<?php echo $data['id'];  ?>">Accept</a></td>
                    <td><a class="btn btn-danger" href="reject.php?id=<?php echo $data['id']; ?>">Reject</a></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include 'footer.php';

?>



<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>

</body>

</html>