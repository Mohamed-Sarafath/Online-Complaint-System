<html>

<head>
    <title>

    </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <script src="myScript.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Montserrat', sans-serif ; background-color: #f5f5f5;">

    <!--    Navbar-container-->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-sm">
        <a class="navbar-brand" href="#">
          <img src="img/IMG-20230516-WA0015.jpg" alt="Talk2Town-logo" class="logo rounded" style="width: 170px; height: 70px;">
          <span class="d-lg-none ml-2">Kalmunai Municipal Council</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ContectUs.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="HowToComplient.php">How to Complaint</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="PrivacyPolicy.php">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>  

    <!-- <alert notification> -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="alert alert-danger p-2" role="alert">
        <div class="row align-items-center">
          <div class="col-12 col-md-10">
            <marquee direction="right" scrollamount="10" style="color: red;">
              Now you can complain online! Please check the top page.
            </marquee>
          </div>
          <div class="col-12 col-md-2 text-md-end mt-2 mt-md-0">
            <a href="comlaint.php" class="btn btn-outline-success">Online Complaint</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
    <!--    carousel-container-->
    <div class="container-fluid pb-0">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="img/aaa14.jpg" alt="First slide" width="500px" height="520px">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="img/visit kalmunai.jpg" alt="Second slide" width="500px" height="520px">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="img/sainthamaruthu.jpg" alt="Third slide" width="500px" height="520px">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
              
        </div>
    </div>
    
    <!-- Muncipal events -->

    <div class="container border shadow p-3 mb-5 bg-white rounded">
      <h2 class="text-center pb-3" style="color: #007bff;">Latest News</h2>
      <div class="row ">
        <div class="col-sm-6 col-md-4 py-3">
          <div class="card border border-primary">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-4 py-3">
          <div class="card border border-primary">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-4 py-3">
          <div class="card border border-primary">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-4 py-3">
          <div class="card border border-primary">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-4 py-3">
          <div class="card border border-primary">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    
        <div class="col-sm-6 col-md-4 py-3">
          <div class="card border border-primary">
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Google map- Kalmunai -->
    <div class="container">
        <h1>Kalmunai, Sri Lanka</h1>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15743.90280149663!2d81.82438326788214!3d7.414382010246899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1095d5e6e5d6d%3A0x594a881b35f221d8!2sKalmunai%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1620963844304!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="mt-3">
          <h2>About Kalmunai</h2>
          <p>Kalmunai is a city in the Ampara district of Eastern Province, Sri Lanka. It is the third largest city in the province, after Batticaloa and Ampara. The city is located on the southeastern coast of Sri Lanka, and has a population of over 100,000 people. The majority of the population are Sri Lankan Moors, a Muslim ethnic group.</p>
          <p>Kalmunai is known for its scenic beaches, including Pasikudah and Kalkudah, which are popular tourist destinations. The city is also home to several important religious sites, including the Kalmunai Jumma Mosque and the Kalmunai Sithy Vinayagar Temple.</p>
        </div>
      </div>

      <!-- Vission and mission -->
      
      <div class=" container jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <h2 class="text-primary">Vision</h2>
              <p>Our vision is to create a sustainable and livable city that serves the needs of its citizens.</p>
            </div>
            <div class="col-md-6 col-sm-12">
              <h2 class="text-primary">Mission</h2>
              <p>Our mission is to provide effective and efficient municipal services that meet the needs of our citizens and promote the development of our community.</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="timeline">
                <div class="timeline-item">
                  <div class="timeline-item-content">
                    <h3 class="text-primary">Vision</h3>
                    <p>Our vision is to create a sustainable and livable city that serves the needs of its citizens.</p>
                  </div>
                </div>
                <div class="timeline-item">
                  <div class="timeline-item-content">
                    <h3 class="text-primary">Mission</h3>
                    <p>Our mission is to provide effective and efficient municipal services that meet the needs of our citizens and promote the development of our community.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="timeline">
                <div class="timeline-item">
                  <div class="timeline-item-content">
                    <h3 class="text-primary">2020</h3>
                    <p>Initiated the "Clean Kalmunai" campaign to promote a cleaner and healthier environment.</p>
                  </div>
                </div>
                <div class="timeline-item">
                  <div class="timeline-item-content">
                    <h3 class="text-primary">2021</h3>
                    <p>Launched the "Green Kalmunai" initiative to promote sustainable development and reduce our environmental footprint.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12 ">
            <p>
              Kalmunai Municipal Council is a local government authority responsible for providing municipal services to the citizens of Kalmunai city in the Eastern Province of Sri Lanka. The Council's vision is to create a sustainable and livable city that serves the needs of its citizens. This means that they aim to ensure that the city remains environmentally friendly, economically prosperous, and socially inclusive. The Council's mission is to provide effective and efficient municipal services that meet the needs of their citizens and promote the development of their community. To achieve this mission, the Council is focused on improving the quality of life for its citizens by providing high-quality services, such as garbage collection, road maintenance, water supply, and sanitation facilities. The Council is also committed to promoting sustainable development and reducing its environmental footprint through initiatives such as the "Green Kalmunai" campaign. By prioritizing sustainability and community development, the Kalmunai Municipal Council is working towards creating a better future for its citizens and the environment.
            </p>
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
