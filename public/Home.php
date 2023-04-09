<!DOCTYPE html>

<head>
    <title>F&B</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            color: white;
            font-family: Arial;
            font-size: 17px;
        }

        .container .navbar {
            position: absolute;
            width: 100%;
            left: 0;
        }

        .container-d img {
            width: 100%;
            height: 720px;
        }

        .container-d .content {
            position: absolute;
            bottom: 200px;
            left: 830px;
            background: rgb(0, 0, 0);
            /* Fallback color */
            background: rgba(0, 0, 0, 0.5);
            /* Black background with 0.5 opacity */
            color: #f1f1f1;
            padding: 20px;
            width: 500px;
        }

        .navbar-scroll .nav-link,
        .navbar-scroll .navbar-toggler-icon {
            color: #fff;
        }

        /* Color of the links AFTER scroll */
        .navbar-scrolled .nav-link,
        .navbar-scrolled .navbar-toggler-icon {
            color: #4f4f4f;
        }

        /* Color of the navbar AFTER scroll */
        .navbar-scrolled {
            background-color: #fff;
        }

        /* An optional height of the navbar AFTER scroll */
        .navbar.navbar-scroll.navbar-scrolled {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .row .col {
            margin-left: 80px;
        }

        .card-text {
            color: black;
        }

        .containerf img {
            width: 100%;
            height: 720px;
        }

        .containerf .content {
            position: absolute;
            top: 1500px;
            left: 80px;
            background: rgb(0, 0, 0);
            /* Fallback color */
            background: rgba(0, 0, 0, 0.5);
            /* Black background with 0.5 opacity */
            color: #f1f1f1;
            padding: 20px;
            width: 500px;
        }
    </style>


</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <img src="public/assets/logo2.png" height="80">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-d">
        <img src="public/assets/sushibg.jpg" alt="...">
        <div class="container">
            <div class="content">
                <h1>Sushi</h1>
                <p> wake up little sushi</p>
                <p> shrimply the best</p>
                <p> let the good times roll</p>
                <p> we dance to a different tuna</p>
                <p> this is how we roll</p>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #4f5866;">
        <br>
        <br>
        <div class="row">
            <div class="col-12 md-2">
                <h4 style="text-align: center;">Signature Dish</h4>
                <br>
            </div>

            <!-- card image -->
            <div class="row">
                <div class="col" class="colcard" style="align-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="public/assets/sushim1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="public/assets/sushim2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="public/assets/sushim3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <div class="containerf">
        <img src="public/assets/sushiabout.jpg" alt="">
        <div class="container">
            <div class="content" id="c_about">
                <h1>About</h1>
                <p> wake up little sushi</p>
                <p> shrimply the best</p>
                <p> let the good times roll</p>
                <p> we dance to a different tuna</p>
                <p> this is how we roll</p>
            </div>
        </div>
        <div class="row">
        </div>
    </div>

    <div class="container-fluid" style="background-color: #4f5866;">
        <div class="container">
            <section class="contact py-5" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Contact</h4>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="address">
                                <h5>Address:</h5>
                                <ul class="list-unstyled">
                                    <li> T-Mobile Customer Relations</li>
                                    <li> PO Box 37380</li>
                                    <li> Albuquerque, NM 87176-7380</li>
                                </ul>
                                <p>Please don't send anything to this address.</p>
                            </div>
                            <div class="email">
                                <h5>Email:</h5>
                                <ul class="list-unstyled">
                                    <li> info@email.com</li>
                                    <li> info@email.com</li>
                                </ul>
                            </div>
                            <div class="phone">
                                <h5>Phone:</h5>
                                <ul class="list-unstyled">
                                    <li> +91- 8800XXXXXX34</li>
                                    <li> +91- 8800XXXXXX34</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="social">
                                <ul class="list-inline list-unstyled">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.668649308063!2d106.7496847161338!3d-6.307385362566714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efd8518228cd%3A0xf48cc7b525879158!2sGreenwoods%20Garden!5e0!3m2!1sid!2sid!4v1653677889297!5m2!1sid!2sid" width="600" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Opeing Hour</h5>

                        <p>Monday : 11:00 - 19:00</p>
                        <p>Tuesday : 11:00 - 19:00</p>
                        <p>Wednesday : 11:00 - 19:00</p>
                        <p>Thrusday : 11:00 - 19:00</p>
                        <p>Friday : 12:40 - 19:00</p>
                        <p>Saturday : 13:30 - 21:00</p>
                        <p>Sunday : 11:00 - 18:00</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Menu</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Gallery</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Carrier</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright:
            <a class="text-white">LoveSushi</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>
    <!-- End of .container -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>