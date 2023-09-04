<!DOCTYPE html>
<html>
<head>
    <title>Complaints List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
    include('connection.php');    
?>
    <div class="container-flued">
        <div class="complaint-view">
            <table class="table table-striped mt">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>About</th>
                        <th>Image</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qry = "SELECT * FROM complaint";
                    $result = mysqli_query($con, $qry);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['c_number']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['catagory']; ?></td>
                            <td><?php echo $row['about']; ?></td>
                            <td><img src="uploaded_img/<?php echo $row['photo']; ?>" height="100" alt=""></td>
                            <td><a href="#">Action</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
