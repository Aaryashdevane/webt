<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Responsive Web Design</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Navbar Customization */
        .navbar {
            background-color: #563d7c; /* Dark purple */
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-nav .nav-link:hover {
            color: #ffde59 !important; /* Yellow hover effect */
        }

        /* Customizing the Carousel */
        .carousel-item {
            height: 400px;
            background-color: #2c3e50; /* Dark Blue */
            color: #ecf0f1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            font-weight: bold;
        }

        .carousel-caption h5 {
            font-size: 2rem;
        }

        /* Cards Customization */
        .card {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #34495e; /* Navy Blue */
        }

        .card-body {
            background-color: #ffffff;
        }

        .card-text {
            color: #7f8c8d; /* Light grey text */
        }

        .btn-primary {
            background-color: #563d7c; /* Purple */
            border: none;
        }

        .btn-primary:hover {
            background-color: #ffde59; /* Yellow */
            color: #563d7c;
        }

        /* Grid customization */
        .container {
            margin-top: 50px;
        }

        /* Footer Customization */
        footer {
            background-color: #34495e; /* Dark grey */
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        /* Responsive text size */
        @media (max-width: 768px) {
            .carousel-item {
                font-size: 1.5rem;
            }
            .card-title {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption">
                <h5>First Slide Content</h5>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption">
                <h5>Second Slide Content</h5>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption">
                <h5>Third Slide Content</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Cards Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Service 1</h5>
                    <p class="card-text">We offer amazing services to enhance your business growth.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Service 2</h5>
                    <p class="card-text">We provide customized solutions for your technical needs.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Service 3</h5>
                    <p class="card-text">Let us help you with creative strategies to drive success.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>© 2024 MyWebsite. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
