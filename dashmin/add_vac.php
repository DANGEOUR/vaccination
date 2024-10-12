<?php
include 'header.php';
include 'connect.php';
?>
<div class="bg-light rounded h-100 p-4">
<h6 class="mb-4">ADD VACCINE</h6>
                         <form Method="post" action="add_vac.php" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" name="Vaccine" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">ADD VACCINE</label>
                            </div>
                            <div class="mt-4">
                                <button type="submit"class="btn btn-primary" name="add">Submit
                                </div>
                                </button>
                            
</form>
</div>
<?php
include 'footer.php';

if (isset($_POST['add'])) {
 
    $vaccine = $_POST['Vaccine'];

            // File uploaded successfully, proceed with database insertion
            $sql = "INSERT INTO vaccine (vaccine)VALUES('$vaccine')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Vaccine record successfully added.'); </script>";
            } else {
                echo "<script>alert('Error adding Vaccine record.'); </script>";
            }
           
    }

?>