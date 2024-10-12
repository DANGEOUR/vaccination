<?php



include "connect.php";


if(isset($_GET['id'])){
    $x = $_GET['id'];


    $sql = "UPDATE appointment SET vaccinated=2 WHERE id='$x'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Status will be update');window.location.href='display_h.php';</script> ";

    }
    else{
        echo "<script>alert('Status will not update')</script>";

    }
    

    
}
?>