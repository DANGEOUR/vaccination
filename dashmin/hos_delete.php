<?php
include('connect.php');
$x=$_GET['id'];
$q="delete from hospital where h_id='$x'";
$res=mysqli_query($conn,$q);
if($res){
    echo "<script>alert('Deleted Succesfully');window.location.href='show_hospital.php'</script>";
}
else{
    echo mysqli_error($conn);
}


?>