<?php

include('connect.php');

if (isset($_POST['add'])) {
    $pkey = $_POST['primaryKey'];
    $cop = $_POST['comDPro'];
    $coddt = $_POST['comDDTime'];
    $codrb = $_POST['comDRBand'];
    $codfb = $_POST['comDFBand'];
    $codwr = $_POST['comDWRange'];
    $codt = $_POST['comDType'];
    $codts = $_POST['comDTrS'];
    $codr = $_POST['comDRover'];
    $codo = $_POST['comDOrbiter'];
    $cocpu = $_POST['comDCPUID'];

    $query = "INSERT INTO COMMUNICATIONDEVICE values ('$pkey','$cop',TO_TIMESTAMP('$coddt','HH24:MI:SS'),'$codrb','$codfb','$codwr','$codt','$codts','$codr','$codo','$cocpu')";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Inserted!');</script>";
    }

}

if (isset($_POST['update'])) {
    $pkey = $_POST['primaryKey'];
    $cop = $_POST['comDPro'];
    $coddt = $_POST['comDDTime'];
    $codrb = $_POST['comDRBand'];
    $codfb = $_POST['comDFBand'];
    $codwr = $_POST['comDWRange'];
    $codt = $_POST['comDType'];
    $codts = $_POST['comDTrS'];
    $codr = $_POST['comDRover'];
    $codo = $_POST['comDOrbiter'];
    $cocpu = $_POST['comDCPUID'];

    $query = "update COMMUNICATIONDEVICE set PROTOCOL='$cop',DELAYTIME=TO_TIMESTAMP('$coddt','HH24:MI:SS'),RELATEDBAND='$codrb',FREAQUENCYBAND='$codfb',WAVELENGTHRANGE='$codwr',TYPE='$codt',TRANSFERSPEED='$codts',ROVERROVERID='$codr',ORBITERORBITERID='$codo',COMPUTERCPUID='$cocpu' where DEVICEID='$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Updated');</script>";
    }

}

if (isset($_POST['delete'])) {
    $pkey = $_POST['primaryKey'];

    echo "<script>console.log($pkey);</script>";
    $query = "delete from COMMUNICATIONDEVICE where DEVICEID = '$pkey'";
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
                                                    <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Communication
                                                        Devices</h3>

                                                    <div class="row d-flex align-contents-right"
                                                         style="text-align:right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" style="text-align:right">
                                                <button onclick="location.href = 'rover.php';" type="button"
                                                        title="Go to Rover"
                                                        class="btn btn-outline-primary btn-sm px-2">
                                                    <i style="font-size:40px" class="fa fa-cogs mt-0"></i>
                                                </button>
                                                <button onclick="location.href = 'computer.php';" type="button"
                                                        title="Go to Computer"
                                                        class="btn btn-outline-primary btn-sm px-2">
                                                    <i style="font-size:40px" class="fa fa-laptop mt-0"></i>
                                                </button>
                                                <button onclick="location.href = 'orbiter.php';" type="button"
                                                        title="Go to Orbiter"
                                                        class="btn btn-outline-primary btn-sm px-2">
                                                    <i style="font-size:40px" class="fa fa-globe mt-0"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Header-->

                                    <div class="card-body mx-4 mt-4">
                                        <form name="commForm" method="post">
                                            <!--Body-->
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="primaryKey">Device ID</h6>
                                                        <input type="text" name="primaryKey" id="primaryKey"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDPro">Protocol</h6>
                                                        <input type="text" name="comDPro" id="comDPro"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDDTime">Delay Time</h6>
                                                        <input type="time" name="comDDTime" id="comDDTime"
                                                               class="form-control bg-dark text-white" step="2" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDRBand">Related Band</h6>
                                                        <input type="text" name="comDRBand" id="comDRBand"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDFBand">Frequency Band</h6>
                                                        <input type="text" name="comDFBand" id="comDFBand"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDWRange">Wavelength Range</h6>
                                                        <input type="text" name="comDWRange" id="comDWRange"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDType">Type</h6>
                                                        <input type="text" name="comDType" id="comDType"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDTrS">Transfer Speed</h6>
                                                        <input type="text" name="comDTrS" id="comDTrS"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDRover">Rover ID</h6>
                                                        <input type="text" name="comDRover" id="comDRover"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDOrbiter">Orbiter ID</h6>
                                                        <input type="text" name="comDOrbiter" id="comDOrbiter"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="comDCPUID">Computer ID</h6>
                                                        <input type="text" name="comDCPUID" id="comDCPUID"
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
                                        <th scope="col" style="text-align: center">Change</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    include('connect.php');
                                    $stid = oci_parse($conn, 'SELECT DEVICEID,PROTOCOL,TO_CHAR(DELAYTIME,\'HH24:MI:SS\') AS DT,RELATEDBAND,FREAQUENCYBAND,WAVELENGTHRANGE,TYPE,TRANSFERSPEED,ROVERROVERID,ORBITERORBITERID,COMPUTERCPUID FROM COMMUNICATIONDEVICE');
                                    oci_execute($stid);

                                    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                                        // Use the uppercase column names for the associative array indices
                                        echo "<tr>\n";
                                        echo "    <td class='align-middle'>" . $row['DEVICEID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['PROTOCOL'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['DT'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['RELATEDBAND'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['FREAQUENCYBAND'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['WAVELENGTHRANGE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TYPE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TRANSFERSPEED'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['ROVERROVERID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['ORBITERORBITERID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['COMPUTERCPUID'] . "</td>\n";
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
                                            document.getElementById("comDPro").value = this.cells[1].innerHTML;
                                            document.getElementById("comDDTime").value = this.cells[2].innerHTML;
                                            document.getElementById("comDRBand").value = this.cells[3].innerHTML;
                                            document.getElementById("comDFBand").value = this.cells[4].innerHTML;
                                            document.getElementById("comDWRange").value = this.cells[5].innerHTML;
                                            document.getElementById("comDType").value = this.cells[6].innerHTML;
                                            document.getElementById("comDTrS").value = this.cells[7].innerHTML;
                                            document.getElementById("comDRover").value = this.cells[8].innerHTML;
                                            document.getElementById("comDOrbiter").value = this.cells[9].innerHTML;
                                            document.getElementById("comDCPUID").value = this.cells[10].innerHTML;
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