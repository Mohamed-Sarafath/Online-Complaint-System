<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Complaint Form</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">s
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <!-- Bootstrap JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js/2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="formStyle.css?v=<?php echo time(); ?>">
</head>
<body style="font-family: 'Montserrat', sans-serif">
  <div class="container mt-5">
    <h2>Complaint Form</h2>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="contact">Contact Number:</label>
        <input type="text" class="form-control" id="contact" name="contact" required>
      </div>
      <div class="form-group">
        <label for="category">Complaint Category:</label>
        <select class="form-control" id="category" name="category" required>
          <option value="">Select Category</option>
          <option value="Sanitation">Sanitation</option>
          <option value="Water Supply">Water Supply</option>
          <option value="Roads">Roads</option>
          <option value="Streetlights">Streetlights</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="complaint">Complaint Details:</label>
        <textarea class="form-control" id="complaint" name="complaint" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="photos">Add Photos:</label>
        <input type="file" class="form-control-file" id="photos" name="photos[]" multiple>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
