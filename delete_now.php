<?php

include "connect.php";

if(isset($_GET['id'])){
    $x = $_GET['id'];

    $sql = "DELETE FROM appointment WHERE id='$x'";
    $ressult = mysqli_query($conn,$sql);

    if($ressult){
        echo "<script>alert('Child information is Deleted'); window.location.href='child_info_edit.php';</script>";
    }
    else{
        echo "<script>alert('Child information not Deleted'); window.location.href='child_info_edit.php';</script>";
        
    }

}

?>
