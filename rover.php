<?php

include('connect.php');

if (isset($_POST['add'])) {
    $rid = $_POST['primaryKey'];
    $actDate = $_POST['rovActDate'];
    $lauDate = $_POST['rovLauDate'];
    $mType = $_POST['rovMType'];
    $height = $_POST['rovHeight'];
    $sta = $_POST['rovState'];
    $lauTime = $_POST['rovLauTime'];
    $lastCom = $_POST['rovLastCom'];
    $tDis = $_POST['rovDis'];
    $pS = $_POST['rovPowS'];
    $pG = $_POST['rovPowG'];
    $len = $_POST['rovLength'];
    $wid = $_POST['rovWidth'];
    $wei = $_POST['rovWeight'];
    $lTime = $_POST['rovLandTime'];
    $lDate = $_POST['rovLandDate'];
    $lID = $_POST['rovSiteID'];

    //(ROVERID, ACTIVATEDDATE, LAUNCHEDDATE, MISSIONTYPE, HEIGHT, STATE, LAUNCHEDTIME, LASTCOMMUNICATION, TRAVELLEDDISTANCE, POWERSOURCE, POWERGENERATOR, LENGTH, WIDTH, WEIGHT,LANDEDTIME,LANDEDDATE, LANDSITESITEID)
    $query = "insert into rover values('$rid',TO_DATE('$actDate','YYYY-MM-DD'),TO_DATE('$lauDate','YYYY-MM-DD'),'$mType','$height','$sta',TO_TIMESTAMP('$lauTime','HH24:MI:SS'),TO_TIMESTAMP('$lastCom','HH24:MI:SS'),'$tDis','$pS','$pG','$len','$wid','$wei',TO_TIMESTAMP('$lTime','HH24:MI:SS'),TO_DATE('$lDate','YYYY-MM-DD'),'$lID')";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Inserted!');</script>";
    }

}

if (isset($_POST['update'])) {
    $rid = $_POST['primaryKey'];
    $actDate = $_POST['rovActDate'];
    $lauDate = $_POST['rovLauDate'];
    $mType = $_POST['rovMType'];
    $height = $_POST['rovHeight'];
    $sta = $_POST['rovState'];
    $lauTime = $_POST['rovLauTime'];
    $lastCom = $_POST['rovLastCom'];
    $tDis = $_POST['rovDis'];
    $pS = $_POST['rovPowS'];
    $pG = $_POST['rovPowG'];
    $len = $_POST['rovLength'];
    $wid = $_POST['rovWidth'];
    $wei = $_POST['rovWeight'];
    $lTime = $_POST['rovLandTime'];
    $lDate = $_POST['rovLandDate'];
    $lID = $_POST['rovSiteID'];

    $query = "update rover set ACTIVATEDDATE=TO_DATE('$actDate','YYYY-MM-DD'),LAUNCHEDDATE=TO_DATE('$lauDate','YYYY-MM-DD'),MISSIONTYPE='$mType',HEIGHT='$height',STATE='$sta',LAUNCHEDTIME=TO_TIMESTAMP('$lauTime','HH24:MI:SS'),LASTCOMMUNICATION=TO_TIMESTAMP('$lastCom','HH24:MI:SS'),TRAVELLEDDISTANCE='$tDis',POWERSOURCE='$pS',POWERGENERATOR='$pG',LENGTH='$len',WIDTH='$wid',WEIGHT='$wei',LANDEDTIME=TO_TIMESTAMP('$lTime','HH24:MI:SS'),LANDEDDATE=TO_DATE('$lDate','YYYY-MM-DD'),LANDSITESITEID='$lID' where ROVERID='$rid'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Updated');</script>";
    }

}

if (isset($_POST['delete'])) {
    $pkey = $_POST['primaryKey'];

    echo "<script>console.log($pkey);</script>";
    $query = "delete from rover where roverid = '$pkey'";
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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><strong>MARS Explore</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="planet.php">Planet <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="landsite.php">Landsite</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="rover.php">Rover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="results.php">Results</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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

                                        <div class="row d-flex justify-content-start">
                                            <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Rover Details</h3>
                                        </div>
                                        <div class="btn-group justify-content-center" role="group"
                                             style="width:100%;text-align:center">
                                            <button type="submit" onclick="location.href = 'image.php';"
                                                    class="btn btn-primary" style="width:14.2%;margin:1px">Image
                                            </button>
                                            <button type="submit" onclick="location.href = 'thermal.php';"
                                                    class="btn btn-primary" style="width:14.2%;margin:1px">Thermal
                                                System
                                            </button>
                                            <button type="submit" onclick="location.href = 'objective.php';"
                                                    class="btn btn-primary"
                                                    style="width:14.2%;margin:1px;font-size:11px">Objective
                                            </button>
                                            <button type="submit" onclick="location.href = 'spectrometer.php';"
                                                    class="btn btn-primary"
                                                    style="width:14.2%;margin:1px;font-size:11px">Spectrometer
                                            </button>
                                            <button type="submit" onclick="location.href = 'computer.php';"
                                                    class="btn btn-primary" style="width:14.2%;margin:1px">Computer
                                            </button>
                                            <button type="submit" onclick="location.href = 'communication.php';"
                                                    class="btn btn-primary"
                                                    style="width:14.2%;margin:1px;font-size:10px">Communication Device
                                            </button>
                                            <button type="submit" onclick="location.href = 'issues.php';"
                                                    class="btn btn-primary" style="width:14.2%;margin:1px">Issues
                                            </button>
                                        </div>
                                    </div>
                                    <!--Header-->

                                    <div class="card-body mx-4 mt-4">

                                        <form name="roverForm" method="post">
                                            <!--Body-->
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="primaryKey">Rover ID</h6>
                                                        <input type="text" name="primaryKey" id="primaryKey"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovActDate">Activated Date</h6>
                                                        <input type="date" name="rovActDate" id="rovActDate"
                                                               class="form-control bg-dark text-white" required>

                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovLauDate">Launched Date</h6>
                                                        <input type="date" name="rovLauDate" id="rovLauDate"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovMType">Mission Type</h6>
                                                        <input type="text" name="rovMType" id="rovMType"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovHeight">Height</h6>
                                                        <input type="text" name="rovHeight" id="rovHeight"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovState">State</h6>
                                                        <input type="text" name="rovState" id="rovState"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovLauTime">Launched Time</h6>
                                                        <input type="time" name="rovLauTime" id="rovLauTime"
                                                               class="form-control bg-dark text-white" step="2"
                                                               required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovLastCom">Last Communication</h6>
                                                        <input type="time" name="rovLastCom" id="rovLastCom"
                                                               class="form-control bg-dark text-white" step="2"
                                                               required>
                                                    </div>
                                                    <input type="hidden" id="rowCount" name="rowCount"
                                                           class="form-control bg-dark text-white">
                                                </div>
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovDis">Travelled Distance</h6>
                                                        <input type="text" name="rovDis" id="rovDis"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovPowS">Power Source</h6>
                                                        <input type="text" name="rovPowS" id="rovPowS"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovPowG">Power Generator</h6>
                                                        <input type="text" name="rovPowG" id="rovPowG"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovLength">Length</h6>
                                                        <input type="text" name="rovLength" id="rovLength"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovWidth">Width</h6>
                                                        <input type="text" name="rovWidth" id="rovWidth"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovWeight">Weight</h6>
                                                        <input type="text" name="rovWeight" id="rovWeight"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovLandTime">Landed Time</h6>
                                                        <input type="time" name="rovLandTime" id="rovLandTime"
                                                               class="form-control bg-dark text-white" step="2"
                                                               required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovLandDate">Landed Date</h6>
                                                        <input type="date" name="rovLandDate" id="rovLandDate"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="rovSiteID">Landsite ID</h6>
                                                        <input type="text" name="rovSiteID" id="rovSiteID"
                                                               class="form-control bg-dark text-white" required>
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
                                                        <button type="submit"
                                                                class="btn btn-success btn-block z-depth-2" name="add">
                                                            ADD
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-info btn-block z-depth-2"
                                                                name="update">Update
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
                <!--new form-->

                <div class="row">
                    <div class="col-12">

                        <!--Table-->
                        <div class="table-responsive">
                            <form method="post">
                                <table id="table" class="table table-hover table-active text-white"
                                       style="font-weight: 900;">
                                    <thead>
                                    <tr>

                                        <th scope="col">RoverID</th>
                                        <th scope="col">Activated_Date</th>
                                        <th scope="col">Launched_Date</th>
                                        <th scope="col">Mission_Type</th>
                                        <th scope="col">Height</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Launched_Time</th>
                                        <th scope="col">Last_Communication</th>
                                        <th scope="col">Travelled_Distance</th>
                                        <th scope="col">Power_Source</th>
                                        <th scope="col">Power_Generator</th>
                                        <th scope="col">Length</th>
                                        <th scope="col">Width</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Landed_Time</th>
                                        <th scope="col">Landed_Date</th>
                                        <th scope="col">Landsite_ID</th>
                                        <th scope="col" style="text-align: center">Change</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    include('connect.php');
                                    $stid = oci_parse($conn, 'SELECT ROVERID,TO_CHAR(ACTIVATEDDATE,\'YYYY-MM-DD\') AS AD,TO_CHAR(LAUNCHEDDATE,\'YYYY-MM-DD\') AS LD,MISSIONTYPE,HEIGHT,STATE,TO_CHAR(LAUNCHEDTIME,\'HH24:MI:SS\') AS LT,TO_CHAR(LASTCOMMUNICATION,\'HH24:MI:SS\') AS LC,TRAVELLEDDISTANCE,POWERSOURCE,POWERGENERATOR,LENGTH,WIDTH,WEIGHT,TO_CHAR(LANDEDTIME,\'HH24:MI:SS\') AS LDT,TO_CHAR(LANDEDDATE,\'YYYY-MM-DD\') AS LDD,LANDSITESITEID FROM rover');
                                    oci_execute($stid);

                                    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                                        // Use the uppercase column names for the associative array indices
                                        echo "<tr>\n";
                                        echo "    <td class='align-middle'>" . $row['ROVERID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['AD'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LD'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['MISSIONTYPE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['HEIGHT'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['STATE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LT'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LC'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TRAVELLEDDISTANCE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['POWERSOURCE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['POWERGENERATOR'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LENGTH'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['WIDTH'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['WEIGHT'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LDT'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LDD'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LANDSITESITEID'] . "</td>\n";
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
                                            document.getElementById("rovActDate").value = this.cells[1].innerHTML;
                                            document.getElementById("rovLauDate").value = this.cells[2].innerHTML;
                                            document.getElementById("rovMType").value = this.cells[3].innerHTML;
                                            document.getElementById("rovHeight").value = this.cells[4].innerHTML;
                                            document.getElementById("rovState").value = this.cells[5].innerHTML;
                                            document.getElementById("rovLauTime").value = this.cells[6].innerHTML;
                                            document.getElementById("rovLastCom").value = this.cells[7].innerHTML;
                                            document.getElementById("rovDis").value = this.cells[8].innerHTML;
                                            document.getElementById("rovPowS").value = this.cells[9].innerHTML;
                                            document.getElementById("rovPowG").value = this.cells[10].innerHTML;
                                            document.getElementById("rovLength").value = this.cells[11].innerHTML;
                                            document.getElementById("rovWidth").value = this.cells[12].innerHTML;
                                            document.getElementById("rovWeight").value = this.cells[13].innerHTML;
                                            document.getElementById("rovLandTime").value = this.cells[14].innerHTML;
                                            document.getElementById("rovLandDate").value = this.cells[15].innerHTML;
                                            document.getElementById("rovSiteID").value = this.cells[16].innerHTML;
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
        <br>
        <br>
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