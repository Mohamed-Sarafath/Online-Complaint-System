<!DOCTYPE html>
<html>
<head>
	<title>Complaint Form</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="formStyle.css">
</head>
<body style="font-family: 'Montserrat', sans-serif">

              <!-- Navigation Bar -->
  <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Kalmunai Municipal Council
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="FirstPage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ContectUs.php">Contact Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="HowToComplient.php">How to Complaint</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="Aboutus.php">About Us</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="PrivacyPolicy.php">Privacy Policy</a>
                          </li>
            
                      </ul>
                </div>
              </nav>
        </div>
    </div>
</div>
<div class="container-fluid bg-light mt-5 pt-3 pb-5">
    <div class="row">
        <!-- online complaint -->
        <div class="col-7">
            <div class="container mt-2">
                <h1 class="mb-4">Complaint Form</h1>
                <form method="post" action="add_complaint.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number:</label>
                        <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="complaint_category">Complaint Category:</label>
                        <select class="form-control" id="complaint_category" name="complaint_category" required>
                            <option value="">Select a category</option>
                            <option value="Electricity">Electricity</option>
                            <option value="Water Supply">Water Supply</option>
                            <option value="Roads and Drainage">Roads and Drainage</option>
                            <option value="Garbage">Garbage</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="about_complaint">About Complaint:</label>
                        <textarea class="form-control" id="about_complaint" name="about_complaint" rows="3" required></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="">Complaint Photos:</label>
                        <!-- <input type="file" class="form-control-file" id="complaint_photos" name="complaint_photos" multiple> -->
                        <input type="file" accept="image/png, image/jpeg, image/jpg"  name="complaint_photos">
                    </div>
                    <button type="submit" class="btn btn-primary " name = "submit">Submit</button>
                </form>
            </div>
        </div>
        <!-- Track complaint -->
        <div class="col-5">
            <div class="container-fluid bg-light mt-5 pt-1 pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-4">Track Your Complaint</h2>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="complaint_id">Complaint ID:</label>
                                <input type="text" class="form-control" id="complaint_id" name="complaint_id" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Track</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Status of Your Complaint</h2>
                        <p>No complaints to track.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Footer -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <footer class="bg-dark text-white">
                        <div class="container py-4">
                          <div class="row">
                            <div class="col-md-4">
                              <h5>About Us</h5>
                              <p>We are a team of developers who specialize in creating beautiful and functional websites using Bootstrap.</p>
                            </div>
                            <div class="col-md-4">
                              <h5>Links</h5>
                              <ul class="list-unstyled">
                                <li><a href="FirstPage.html">Home</a></li>
                                <li><a href="Aboutus.html">About Us</a></li>
                                <li><a href="Documentatin.html">Documentation</a></li>
                                <li><a href="ContectUs.html">Contact Us</a></li>
                              </ul>
                            </div>
                            <div class="col-md-4">
                              <h5>Contact Us</h5>
                              <address>
                                <strong>Bootstrap Web Design</strong><br>
                                123 Main St.<br>
                                Anytown, USA 12345<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                              </address>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <p>&copy; 2023 Bootstrap Web Design</p>
                            </div>
                          </div>
                        </div>
                      </footer>
                      
                </div>
            </div>
        </div>
</body>
</html>

