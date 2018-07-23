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
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("back.jpg");

            /* Full height */
            height: 100%; 

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>

<body class="bg">
<!-- <div class="bg"></div> -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="index.php"><strong>MARS Explore</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        </div>
    </nav>
	
	<div class="container" style="margin-top:100px;">
		<div class="row" style="border:2px solid black;padding:25px">
					<div class="col-4">
						<!--new form-->
						<div>
							<section class="form-simple">

								<!--Form with header-->
								<div class="card bg-dark" >

									<!--Header-->
									<div class="header pt-3 grey lighten-2">

										<div class="row d-flex justify-content-start">
											<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Planet Details</h3>
										</div>

									</div>
									<!--Header-->

									<div class="card-body mx-4 mt-4">
									
										<form name="planetForm" method="post">
										<!--Body-->
										<input type="hidden" id="primaryKey" name="primaryKey" class="form-control" > 
										<input type="hidden" id="rowCount" name="rowCount" class="form-control" >
										<div class="md-form">
											<h6 for="plaName" class="text-white">Name</h6>
											<input type="text" id="plaName" name="planetName" class="form-control bg-dark text-white" style="margin-top:20px;">
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
					
					
					<div class="col-8">
					<!--Table-->
						<div class="table-responsive">
						<form method="post">
						
							<table id="table" class="table table-hover table-active table-dark">
								<thead>
									<tr>
										<th scope="col" style="width:30%">PlanetID</th>
										<th scope="col">Planet_Name</th>
										<th scope="col" style="text-align: center">Change/Remove</th>
									</tr>
								</thead>
								<tbody>
									<?php

								include('connect.php');
								$stid = oci_parse($conn, 'SELECT * FROM planet');
								oci_execute($stid);

								while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
												// Use the uppercase column names for the associative array indices
									echo "<tr>\n";
									echo "    <td class='align-middle'>" . $row['ID'] . "</td>\n";
									echo "    <td class='align-middle'>" . $row['NAME'] . "</td>\n";
									echo "    <td class='align-middle' style='text-align:center'><button type='button' class='btn btn-outline-info btn-sm px-2'><i class='fa fa-pencil mt-0'></i></button></td>\n";
									echo "</tr>\n";
								}

								?>
								</tbody>
							</table>

										<script>
											var table= document.getElementById('table');
											
											for(var i=1;i<table.rows.length; i++)
											{
												table.rows[i].onclick= function()
												{
													document.getElementById("primaryKey").value = this.cells[0].innerHTML;
													document.getElementById("plaName").value = this.cells[1].innerHTML;
													console.log(this.cells[1].innerHTML);
												};
											}
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



