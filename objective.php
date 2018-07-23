<?php

include('connect.php');

if (isset($_POST['add'])) {
    $pkey = $_POST['primaryKey'];
    $ojtype = $_POST['objType'];
    $ojnat = $_POST['objNature'];
    $ojin = $_POST['objInventory'];
    $ojf = $_POST['objFeatures'];
    $ojm = $_POST['objMaterial'];
    $ojps = $_POST['objPreState'];
    $ojcd = $_POST['objCycDetails'];
    $ojdi = $_POST['objDis'];
    $ojts = $_POST['objTimeS'];
    $ojgal = $_POST['objGal'];
    $ojcos = $_POST['objCos'];
    $ojsol = $_POST['objSol'];
    $ojsec = $_POST['objSecNeo'];
    $ojrad = $_POST['objRad'];
    $ojrade = $_POST['objRadExp'];
    $ojrid = $_POST['objRoverID'];

    $query = "INSERT INTO OBJECTIVE values (
                OBJECTIVEId_seq.nextval,
                '$ojtype',
                '$ojnat',
                '$ojin',
                '$ojf',
                '$ojm',
                '$ojps',
                '$ojcd',
                '$ojdi',
                '$ojts',
                '$ojgal',
                '$ojcos',
                '$ojsol',
                '$ojsec',
                '$ojrad',
                '$ojrade',
                '$ojrid')";

    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Inserted!');</script>";
    }

}

if (isset($_POST['update'])) {
    $pkey = $_POST['primaryKey'];
    $ojtype = $_POST['objType'];
    $ojnat = $_POST['objNature'];
    $ojin = $_POST['objInventory'];
    $ojf = $_POST['objFeatures'];
    $ojm = $_POST['objMaterial'];
    $ojps = $_POST['objPreState'];
    $ojcd = $_POST['objCycDetails'];
    $ojdi = $_POST['objDis'];
    $ojts = $_POST['objTimeS'];
    $ojgal = $_POST['objGal'];
    $ojcos = $_POST['objCos'];
    $ojsol = $_POST['objSol'];
    $ojsec = $_POST['objSecNeo'];
    $ojrad = $_POST['objRad'];
    $ojrade = $_POST['objRadExp'];
    $ojrid = $_POST['objRoverID'];

    $query = "update OBJECTIVE set 
                TYPE='$ojtype',
                NATURE='$ojnat',
                INVENTORY='$ojin',
                FEATURES='$ojf',
                MATERIAL='$ojm',
                PRESENTSTATE='$ojps',
                CYCLINGDETAILS='$ojcd',
                DISTRIBUTION='$ojdi',
                TIMESCALE='$ojts',
                GALACTIC='$ojgal',
                COSMIC='$ojcos',
                SOLARPOTON='$ojsol',
                SECONDARYNEOTRONS='$ojsec',
                SURFACERADIATION='$ojrad',
                RADIATIONEXPOSURE='$ojrade',
                ROVERROVERID='$ojrid' where OBJECTIVEID='$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Updated');</script>";
    }

}

if (isset($_POST['delete'])) {
    $pkey = $_POST['primaryKey'];

    echo "<script>console.log($pkey);</script>";
    $query = "delete from OBJECTIVE where OBJECTIVEID = '$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Deleted!');</script>";
    }
}

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

    <style>
        .intro-2 {
            background: url("back.jpg") no-repeat center center;
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

        .table {
            background-color: rgba(11, 11, 11, 0.9);
            font-weight: 900;
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
    <section class="view intro-2 hm-gradient">
        <div>
            <div class="container" style="margin-top:100px">
                <div class="row">
                    <div class="col-12">
                        <!--new form-->
                        <div>
                            <section class="form-simple">

                                <!--Form with header-->
                                <div class="card">

                                    <!--Header-->
                                    <div class="header pt-3 text-white lighten-2"
                                         style="background-color: rgba(90, 90, 90, 0.5)">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row d-flex justify-content-start">
                                                    <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Rover Objectives</h3>

                                                    <div class="row d-flex align-contents-right"
                                                         style="text-align:right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" style="text-align:right">
                                                <button onclick="location.href = 'rover.php';" type="button"
                                                        title="Go Back"
                                                        class="btn btn-outline-success btn-sm px-2">
                                                    <i style="font-size:40px"
                                                       class="fa fa-chevron-circle-left mt-0"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Header-->

                                    <div class="card-body mx-4 mt-4">
                                        <form name="objectiveForm" method="post">
                                            <!--Body-->
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" id="primaryKey" name="primaryKey"
                                                           class="form-control">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objType">Objective Type</h6>
                                                        <input type="text" id="objType" name="objType"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objNature">Nature</h6>
                                                        <input type="text" id="objNature" name="objNature"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objInventory">Inventory</h6>
                                                        <input type="text" id="objInventory" name="objInventory"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objFeatures">Features</h6>
                                                        <input type="text" id="objFeatures" name="objFeatures"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objMaterial">Material</h6>
                                                        <input type="text" id="objMaterial" name="objMaterial"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objPreState">Present State</h6>
                                                        <input type="text" id="objPreState" name="objPreState"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objCycDetails">Cycling Details</h6>
                                                        <input type="text" id="objCycDetails" name="objCycDetails"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objDis">Distribution</h6>
                                                        <input type="text" id="objDis" name="objDis"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objTimeS">Time Scale</h6>
                                                        <input type="text" id="objTimeS" name="objTimeS"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objGal">Galactic</h6>
                                                        <input type="text" id="objGal" name="objGal"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objCos">Cosmic</h6>
                                                        <input type="text" id="objCos" name="objCos"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objSol">Solar Poton</h6>
                                                        <input type="text" id="objSol" name="objSol"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objSecNeo">Secondary Neotrons</h6>
                                                        <input type="text" id="objSecNeo" name="objSecNeo"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objRad">Surface Radiation</h6>
                                                        <input type="text" id="objRad" name="objRad"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objRadExp">Radiation Exposure</h6>
                                                        <input type="text" id="objRadExp" name="objRadExp"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="objRoverID">Rover ID</h6>
                                                        <input type="text" id="objRoverID" name="objRoverID"
                                                               class="form-control bg-dark text-white" required>
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
                                                        <button type="submit"
                                                                class="btn btn-success btn-block z-depth-2" name="add">
                                                            ADD
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-info btn-block z-depth-2"
                                                                name="update">
                                                            Update
                                                        </button>
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
                            <form method="post">
                                <table id="table" class="table table-hover table-active text-white"
                                       style="font-weight: 900;">
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
                                        <th scope="col" style="text-align: center">Change</th>
                                    </tr>
                                    </thead>
                                    <tbody style="font-weight: 900;">
                                    <?php

                                    include('connect.php');
                                    $stid = oci_parse($conn, 'SELECT * FROM objective');
                                    oci_execute($stid);

                                    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                                        // Use the uppercase column names for the associative array indices
                                        echo "<tr>\n";
                                        echo "    <td class='align-middle'>" . $row['OBJECTIVEID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TYPE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['NATURE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['INVENTORY'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['FEATURES'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['MATERIAL'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['PRESENTSTATE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['CYCLINGDETAILS'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['DISTRIBUTION'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TIMESCALE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['GALACTIC'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['COSMIC'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['SOLARPOTON'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['SECONDARYNEOTRONS'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['SURFACERADIATION'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['RADIATIONEXPOSURE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['ROVERROVERID'] . "</td>\n";
                                        echo "    <td class='align-middle' style='text-align:center'><button type='button' class='btn btn-outline-info btn-sm px-2'><i class='fa fa-pencil mt-0'></i></button></td>\n";
                                        echo "</tr>\n";
                                    }

                                    ?>
                                    </tbody>
                                </table>
                                <script>
                                    var table = document.getElementById('table');

                                    for (var i = 1; i < table.rows.length; i++) {
                                        table.rows[i].onclick = function () {
                                            document.getElementById("primaryKey").value = this.cells[0].innerHTML;
                                            document.getElementById("objType").value = this.cells[1].innerHTML;
                                            document.getElementById("objNature").value = this.cells[2].innerHTML;
                                            document.getElementById("objInventory").value = this.cells[3].innerHTML;
                                            document.getElementById("objFeatures").value = this.cells[4].innerHTML;
                                            document.getElementById("objMaterial").value = this.cells[5].innerHTML;
                                            document.getElementById("objPreState").value = this.cells[6].innerHTML;
                                            document.getElementById("objCycDetails").value = this.cells[7].innerHTML;
                                            document.getElementById("objDis").value = this.cells[8].innerHTML;
                                            document.getElementById("objTimeS").value = this.cells[9].innerHTML;
                                            document.getElementById("objGal").value = this.cells[10].innerHTML;
                                            document.getElementById("objCos").value = this.cells[11].innerHTML;
                                            document.getElementById("objSol").value = this.cells[12].innerHTML;
                                            document.getElementById("objSecNeo").value = this.cells[13].innerHTML;
                                            document.getElementById("objRad").value = this.cells[14].innerHTML;
                                            document.getElementById("objRadExp").value = this.cells[15].innerHTML;
                                            document.getElementById("objRoverID").value = this.cells[16].innerHTML;

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