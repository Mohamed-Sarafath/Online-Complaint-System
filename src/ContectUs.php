<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
                          <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
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

  <!-- Page Content -->
  <div class="container my-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Contact Us</h1>
        <hr class="bg-primary">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <h4>Address:</h4>
        <p>Kalmunai Municipal Council</p>
        <p>No. 20, Main Road,</p>
        <p>Kalmunai 32300,</p>
        <p>Sri Lanka</p>
        <br>
        <h4>Contact Information:</h4>
        <p>Email: info@kalmunaicouncil.com</p>
        <p>Phone: +94 11 123 4567</p>
      </div>

    </div>
  </div>
  
  <!-- Frequently Asked Questions (FAQs)  -->
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Frequently Asked Questions</h2>
        <hr class="bg-primary mb-5">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="accordion" id="faqAccordion">
          <div class="card">
            <div class="card-header" id="faqHeader1">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                  What types of complaints can I submit?
                </button>
              </h5>
            </div>
  
            <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeader1" data-parent="#faqAccordion">
              <div class="card-body">
                You can submit any complaint related to municipal services, such as garbage collection, street lighting, water supply, road maintenance, etc.
              </div>
            </div>
          </div>
  
          <div class="card">
            <div class="card-header" id="faqHeader2">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                  How do I track the status of my complaint?
                </button>
              </h5>
            </div>
            <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeader2" data-parent="#faqAccordion">
              <div class="card-body">
                You can track the status of your complaint by logging in to your account and checking the "My Complaints" section. You will receive email updates when there are any updates to your complaint.
              </div>
            </div>
          </div>
  
          <div class="card">
            <div class="card-header" id="faqHeader3">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                  What if I have a problem with the online complaint system?
                </button>
              </h5>
            </div>
            <div id="faqCollapse3" class="collapse" aria-labelledby="faqHeader3" data-parent="#faqAccordion">
              <div class="card-body">
                If you experience any technical issues or have any other problems with the online complaint system, you can contact our support team via email or phone, and we will assist you as soon as possible.
              </div>
            </div>
          </div>
  
          <div class="card">
            <div class="card-header" id="faqHeader4">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                  Is my personal information secure?
                </button>
              </h5>
            </div>
            <div id="faqCollapse4" class="collapse" aria-labelledby="faqHeader4" data-parent="#faqAccordion">
              <div class="card-body">
                If you experience any technical issues or have any other problems with the online complaint system, you can contact our support team via email or phone, and we will assist you as soon as possible.
              </div>
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
  
