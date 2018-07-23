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
</head>

<body>
	<div class="container">
		<div class="container">
		<div class="row">
			<div class="col-12">
				<!--new form-->
				<div>
					<section class="form-simple">

					<!--Form with header-->
						<div class="card" >

							<!--Header-->
							<div class="header pt-3 grey lighten-2">
								<div class="row">
									<div class="col">
										<div class="row d-flex justify-content-start">
										<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Spectrometer</h3>
										
										<div class="row d-flex align-contents-right" style="text-align:right">
											
										</div>
									</div>
									</div>
									<div class="col" style="text-align:right">
										<button onclick="location.href = 'rover.php';" type="button" title="Go Back" class="btn btn-outline-success btn-sm px-2">
											<i style="font-size:40px" class="fa fa-chevron-circle-left mt-0"></i>
										</button>
									</div>
									
								</div>	
							</div>
							<!--Header-->

							<div class="card-body mx-4 mt-4">
								<form>
								<!--Body-->
								<div class="row">
									<div class="col-6">
										<div class="md-form">
											<input type="text" id="specID" class="form-control">
											<label for="specID">ID</label>
										</div>
										<div class="md-form">
											<input type="text" id="specName" class="form-control">
											<label for="specName">Name</label>
										</div>
										<div class="md-form">
											<input type="text" id="specSensor" class="form-control">
											<label for="specSensor">Sensor</label>
										</div>
										<div class="md-form">
											<input type="text" id="specData" class="form-control">
											<label for="specData">Data</label>
										</div>
										<div class="md-form">
											<input type="text" id="specTRad" class="form-control">
											<label for="specTRad">Thermal Radiation</label>
										</div>
									</div>
									<div class="col-6">
										<div class="md-form">
											<input type="text" id="specLoc" class="form-control">
											<label for="specLoc">Location</label>
										</div>
										<div class="md-form">
											<input type="text" id="specType" class="form-control">
											<label for="specType">Type</label>
										</div>
										<div class="md-form">
											<input type="text" id="specSpectra" class="form-control">
											<label for="specSpectra">Spectra</label>
										</div>
										<div class="md-form">
											<input type="text" id="specCom" class="form-control">
											<label for="specCom">Components</label>
										</div>
										<div class="md-form">
											<input type="text" id="specRoverID" class="form-control">
											<label for="specRoverID">RoverID</label>
										</div>
									</div>
								</div>
								
								<br>

<!-- 									<div class="md-form pb-3">
											<input type="password" id="Form-pass4" class="form-control">
											<label for="Form-pass4">Your password</label>
											<p class="font-small grey-text d-flex justify-content-end">Forgot <a href="#" class="dark-grey-text font-weight-bold ml-1"> Password?</a></p>
										</div>
-->

								<div class="text-center mb-4">
									<div class="row">
										<div class="col">
											<button type="button" class="btn btn-danger btn-block z-depth-2">ADD</button>
										</div>
										<div class="col">
											<button type="button" class="btn btn-info btn-block z-depth-2">Update</button>
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
		</div>
		<br>
		<br>
		<div class="row">			
			<div class="col-12">
				<!--Table-->
					<div class="table-responsive">
							
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">ID</th>
									<th scope="col">Name</th>
									<th scope="col">Sensor</th>
									<th scope="col">Data</th>
									<th scope="col">Thermal_Radiation</th>
									<th scope="col">Location</th>
									<th scope="col">Type</th>
									<th scope="col">Spectra</th>
									<th scope="col">Components</th>
									<th scope="col">RoverID</th>
									<th scope="col" style="text-align: center">Change/Remove</th>
								</tr>
							</thead>
							<tbody>
									<?php

										 include('dbconnection.php');

										 $query="select * from login";

											 $result=mysql_query($query);

										 $i=1;

											while($row=mysql_fetch_array($result))

									{}?>
								<tr>
									<th class="align-middle" scope="row">1</th>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle">Cell</td>
									<td class="align-middle" style="text-align:center">
										<button type="button" class="btn btn-outline-info btn-sm px-2">
											<i class="fa fa-pencil mt-0"></i>
										</button>
										<button type="button" class="btn btn-outline-danger btn-sm px-2">
											<i class="fa fa-times mt-0"></i>
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				<!--Table-->
			</div>
		</div>
	</div>
	
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