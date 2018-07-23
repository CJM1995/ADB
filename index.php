<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <title>MARS Explore</title>
	
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <style>
        /* body, html {
            height: 100%;
            margin: 0;
        } */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        .container {
            position: relative;
            max-width: 100%;
            overflow:0;
            margin: 0 auto;
        }

        /*.container img {vertical-align: middle;}*/

        .container .content {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
            color: #f1f1f1;
            width: 95%;
            padding: 20px;
        }
    </style> -->
    <style>
        .intro-2 {
            background: url("back.jpg")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }
        .hm-gradient .full-bg-img {
            background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
            background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
        }
        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }

        .md-form .prefix {
            font-size: 1.5rem;
            margin-top: 1rem;
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 1040px;
            }
        }
    </style>
</head> 

<body>

    <?php 
    include 'connect.php';
    ?>

    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="all.php"><strong>MARS Explore</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="planet.php">Planet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="landsite.php">Landsite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rover.php">Rover</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Main Navigation-->
    <header>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><strong>MARS Explore</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="planet.php">Planet <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="landsite.php">Landsite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rover.php">Rover</a>
                </li>
            </ul>
            <!-- <form class="form-inline">
                <div class="md-form mt-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form> -->
        </div>
    </div>
</nav>

<!--Intro Section-->
<section class="view intro-2 hm-gradient">
    <div class="full-bg-img">
        <div class="container flex-center">
            <div class="d-flex align-items-center content-height">
                <div class="row flex-center pt-5 mt-3">
                    <div class="col-md-6 text-center text-md-left mb-5">
                        <div class="white-text">
                            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Mars Exploration Program</h1>
                            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                            <h6 class="wow fadeInLeft" data-wow-delay="0.3s">The Mars Exploration Program (MEP) is a long-term effort to explore the planet Mars, funded and led by NASA. Formed in 1993, MEP has made use of orbital spacecraft, landers, and Mars rovers to explore the possibilities of life on Mars, as well as the planet's climate and natural resources.</h6>
                            <br>
                            <a href="https://mars.nasa.gov/" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-5 offset-xl-1" style="margin-top:50px;margin-bottom:50px">
                        <!--Form-->
                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
                            <div class="card-body" style="text-align:center">
                                <img class="img-fluid mx-auto d-block" src="front.jpg" height="500px" width="500px">
                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main>

<div class="container">

    <!--Grid row-->
    <div class="row py-5">

        <!--Grid column-->
        <div class="col-md-12 text-center">

            <p>The goal of the Mars Exploration Program is to explore Mars and to provide a continuous flow of scientific information and discovery through a carefully selected series of robotic orbiters, landers and mobile laboratories interconnected by a high-bandwidth Mars/Earth communications network.</p>

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</div>

</main>
<!--Main Layout-->






    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>