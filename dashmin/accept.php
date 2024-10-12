<?php



include "connect.php";


if(isset($_GET['id'])){
    $x = $_GET['id'];


    $sql = "UPDATE appointment SET status=1 WHERE id='$x'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Request Will Be Accepted');window.location.href='index.php';</script>";
    }
    
    

    
}
?>