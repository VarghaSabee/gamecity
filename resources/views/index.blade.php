<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Game Сity - салон віртуальної реальності</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/grayscale.min.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.ico" />

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" style="height: 75px; width: 75px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Меню
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#games">Доступні проекти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#schedule">Розклад</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contacts">Контакти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 id ="title" class="mx-auto my-0 text-uppercase font-effect-neon">Game Сity</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5 font-effect-3d-float	"><b>Поринь у світ віртуальної реальності</b></h2>
            <a href="#about" class="btn btn-primary js-scroll-trigger"><b>Бронювати час</b></a>
        </div>
    </div>
</header>

<!-- Projects Section -->
<section id="games" class="games-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h2 class="title">Доступні проекти</h2>
                <!-- Slider-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/beat-saber-vr.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block font-effect-3d-float">
                                <h4>Title</h4>
                                <p>Some game description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/beat-saber-vr.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block font-effect-3d-float">
                                <h4>Title</h4>
                                <p>Some game description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/beat-saber-vr.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block font-effect-3d-float">
                                <h4>Title</h4>
                                <p>Some game description</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <img src="img/steamvr_logo.png" class="img-fluid" alt="">
    </div>
</section>

<!-- About Section -->
<section id="about" class="projects-section bg-light">
    <div class="container">
        <h2 class="title text-center" style="color:black;">Коротко про нас</h2>
        <!-- About First Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/ps4.png" alt="">
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100 desc">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Playstation 4</h4>
                            <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Second Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="img-fluid" src="img/oculus.png" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100 desc">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">VR Oculus Rift</h4>
                            <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div id="last-part">
    <!-- Signup Section -->
    <section id="schedule" class="signup-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <h2 class="title">Розклад сеансів</h2>
                    <table class="table table-sm table-dark table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Сеанс:</th>
                            <th scope="col">Пн</th>
                            <th scope="col">Вт</th>
                            <th scope="col">Ср</th>
                            <th scope="col">Чт</th>
                            <th scope="col">Пт</th>
                            <th scope="col">Сб</th>
                            <th scope="col">Нд</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">08:00 - 09:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">09:00 - 10:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">10:00 - 11:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>

                        <tr>
                            <th scope="row">11:00 - 12:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">12:00 - 13:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">13:00 - 14:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">14:00 - 15:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">15:00 - 16:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">16:00 - 17:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">17:00 - 18:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">18:00 - 19:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        <tr>
                            <th scope="row">19:00 - 20:00</th>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                            <td> — </td>
                        </tr>
                        </tbody>
                    </table>

                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

                    <form class="form-inline d-flex">
                        <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
                        <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacts" class="contact-section bg-black font-effect-3d-float ">
        <div class="container">

            <div class="row">

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0 sub-title">Address</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0 sub-title">Email</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">
                                <a href="#">hello@yourdomain.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0 sub-title">Phone</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="social d-flex justify-content-center">
                <a href="#" class="mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="mx-2">
                    <i class="fab fa-github"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
        <div class="container">
            Copyright &copy; Game City 2018
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/main.min.js"></script>

</body>

</html>
