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
											<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Rover Camera</h3>
											
											<div class="row d-flex align-contents-right" style="text-align:right">
												
											</div>
										</div>
										</div>
										<div class="col" style="text-align:right">
											<button onclick="location.href = 'image.php';" type="button" title="Rover Image" class="btn btn-outline-primary btn-sm px-2">
												<i style="font-size:40px" class="fa fa-image mt-0"></i>
											</button>
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
											<input type="text" id="camID" class="form-control">
											<label for="camID">Camera ID</label>
										</div>
										<div class="md-form">
											<input type="text" id="camYeild" class="form-control">
											<label for="camYeild">Yeild</label>
										</div>
										<div class="md-form">
											<input type="text" id="camOpDue" class="form-control">
											<label for="camOpDue">Operate Duration</label>
										</div>
										<div class="md-form">
											<input type="text" id="camRole" class="form-control">
											<label for="camRole">Role</label>
										</div>
										<div class="md-form">
											<input type="text" id="camStates" class="form-control">
											<label for="camStates">Status</label>
										</div>
										<div class="md-form">
											<input type="text" id="camFOV" class="form-control">
											<label for="camFOV">Field of View</label>
										</div>
										<div class="md-form">
											<input type="text" id="camFLength" class="form-control">
											<label for="camFLength">Focal Length</label>
										</div>
										<div class="md-form">
											<input type="text" id="camMemory" class="form-control">
											<label for="camMemory">Memory</label>
										</div>
										<div class="md-form">
											<input type="text" id="camType" class="form-control">
											<label for="camType">Type</label>
										</div>
										<div class="md-form">
											<input type="text" id="camCType" class="form-control">
											<label for="camCType">Colour Type</label>
										</div>
									</div>
									<div class="col-6">
										<div class="md-form">
											<input type="text" id="camTex" class="form-control">
											<label for="camTex">Texture</label>
										</div>
										<div class="md-form">
											<input type="text" id="camStru" class="form-control">
											<label for="camStru">Structure</label>
										</div>
										<div class="md-form">
											<input type="text" id="camCol" class="form-control">
											<label for="camCol">Colour</label>
										</div>
										<div class="md-form">
											<input type="text" id="camMine" class="form-control">
											<label for="camMine">Minerology</label>
										</div>
										<div class="md-form">
											<input type="text" id="camVQty" class="form-control">
											<label for="camVQty">Video Quality</label>
										</div>
										<div class="md-form">
											<input type="text" id="camFPS" class="form-control">
											<label for="camFPS">FPS</label>
										</div>
										<div class="md-form">
											<input type="text" id="camWLength" class="form-control">
											<label for="camWLength">Wavelength</label>
										</div>
										<div class="md-form">
											<input type="text" id="camChemType" class="form-control">
											<label for="camChemType">ChemCam Type</label>
										</div>
										<div class="md-form">
											<input type="text" id="camECompo" class="form-control">
											<label for="camECompo">Elemental Composition</label>
										</div>
										<div class="md-form">
											<input type="text" id="camRoverID" class="form-control">
											<label for="camRoverID">Rover ID</label>
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
									<th scope="col">CameraID</th>
									<th scope="col">Yeild</th>
									<th scope="col">Operate_Duration</th>
									<th scope="col">Role</th>
									<th scope="col">Status</th>
									<th scope="col">Field_Of_View</th>
									<th scope="col">Focal_Length</th>
									<th scope="col">Memory</th>
									<th scope="col">Camera_Type</th>
									<th scope="col">Colour_Type</th>
									<th scope="col">Texture</th>
									<th scope="col">Structure</th>
									<th scope="col">Colour</th>
									<th scope="col">Minerology</th>
									<th scope="col">Video_Quality</th>
									<th scope="col">FPS</th>
									<th scope="col">Wavelength</th>
									<th scope="col">ChemCam_Type</th>
									<th scope="col">Elemental_Composition</th>
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