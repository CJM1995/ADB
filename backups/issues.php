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
			<div class="col-4">
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
										<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Rover Issues</h3>
										
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
							<form name="issuesForm" method="post">
								<!--Body-->
								<div class="md-form">
								<h6 for="primaryKey">IssueID</h6>
									<input type="text" name="primaryKey" id="primaryKey" class="form-control">
								</div>
								<div class="md-form">
								<h6 for="issDate">Date</h6>
									<input type="text" name="issDate" id="issDate" class="form-control">
								</div>
								<div class="md-form">
								<h6 for="issOTime">Occured Time</h6>
									<input type="text" name="issOTime" id="issOTime" class="form-control">
								</div>
								<div class="md-form">
								<h6 for="issUnit">Unit</h6>
									<input type="text" name="issUnit" id="issUnit" class="form-control">
								</div>
								<div class="md-form">
								<h6 for="issDesc">Description</h6>
									<input type="text" name="issDesc" id="issDesc" class="form-control">
								</div>
								<div class="md-form">
								<h6 for="issRoverID">RoverID</h6>
									<input type="text" name="issRoverID" id="issRoverID" class="form-control">
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
									</div><br>
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
					
					
			<div class="col-8">
				<!--Table-->
				<div class="table-responsive">
				<form method="post">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">IssueID</th>
								<th scope="col">Date</th>
								<th scope="col">Occured_Time</th>
								<th scope="col">Unit</th>
								<th scope="col">Description</th>
								<th scope="col">RoverID</th>
								<th scope="col" style="text-align: center">Change/Remove</th>
							</tr>
						</thead>



						<tbody>
							<tr>
								<th class="align-middle" scope="row">1</th>
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
								</td>
							</tr>
						</tbody>
					</table>
					<script>
					</script>
					</form>
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