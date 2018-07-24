<?php

include('connect.php');

if (isset($_POST['add'])) {
    $pkey = $_POST['primaryKey'];
    $sname = $_POST['specName'];
    $sptype = $_POST['SPType'];
    $ssens = $_POST['specSensor'];
    $sdata = $_POST['specData'];
    $strad = $_POST['specTRad'];
    $sloc = $_POST['specLoc'];
    $stype = $_POST['specType'];
    $sspec = $_POST['specSpectra'];
    $scom = $_POST['specCom'];
    $srid = $_POST['specRoverID'];

    $query = "insert into SPECTROMETER values (SpectrometerId_seq.nextval,'$sname','$sptype','$ssens','$sdata','$strad','$sloc','$stype','$sspec','$scom','$srid')";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Inserted!');</script>";
    }

}

if (isset($_POST['update'])) {
    $pkey = $_POST['primaryKey'];
    $sname = $_POST['specName'];
    $sptype = $_POST['SPType'];
    $ssens = $_POST['specSensor'];
    $sdata = $_POST['specData'];
    $strad = $_POST['specTRad'];
    $sloc = $_POST['specLoc'];
    $stype = $_POST['specType'];
    $sspec = $_POST['specSpectra'];
    $scom = $_POST['specCom'];
    $srid = $_POST['specRoverID'];

    $query = "update Spectrometer set NAME='$sname',SPECTROMETERTYPE='$sptype',SENSOR='$ssens',DATA='$sdata',THERMALRADIATION='$strad',LOCATION='$sloc',TYPE='$stype',SPECTRA='$sspec',COMPONENTS='$scom',ROVERROVERID='$srid' where ID='$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Updated');</script>";
    }

}

if (isset($_POST['delete'])) {
    $pkey = $_POST['primaryKey'];

    echo "<script>console.log($pkey);</script>";
    $query = "delete from Spectrometer where ID = '$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Deleted!');</script>";
    }
}

?>

<html xmlns="http://www.w3.org/1999/html">
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
    <!-- <link</def="css/style.css" rel="stylesheet">-->

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
                                                    <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Spectrometer</h3>

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
                                        <form name="specForm" method="post">
                                            <!--Body-->
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" id="primaryKey" name="primaryKey"
                                                           class="form-control">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specName">Name</h6>
                                                        <input type="text" name="specName" id="specName"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="form-group">
                                                        <h6 class="text-white" for="SPType">Spectrometer Type</h6>
                                                        <select name="SPType" id="SPType"
                                                                class="custom-select bg-dark text-white">
                                                            <option selected="" disabled>Select spectrometer type
                                                            </option>
                                                            <option value="APXS">APXS</option>
                                                            <option value="MiniTES">MiniTES</option>
                                                            <option value="MB">MB</option>
                                                        </select>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specSensor">Sensor</h6>
                                                        <input type="text" name="specSensor" id="specSensor"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specData">Data</h6>
                                                        <input type="text" name="specData" id="specData"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specTRad">Thermal Radiation</h6>
                                                        <input type="text" name="specTRad" id="specTRad"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specLoc">Location</h6>
                                                        <input type="text" name="specLoc" id="specLoc"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specType">Type</h6>
                                                        <input type="text" name="specType" id="specType"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specSpectra">Spectra</h6>
                                                        <input type="text" name="specSpectra" id="specSpectra"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specCom">Components</h6>
                                                        <input type="text" name="specCom" id="specCom"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="specRoverID">RoverID</h6>
                                                        <input type="text" name="specRoverID" id="specRoverID"
                                                               class="form-control bg-dark text-white">
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
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Spectrometer_Type</th>
                                        <th scope="col">Sensor</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Thermal_Radiation</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Spectra</th>
                                        <th scope="col">Components</th>
                                        <th scope="col">RoverID</th>
                                        <th scope="col" style="text-align: center">Change/Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    include('connect.php');
                                    $stid = oci_parse($conn, 'SELECT * FROM Spectrometer');
                                    oci_execute($stid);

                                    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                                        // Use the uppercase column names for the associative array indices
                                        echo "<tr>\n";
                                        echo "    <td class='align-middle'>" . $row['ID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['NAME'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['SPECTROMETERTYPE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['SENSOR'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['DATA'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['THERMALRADIATION'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['LOCATION'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TYPE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['SPECTRA'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['COMPONENTS'] . "</td>\n";
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
                                            document.getElementById("specName").value = this.cells[1].innerHTML;
                                            document.getElementById("SPType").value = this.cells[2].innerHTML;
                                            document.getElementById("specSensor").value = this.cells[3].innerHTML;
                                            document.getElementById("specData").value = this.cells[4].innerHTML;
                                            document.getElementById("specTRad").value = this.cells[5].innerHTML;
                                            document.getElementById("specLoc").value = this.cells[6].innerHTML;
                                            document.getElementById("specType").value = this.cells[7].innerHTML;
                                            document.getElementById("specSpectra").value = this.cells[8].innerHTML;
                                            document.getElementById("specCom").value = this.cells[9].innerHTML;
                                            document.getElementById("specRoverID").value = this.cells[10].innerHTML;
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
            <BR>
            <BR>
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