<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shopping Page</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar with Search Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="test.php">
        <img src="img/iub_logo.png" alt="Shop Logo" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Build Career</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Vendor Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Start Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <form class="form-inline ml-auto"> <!-- Place search bar here -->
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <button class="btn btn-primary ml-2">Register</button>
    </div>
</nav>


<!-- Carousel and Text Container -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-9">
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExample" data-slide-to="1"></li>
                    <li data-target="#carouselExample" data-slide-to="2"></li>
                    <li data-target="#carouselExample" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ad1.jpg" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ad2.jpg" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ad3.jpg" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ad4.gif" class="d-block w-100" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-container">
                <div class="card">
                    <img src="img/vendor.png" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Vendors</h5>
                        <p class="card-text">
                            <li>razor</li>
                            <li>asus</li>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/events.png" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">Programming Contest.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- image slider -->
<section id="slider" class="pt-3 pb-5">
  <div class="container">
    <h1 class="text-center"><b>Responsive Owl Carousel</b></h1>
      <div class="slider">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="img/4.jpg" alt="" >
                        </div>
                        <h5 class="mb-0 text-center"><b>HTML CSS3 Tutorials</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="img/5.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Wordpress Tutorials</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="img/6.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>PHP MySQL Tutorials</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="img/7.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Javascript Tutorials</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="img/8.jpg" alt="">
                        </div>
                        <h5 class="mb-0 text-center"><b>Bootstrap Tutorials</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                </div>
            </div>
  </div>
</section>

<!-- Three Cards in a Row -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <!-- Card 1 Content -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <!-- Card 2 Content -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <!-- Card 3 Content -->
            </div>
        </div>
    </div>
</div>

<!-- Contact Info Container -->
<div class="contact-info-container mt-4">
    <!-- Contact information goes here -->
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Social Links -->
            </div>
            <div class="col-md-4 text-center">
                <!-- Product Name -->
            </div>
            <div class="col-md-4 text-right">
                <!-- Some Text -->
            </div>
        </div>
    </div>
</footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="script.js"></script>

</body>
</html>
