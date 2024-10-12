<?php
include 'header.php';
include 'connect.php';
$sql = "SELECT * FROM contact ";
$result = mysqli_query($conn, $sql);

?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<div class="container child_detail" style="display: block; margin:auto; margin-top:100px;">
    <table class="table" id="myTable">
        <thead>
            <tr>

                <th scope="col">First_Name</th>
                <th scope="col">Last_Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
           

            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $data['first_name'] ?></th>
                    <th scope="row"><?php echo $data['last_name'] ?></th>
                   
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['subject'] ?></td>
                    <td><?php echo $data['message'] ?></td>


                    

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