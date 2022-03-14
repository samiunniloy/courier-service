<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="image/logo (2).png" alt="" class="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#Steps">Steps</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#subscribe">Contact us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="user-login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="office/login.php">Admin log </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide orange-bg" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1>Fastest Delivery</h1>
                        <p>We can ensure you the fastest delivery on any location.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="image/sev1.jpg"class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1>Easy Pick-Up</h1>
                        <p>You can easily take your Good just by matching your tracking number.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="image/sev2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1>Reasonable Price</h1>
                        <p>We don't charge extra on any Goods of your's.</p>
                    
                    </div>
                    <div class="col-md-5">
                        <img src="image/sev3.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    </div>
    <div class="container shoes" id="Steps">
        <h3>Steps</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="image/form2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Fill The Form</h5>
                  <p class="card-text">We specialize in the rapid, cost-effective and reliable delivery of couriers across different locations</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/box.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Collect</h5>
                  <p class="card-text">Priority depends on the urgency of the package and the type of goods, catering to varying budgets.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/delivery.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Delivery</h5>
                  <p class="card-text">We can ensure the fastest delivery all over the country.And we also have special 24hr delivery service.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="container" id="services">
        <h3>Services</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="image/serv1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> Delivery of Heavy Goods</h5>
                  <h5>$2/kg</h5>
                  <p class="card-text">We make special arrangement to ensure the deliver of heavy Goods.</p>
                </div>
                <div class="card-footer">
                 <button class="buy-me">Purchase</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/serv2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Delivery of Small Good</h5>
                  <h5>$3</h5>
                  <p class="card-text">We can easily deliver paper or document on a reasonable price.</p>
                </div>
                <div class="card-footer">
                 <button class="buy-me">Purchase</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="image/serv3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Delivery of Important Goods</h5>
                  <h5>$5</h5>
                  <p class="card-text">We can ensure the safety of important paper like document or something. </p>
                </div>
                <div class="card-footer">
                 <button class="buy-me">Purchase</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="container social" id="subscribe">
        <h3>Contact With Us</h3>
        <div class="contact">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/></a>

                    <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>

                    <a href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v2.png"/></a>
                    <a href="#"><img src="https://img.icons8.com/fluency/48/000000/gmail-new.png"/></a>
                    </li>
                </ul>
            </div>
        <div class="footer">
            <footer>
                <small>All right reserved. Created by Group 12.</small>
            </footer>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>
</html>