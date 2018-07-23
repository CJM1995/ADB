<?php

include('connect.php');

if (isset($_POST['add'])) {
	$pkey = $_POST['primaryKey'];
	$ctem = $_POST['thCTemp'];
	$otem = $_POST['thOTemp'];
	$ty = $_POST['thType'];
	$com = $_POST['thCom'];
	$tlen = $_POST['thTLength'];
	$ftype = $_POST['thFType'];
	$rid = $_POST['thRoverID'];

	$query = "insert into THERMALSYSTEM values('$pkey','$ctem','$otem','$ty','$com','$tlen','$ftype','$rid')";
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

	if ($stid) {
		echo "<script>alert('Record Inserted!');</script>";
	}

}

if (isset($_POST['update'])) {
	$pkey = $_POST['primaryKey'];
	$ctem = $_POST['thCTemp'];
	$otem = $_POST['thOTemp'];
	$ty = $_POST['thType'];
	$com = $_POST['thCom'];
	$tlen = $_POST['thTLength'];
	$ftype = $_POST['thFType'];
	$rid = $_POST['thRoverID'];

	$query = "update THERMALSYSTEM set CURRENTTEMPERATURE='$ctem',OPTIMALTEMPERATURE='$otem',TYPE='$ty',COMPONENT='$com',TUBELENGTH='$tlen',FLUIDTYPE='$ftype',ROVERROVERID='$rid' where TSYSTEMID='$pkey'";
	$stid = oci_parse($conn, $query);
	oci_execute($stid);

	if ($stid) {
		echo "<script>alert('Record Updated');</script>";
	}

}

if (isset($_POST['delete'])) {
	$pkey = $_POST['primaryKey'];

	echo "<script>console.log($pkey);</script>";
	$query = "delete from THERMALSYSTEM where TSYSTEMID = '$pkey'";
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
												<h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Thermal System</h3>
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
									<form name="thermalForm" method="POST">
									<!--Body-->
									<div class="md-form">
										<h6 for="primaryKey">SystemID</h6>
										<input type="text" name="primaryKey" id="primaryKey" class="form-control">
									</div>
									<div class="md-form">
										<h6 for="thCTemp">Current Temperature</h6>
										<input type="text" name="thCTemp" id="thCTemp" class="form-control">
									</div>
									<div class="md-form">
										<h6 for="thOTemp">Optimal Temperature</h6>
										<input type="text" name="thOTemp" id="thOTemp" class="form-control">
									</div>
									<div class="md-form">
										<h6 for="thType">System Type</h6>
										<select name="thType" id="thType" class="mdb-select colorful-select dropdown-primary">
											<option value="" disabled selected>Choose your option</option>
											<option value="Heater">Heater</option>
											<option value="HRS">HRS</option>
										</select>
										<!-- <input type="text" name="thType" id="thType" class="form-control"> -->
									</div>
									<div class="md-form">
										<h6 for="thCom">Component</h6>
										<input type="text" name="thCom" id="thCom" class="form-control">
									</div>
									<div class="md-form">
										<h6 for="thTLength">Tube Length</h6>
										<input type="text" name="thTLength" id="thTLength" class="form-control">
									</div>
									<div class="md-form">
										<h6 for="thFType">Fluid Type</h6>
										<input type="text" name="thFType" id="thFType" class="form-control">
									</div>
									<div class="md-form">
										<h6 for="thRoverID">RoverID</h6>
										<input type="text" name="thRoverID" id="thRoverID" class="form-control">
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
						<table id="table" class="table table-hover">
							<thead>
								<tr>
									<th scope="col">SystemID</th>
									<th scope="col">Current_Temperature</th>
									<th scope="col">Optimal_Temperature</th>
									<th scope="col">System_Type</th>
									<th scope="col">Component</th>
									<th scope="col">Tube_Length</th>
									<th scope="col">Fluid_Type</th>
									<th scope="col">RoverID</th>
									<th scope="col" style="text-align: center">Change/Remove</th>
								</tr>
							</thead>
							<tbody>
								<?php

									include('connect.php');
									$stid = oci_parse($conn, 'SELECT * FROM THERMALSYSTEM');
									oci_execute($stid);

									while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
									// Use the uppercase column names for the associative array indices
										echo "<tr>\n";
										echo " <td class='align-middle'>" . $row['TSYSTEMID'] . "</td>\n";
										echo " <td class='align-middle'>" . $row['CURRENTTEMPERATURE'] . "</td>\n";
										echo " <td class='align-middle'>" . $row['OPTIMALTEMPERATURE'] . "</td>\n";
										echo " <td class='align-middle'>" . $row['TYPE'] . "</td>\n";
										echo " <td class='align-middle'>" . $row['COMPONENT'] . "</td>\n";
										echo " <td class='align-middle'>" . $row['TUBELENGTH'] . "</td>\n";
										echo " <td class='align-middle'>" . $row['FLUIDTYPE'] . "</td>\n";
										echo " <td class='align-middle'>" . $row['ROVERROVERID'] . "</td>\n";
										echo " <td class='align-middle' style='text-align:center'><button type='button' class='btn btn-outline-info btn-sm px-2'><i class='fa fa-pencil mt-0'></i></button></td>\n";
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
										document.getElementById("thCTemp").value = this.cells[1].innerHTML;
										document.getElementById("thOTemp").value = this.cells[2].innerHTML;
										document.getElementById("thType").value = this.cells[3].innerHTML;
										document.getElementById("thCom").value = this.cells[4].innerHTML;
										document.getElementById("thTLength").value = this.cells[5].innerHTML;
										document.getElementById("thFType").value = this.cells[6].innerHTML;
										document.getElementById("thRoverID").value = this.cells[7].innerHTML;
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