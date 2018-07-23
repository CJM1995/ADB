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
											<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Communication Devices</h3>
											
											<div class="row d-flex align-contents-right" style="text-align:right">
												
											</div>
										</div>
										</div>
										<div class="col" style="text-align:right">
											<button onclick="location.href = 'rover.php';" type="button" title="Go to Rover" class="btn btn-outline-primary btn-sm px-2">
												<i style="font-size:40px" class="fa fa-cogs mt-0"></i>
											</button>
											<button onclick="location.href = 'computer.php';" type="button" title="Go to Computer" class="btn btn-outline-primary btn-sm px-2">
												<i style="font-size:40px" class="fa fa-laptop mt-0"></i>
											</button>
											<button onclick="location.href = 'orbiter.php';" type="button" title="Go to Orbiter" class="btn btn-outline-primary btn-sm px-2">
												<i style="font-size:40px" class="fa fa-globe mt-0"></i>
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
											<input type="text" name="primaryKey" id="primaryKey" class="form-control">
											<label for="comDID">Device ID</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDPro" id="comDPro" class="form-control">
											<label for="comDPro">Protocol</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDDTime" id="comDDTime" class="form-control">
											<label for="comDDTime">Delay Time</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDRBand" id="comDRBand" class="form-control">
											<label for="comDRBand">Related Band</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDFBand" id="comDFBand" class="form-control">
											<label for="comDFBand">Frequency Band</label>
										</div>
									</div>
									<div class="col-6">
										<div class="md-form">
											<input type="text" name="comDWRange" id="comDWRange" class="form-control">
											<label for="comDWRange">Wavelength Range</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDType" id="comDType" class="form-control">
											<label for="comDType">Type</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDTrS" id="comDTrS" class="form-control">
											<label for="comDTrS">Transfer Speed</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDRover" id="comDRover" class="form-control">
											<label for="comDRover">Rover ID</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDOrbiter" id="comDOrbiter" class="form-control">
											<label for="comDOrbiter">Orbiter ID</label>
										</div>
										<div class="md-form">
											<input type="text" name="comDCPUID" id="comDCPUID" class="form-control">
											<label for="comDCPUID">Computer ID</label>
										</div>
									</div>
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
			<!--new form-->
					
		<div class="row">			
			<div class="col-12">
				<!--Table-->
					<div class="table-responsive">
							
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Device_ID</th>
									<th scope="col">Protocol</th>
									<th scope="col">Delay_Time</th>
									<th scope="col">Related_Band</th>
									<th scope="col">Frequency_Band</th>
									<th scope="col">Wavelength_Range</th>
									<th scope="col">Type</th>
									<th scope="col">Transfer_Speed</th>
									<th scope="col">Rover_ID</th>
									<th scope="col">Orbiter_ID</th>
									<th scope="col">CPU_ID</th>
									<th scope="col" style="text-align: center">Change/Remove</th>
								</tr>
							</thead>
							<tbody>
									
								<tr>
									<th class="align-middle" scope="row">1</th>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
									<td class="align-middle"></td>
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