<?php
include('connection.php');

extract($_POST);

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $complaint_category = $_POST['complaint_category'];
    $about_complaint = $_POST['about_complaint'];

    $target_dir = "uploaded_img/";
    $target_file = $target_dir . basename($_FILES["complaint_photos"]["name"]);
    $flname="uploaded_img/".basename($_FILES["complaint_photos"]["name"]);

    $sql = "insert into complaint value('','$username','$address','$contact_number','$email','$complaint_category','$about_complaint','$flname')";
    
    $upload = mysqli_query($con,$sql);
          if($upload){
            move_uploaded_file($_FILES["complaint_photos"]["tmp_name"], $target_file);
             $message[] = 'Your Complaint has been sent.';
          }else{
             $message[] = 'Something Went Wrong.';
          }

   // echo "<script type='text/javascript'> alert('Your Complaint has been sent.'); window.history.go(-1);</script>";
}
else{
    echo "<script type='text/javascript'> alert('Something Went Wrong.'); window.history.go(-1);</script>";
}
?>