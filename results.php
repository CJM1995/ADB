<?php

include('connect.php');

if (isset($_POST['add'])) {
	$name = $_POST['planetName'];
	$propeties = $_POST['planetProperties'];
	$autoInc = (int)$_POST['rowCount'];
	$autoInc2 = ($autoInc + 1);
	//echo "<script>alert('$autoInc2');</script>";
	$autoInc3 = 3;
	$query = "insert into planet values(PlanetId_seq.nextval,'$name')";
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

	if ($stid) {
		echo "<script>alert('Record Inserted!');</script>";
	}

}

if (isset($_POST['update'])) {
	$pkey = $_POST['primaryKey'];
	$name = $_POST['planetName'];
	$propeties = $_POST['planetProperties'];

	$query = "update planet set name='$name' where id='$pkey'";
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

	if ($stid) {
		echo "<script>alert('Record Updated');</script>";
	}

}

if (isset($_POST['delete'])) {
	$pkey = $_POST['primaryKey'];

	echo "<script>console.log($pkey);</script>";
	$query = "delete from planet where id = '$pkey'";
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

	if ($stid) {
		echo "<script>alert('Record Deleted!');</script>";
	}
}
	 
	//  function testfun()
	// {
	// 	echo "<script>alert('delete wada');</script>";	
	// }

	// if(array_key_exists('delete',$_POST)){
	// testfun();
	// }

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MARS Explore</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
	<!-- <link href="css/style.css" rel="stylesheet">-->

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* body, html {
            height: 100%;
            margin: 0;
        } */

        /*.bg {
            /* The image used */
            /*background-image: url("back.jpg");*/

            /* Full height */
            /*height: 100%; */

        /* Center and scale the image nicely */
        /* background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
		} */
		.intro-2 {
            background: url("back.jpg")no-repeat center center;
            background-size: 100% 100%;
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
        /* .hm-gradient .full-bg-img {
            background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
            background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
        } */
        .card {
            background-color: rgba(11, 11, 11, 0.9);
        }
		.table{
			background-color: rgba(11, 11, 11, 0.9);
			font-weight: 900px;
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
<header>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="#"><strong>MARS Explore</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
				<li class="nav-item active">
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
<section class="view intro-2 hm-gradient" >
    <div class="full-bg-img">
        <div class="container" style="margin-top:100px">
                <div class="row" style="justify-content:center">
				<div class="col-6 ">
						<!--new form-->
						<div>
							<section class="form-simple">

								<!--Form with header-->
								<div class="card" >

									<!--Header-->
									<div class="header pt-3 text-white lighten-2" style="background-color: rgba(90, 90, 90, 0.5)">

										<div class="row d-flex justify-content-start">
											<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Results</h3>
										</div>

									</div>
									<!--Header-->

									<div class="card-body mx-4 mt-4">
									
										<form name="planetForm" method="post">
										<!--Body-->
										<input type="hidden" id="primaryKey" name="primaryKey" class="form-control" > 
										<input type="hidden" id="rowCount" name="rowCount" class="form-control" >
										<div class="md-form">
											<h6 for="totImgs" class="text-white">Total Images</h6>
											<input type="text" id="totImgs" name="totImgs" class="form-control bg-dark text-white" style="margin-top:20px;">
										</div>
                                        <div class="form-inline">
											<button  type="button" title="Search" class="btn btn-outline-success btn-sm px-2">
												<i class="fa fa-search mt-0"></i>
											</button>
                                            <input id="SBrover" name="SBrover" class="form-control form-control-sm ml-3 w-75 text-white" type="text" placeholder="Check rover temperature" aria-label="Search" style="margin-top:20px;">
										</div>
                                        <div class="md-form">
											<h6 for="totImgs" class="text-white">Site temperature</h6>
											<input type="text" id="totImgs" name="totImgs" class="form-control bg-dark text-white" style="margin-top:20px;">
										</div>
                                        <div class="md-form">
											<h6 for="totImgs" class="text-white">Rover duration</h6>
											<input type="text" id="totImgs" name="totImgs" class="form-control bg-dark text-white" style="margin-top:20px;">
										</div>
                                        <div class="md-form">
											<h6 for="totImgs" class="text-white">Rover Issues</h6>
											<input type="text" id="totImgs" name="totImgs" class="form-control bg-dark text-white" style="margin-top:20px;">
										</div>
										<br>

<!--
										<div class="md-form pb-3">
											<input type="password" id="Form-pass4" class="form-control">
											<label for="Form-pass4">Your password</label>
											<p class="font-small grey-text d-flex justify-content-end">Forgot <a href="#" class="dark-grey-text font-weight-bold ml-1"> Password?</a></p>
										</div>
-->

										<div class="text-center mb-4">
											<div class="row">
												<div class="col">
													<button type="submit" class="btn btn-success btn-block z-depth-2" name="add">ADD</button>
												</div>
												<div class="col">
													<button type="submit" class="btn btn-info btn-block z-depth-2" name="update">Update</button>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col">
													<button type="submit" class="btn btn-danger btn-block z-depth-2" name="delete">Delete</button>
												</div>
											</div>
										</div>
<!--										<p class="font-small grey-text d-flex justify-content-center">Don't have an account? <a href="#" class="dark-grey-text font-weight-bold ml-1"> Sign up</a></p>-->
										</form>
									</div>

								</div>
								<!--/Form with header-->

							</section>
						</div>
					</div>		
					<!--new form-->
                </div>
        </div>
    </div>
</section>

</header>
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



