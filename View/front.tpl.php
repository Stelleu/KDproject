<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ceci est une page test">
    <title><?= "Kaisen Data" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="View/assets/css/style.css">

</head>
<body>
    <header>
        <nav class="navbar header navbar-expand-lg bg-purple fixed-top text-white text-uppercase">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="View/assets/img/logo-purple.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a  id="nav-link" class="nav-link active text-white fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-link"  class="nav-link text-white fw-bold" href="#">what we do ?</a>
                        </li>
                        <li class="nav-item">
                            <a  id="nav-link" class="nav-link text-white fw-bold" href="#">choose us</a>
                        </li>
                        <li class="nav-item">
                            <a  id="nav-link" class="nav-link text-white fw-bold" href="#">solutions</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a  id="nav-link" class="nav-link text-white fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-uppercase" href="#">Case studies 1</a></li>
                                <li><a class="dropdown-item  text-uppercase" href="#">Case studies 2 </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a  id="nav-link" class="nav-link text-white fw-bold" href="#">who are we?</a>
                        </li>
                        <li class="nav-item">
                            <a  id="nav-link" class="nav-link text-white fw-bold" href="#">who are we?</a>
                        </li>
                        <li class="nav-item">
                            <button id="btn-head" class="btn btn-light rounded-pill text-capitalize fw-bold" type="button"> Free Trial</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php include $this->view.".view.php";?>
    </main>
    <section class="bg-navy pt-5 text-grey">
        <footer>
            <div class="container text-white">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fs-2 py-5 text-white">Join our community by using our services and grow your business.</h3>
                    </div>
                    <div class="col-6 my-5 py-2 align-middle text-end">
                        <button class="align-middle btn py-3 px-3 btn-purple rounded-pill ">Try It For Free</button>
                    </div>
                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                </div>
                <div class="row">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <p class="text-light-grey">&copy; 2022</p>
                    <p class="text-light-grey">All rights reserved</p>
                </div>
                    <div class="col-3 col-md-2 mb-3 ">
                        <h5 class="fw-bold">Get in Touch</h5>
                        <ul class="nav flex-column ">
                            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-light-grey ">Moonshine St. 14/05</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey ">Light City, London,</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey ">United Kingdom</a></li>
                            <br>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey ">info@email.com</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey ">+00 (123) 456 78 90</a></li>
                        </ul>
                    </div>

                    <div class="col-3 col-md-2 mb-3">
                        <h5 class="fw-bold">Learn More</h5>
                        <ul class="nav flex-column text-grey">
                            <li class="nav-item mb-2"><a href="#" class=" p-0 text-light-grey">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey">About Us</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey">Our Story</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey">Projects</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey">Terms of Use</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light-grey">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-3 offset-md-1 mb-3">
                        <form>
                            <h5 class="fw-bold ">Our newsletter</h5>
                            <p class="text-light-grey">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-wpurple px-5 py-2" type="button" id="button-addon2">Join</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(function() {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 3,
                margin: 10,
                loop: true,
                nav: true
            });
        });
        $(function() {
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 50) {
                    $(".header").addClass("active-header");
                    $(".nav-link").removeClass("text-white");
                    $(".nav-link").addClass("text-grey");

                    $("#btn-head").addClass("btn-purple");
                    $(".header").removeClass("bg-purple");
                    $("#btn-head").removeClass("btn-light");

                } else {
                    $(".header").removeClass("active-header");
                    $("#btn-head").removeClass("btn-purple");
                    $(".header").addClass("bg-purple");
                    $(".nav-link").addClass("text-white");
                    $(".nav-link").removeClass("text-grey");

                    $("#btn-head").addClass("btn-light");
                }
            });
        });
    </script>
</body>
</html>