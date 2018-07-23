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
										<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Rover Objectives</h3>
										
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
											<input type="text" id="objID" class="form-control">
											<label for="objID">Objective ID</label>
										</div>
										<div class="md-form">
											<input type="text" id="objType" class="form-control">
											<label for="objType">Objective Type</label>
										</div>
										<div class="md-form">
											<input type="text" id="objNature" class="form-control">
											<label for="objNature">Nature</label>
										</div>
										<div class="md-form">
											<input type="text" id="objInventory" class="form-control">
											<label for="objInventory">Inventory</label>
										</div>
										<div class="md-form">
											<input type="text" id="objFeatures" class="form-control">
											<label for="objFeatures">Features</label>
										</div>
										<div class="md-form">
											<input type="text" id="objMaterial" class="form-control">
											<label for="objMaterial">Material</label>
										</div>
										<div class="md-form">
											<input type="text" id="objPreState" class="form-control">
											<label for="objPreState">Present State</label>
										</div>
										<div class="md-form">
											<input type="text" id="objCycDetails" class="form-control">
											<label for="objCycDetails">Cycling Details</label>
										</div>
									</div>
									<div class="col-6">
										<div class="md-form">
											<input type="text" id="objDis" class="form-control">
											<label for="objDis">Distribution</label>
										</div>
										<div class="md-form">
											<input type="text" id="objTimeS" class="form-control">
											<label for="objTimeS">Time Scale</label>
										</div>
										<div class="md-form">
											<input type="text" id="objGal" class="form-control">
											<label for="objGal">Galactic</label>
										</div>
										<div class="md-form">
											<input type="text" id="objCos" class="form-control">
											<label for="objCos">Cosmic</label>
										</div>
										<div class="md-form">
											<input type="text" id="objSol" class="form-control">
											<label for="objSol">Solar Poton</label>
										</div>
										<div class="md-form">
											<input type="text" id="objSecNeo" class="form-control">
											<label for="objSecNeo">Secondary Neotrons</label>
										</div>
										<div class="md-form">
											<input type="text" id="objRad" class="form-control">
											<label for="objRad">Surface Radiation</label>
										</div>
										<div class="md-form">
											<input type="text" id="objRadExp" class="form-control">
											<label for="objRadExp">Radiation Exposure</label>
										</div>
										<div class="md-form">
											<input type="text" id="objRoverID" class="form-control">
											<label for="objRoverID">Rover ID</label>
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
									<th scope="col">ObjectiveID</th>
									<th scope="col">Objective_Type</th>
									<th scope="col">Nature</th>
									<th scope="col">Inventory</th>
									<th scope="col">Features</th>
									<th scope="col">Material</th>
									<th scope="col">Present_State</th>
									<th scope="col">Cycling_Details</th>
									<th scope="col">Distribution</th>
									<th scope="col">Time_Scale</th>
									<th scope="col">Galactic</th>
									<th scope="col">Cosmic</th>
									<th scope="col">Solar_Poton</th>
									<th scope="col">Secondary_Neotrons</th>
									<th scope="col">Surface_Radiation</th>
									<th scope="col">Radiation_Exposure</th>
									<th scope="col">RoverID</th>
									<th scope="col" style="text-align: center">Change/Remove</th>
								</tr>
							</thead>
							<tbody>
									
								<tr>
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