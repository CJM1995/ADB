<?php

include('connect.php');

if (isset($_POST['add'])) {
	$pkey = $_POST['primaryKey'];
	$coo = $_POST['landCooName'];
	$temp = $_POST['landTemName'];
	$locName = $_POST['landLocName'];
	$planet = $_POST['landPlanetName'];

	$query = "insert into Landsite values(LandsiteId_seq.nextval,'$coo','$temp','$locName','$planet')";
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

	if ($stid) {
		echo "<script>alert('Record Inserted!');</script>";
	}

}

if (isset($_POST['update'])) {
	$pkey = $_POST['primaryKey'];
	$coo = $_POST['landCooName'];
	$temp = $_POST['landTemName'];
	$locName = $_POST['landLocName'];
	$planet = $_POST['landPlanetName'];

	$query = "update Landsite set COODINATES='$coo',TEMPERATURE='$temp',LOCATIONNAME='$locName',PLANETID='$planet' where SITEID='$pkey'";
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

	if ($stid) {
		echo "<script>alert('Record Updated');</script>";
	}

}

if (isset($_POST['delete'])) {
	$pkey = $_POST['primaryKey'];

	echo "<script>console.log($pkey);</script>";
	$query = "delete from Landsite where siteID = '$pkey'";
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
    <title>Material Design Bootstrap</title>
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
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="index.php"><strong>MARS Explore</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="planet.php">Planet</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="landsite.php">Landsite <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rover.php">Rover</a>
                </li>
            </ul>
        </div>
    </nav>
	<div class="container" style="margin-top:100px">
		<div class="row" style="padding:25px">
			<div class="col-4">
			<!--new form-->
				<div>
					<section class="form-simple">

						<!--Form with header-->
						<div class="card" >

						<!--Header-->
							<div class="header pt-3 grey lighten-2">

								<div class="row d-flex justify-content-start">
									<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Landsite Details</h3>
								</div>

							</div>
						<!--Header-->

							<div class="card-body mx-4 mt-4">
								<form name="landsiteForm" method="post">

							<!--Body-->
								<input type="hidden" id="primaryKey" name="primaryKey" class="form-control" > 
								<input type="hidden" id="rowCount" name="rowCount" class="form-control">
								<div class="md-form">
									<h6 for="landCoo">Coodinates</h6>
									<input type="text" name="landCooName" id="landCoo" class="form-control">
									
								</div>
								<div class="md-form">
									<h6 for="landTem">Temperature</h6>
									<input type="text" name="landTemName" id="landTem" class="form-control">
									
								</div>
								<div class="md-form">
									<h6 for="landLoc">locationName</h6>
									<input type="text" name="landLocName" id="landLoc" class="form-control">
									
								</div>
								<div class="md-form">
									<h6 for="landPlanet">PlanetID</h6>
									<input type="text" name="landPlanetName" id="landPlanet" class="form-control">
									
								</div>
								<br>

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
								</form>
							</div>

						</div>
					</section>
				</div>
			</div>		
			<!--new form-->
					
					
			<div class="col-8">
			<!--Table-->
				<div class="table-responsive">
					<form method="post">	
					<table id="table" class="table table-hover">
						<thead>
							<tr>
								<th scope="col">SiteID</th>
								<th scope="col">Coodinates</th>
								<th scope="col">Temperature</th>
								<th scope="col">Location_Name</th>
								<th scope="col">PlanetID</th>
								<th scope="col" style="text-align: center">Change/Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php

								include('connect.php');
								$stid = oci_parse($conn, 'SELECT * FROM Landsite');
								oci_execute($stid);

								while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
				// Use the uppercase column names for the associative array indices
									echo "<tr>\n";
									echo "    <td class='align-middle'>" . $row['SITEID'] . "</td>\n";
									echo "    <td class='align-middle'>" . $row['COODINATES'] . "</td>\n";
									echo "    <td class='align-middle'>" . $row['TEMPERATURE'] . "</td>\n";
									echo "    <td class='align-middle'>" . $row['LOCATIONNAME'] . "</td>\n";
									echo "    <td class='align-middle'>" . $row['PLANETID'] . "</td>\n";
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
										document.getElementById("landCoo").value = this.cells[1].innerHTML;
										document.getElementById("landTem").value = this.cells[2].innerHTML;
										document.getElementById("landLoc").value = this.cells[3].innerHTML;
										document.getElementById("landPlanet").value = this.cells[4].innerHTML;
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