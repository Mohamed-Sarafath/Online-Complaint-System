<?php
include("connection.php");

$username = $_POST['name'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$complaint_category = $_POST['complaint_category'];
$about_complaint = $_POST['about_complaint'];

// Check if a file was uploaded
if (isset($_FILES["complaint_photos"]) && $_FILES["complaint_photos"]["error"] === 0) {
    $target_dir = "uploaded_img/";
    $target_file = $target_dir . basename($_FILES["complaint_photos"]["name"]);
    $flname =  ($_FILES["complaint_photos"]["name"]);

    // Check if the file was moved successfully
    if (move_uploaded_file($_FILES["complaint_photos"]["tmp_name"], $target_file)) {
        $qry = "INSERT INTO `complaint`(`name`, `address`, `c_number`, `email`, `catagory`, `about`, `photo`) 
                VALUES ('$username','$address','$contact_number','$email','$complaint_category','$about_complaint','$flname')";

        $result = mysqli_query($con, $qry);

        if ($result) {
            echo "<script>
                    alert('Data inserted successfully');
                    window.location.href='complaint.php';
                </script>";
        } else {
            echo "<script>
                    alert('Something went wrong!');
                    window.location.href='complaint.php';
                </script>";
        }
    } else {
        echo "<script>
                alert('Error moving uploaded file');
                window.location.href='complaint.php';
            </script>";
    }
} else {
    echo "<script>
            alert('No file uploaded or error occurred');
            window.location.href='complaint.php';
        </script>";
}
?>
