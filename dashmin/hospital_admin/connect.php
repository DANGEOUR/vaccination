<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'vaccination';



$conn = mysqli_connect($servername,$username,$password,$database);



if($conn){
    // echo "connection is done";
}
else{
    // echo "connection is fail";

}





?>