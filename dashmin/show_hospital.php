<?php
include 'header.php';
include 'connect.php';
$sql = "SELECT * FROM hospital JOIN vaccine on vaccine.vac_id  = hospital.vac_id";
$result = mysqli_query($conn, $sql);

?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<div class="container child_detail" style="display: block; margin:auto; margin-top:100px;">
    <table class="table" id="myTable">
        <thead>
            <tr>

                <th scope="col">Hospital_Name</th>
                <th scope="col">Hospital_Image</th>
                <th scope="col">Location</th>
                <th scope="col">Vaccine </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete </th>

            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $data['h_name'] ?></th>
                    <td><img src="./<?php echo $data['h_image']; ?>" alt="" width="50" height="50" style="border-radius: 30px;"></td>
                    <td><?php echo $data['h_loc'] ?></td>
                    <td><?php echo $data['vaccine'] ?></td>


                    <td><a class="btn btn-primary" href="hos_update.php?id=<?php echo $data['h_id']; ?>">Update</a></td>
                    <td><a class="btn btn-dark" href="hos_delete.php?id=<?php echo $data['h_id']; ?>">Delete</a></td>

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