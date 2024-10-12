<?php
include 'header.php';
include 'connect.php';
$sql = "SELECT * FROM vaccine";
$result = mysqli_query($conn, $sql);

?>


<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<div class="container child_detail" style="display: block; margin:auto; margin-top:100px;">
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>

                <th scope="col">Available</th>

                
                <th scope="col">Delete </th>

            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $data['vaccine'] ?></th>



                  
                    <td><a class="btn btn-dark" href="vac_delete.php?id=<?php echo $data['vac_id']; ?>">Delete</a></td>

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