<?php
include 'header.php';
include 'connect.php';
$sql = "SELECT * FROM notification JOIN availability ON  availability.a_id = notification.availability ";
$result = mysqli_query($conn, $sql);

?>


<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<div class="container child_detail" style="display: block; margin:auto; margin-top:100px;">
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>

                <th scope="col">Vaccine Name</th>

                <th scope="col">Upcoming date</th>
                <th scope="col">Availability</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $data['vaccine_name'] ?></th>



                    <td><?php echo $data['up_date'] ?></td>
                    <td><?php echo $data['avalible'] ?></td>
                    
                    <td><a href="delete_not.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Delete</a></td>
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