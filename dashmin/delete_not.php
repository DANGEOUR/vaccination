<?php


include "connect.php";


if(isset($_GET['id'])){
    $x = $_GET['id'];


    $sql = "DELETE FROM notification WHERE id='$x'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Notification was successfully deleted');window.location.href='show_notification.php';</script>";
    }
    else{
        mysqli_error($conn);
    }


}




?>