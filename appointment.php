<?php


include "connect.php";



if (isset($_POST['btn'])) {
    session_start();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $child_age = $_POST['age'];
    $place_of_birth = $_POST['place_of_birth'];
    $date_of_birth = $_POST['date_of_birth'];
    $bcb_number = $_POST['bcb_number'];

    $child_image = $_FILES['image']['name'];
    $child_imagetn = $_FILES['image']['tmp_name'];

    $folder = 'child_images/';
    $path = $folder . $child_image;
    move_uploaded_file($child_imagetn, $path);

    $vaccine = $_POST['vaccine'];
    $disabled = $_POST['disabled'];
    $problem = $_POST['problem'];
    $hospital = $_POST['hospital_name'];



    $sql = "INSERT INTO appointment (first_name,last_name,father_name,mother_name,age,place_of_birth,date_of_birth,birth_certificate,child_image,vaccine_id,disability_id,problem_id,hospital)VALUES('$fname','$lname','$father_name','$mother_name','$child_age','$place_of_birth','$date_of_birth','$bcb_number','$path','$vaccine','$disabled','$problem','$hospital')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('data insert successfully'); window.location.href='hospital_booking.php';</script>";
        $_SESSION['logo'] = '<a href="child_info_edit.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
      </svg></i></a>';
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['father_name'] = $father_name;
        $_SESSION['mother_name'] = $mother_name;
        $_SESSION['child_age'] = $child_age;
        $_SESSION['place_of_birth'] = $place_of_birth;
        $_SESSION['date_of_birth'] = $date_of_birth;
        $_SESSION['bcb_number'] = $bcb_number;
        $_SESSION['vaccine'] = $vaccine;
        $_SESSION['disabled'] = $disabled;
        $_SESSION['problem'] = $problem;
        $_SESSION['hospital_get'] = $hospital;
    } else {
        echo "<script>alert('data not insert successfully'); window.location.href='hospital_booking.php';</script>";
        // echo mysqli_error($conn);
    }
}
?>