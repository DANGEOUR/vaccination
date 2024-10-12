<?php


include "connect.php";
include "header1.php"
// $sql = "SELECT * FROM appointment";
// $result = mysqli_query($conn, $sql);

// $sql1 = "SELECT * FROM signup";
// $res1 = mysqli_query($conn, $sql);
// $data1 = mysqli_fetch_assoc($res1);


// $new = "SELECT * FROM approve";
// $new_res = mysqli_query($conn,$new);
// $new_data = mysqli_fetch_assoc($new_res);

?>

<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>




<?php
include 'footer1.php';

?>



<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>

</body>

</html>