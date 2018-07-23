<?php

include('connect.php');

if (isset($_POST['add'])) {
    $pkey = $_POST['primaryKey'];
    $cname = $_POST['comName'];
    $cos = $_POST['comOS'];
    $ceep = $_POST['comEEP'];
    $cdram = $_POST['comDRAM'];
    $cfla = $_POST['comFlash'];
    $crid = $_POST['comRoverID'];

    $query = "insert into Computer values('$pkey','$cname','$cos','$ceep','$cdram','$cfla','$crid')";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Inserted!');</script>";
    }

}

if (isset($_POST['update'])) {
    $pkey = $_POST['primaryKey'];
    $cname = $_POST['comName'];
    $cos = $_POST['comOS'];
    $ceep = $_POST['comEEP'];
    $cdram = $_POST['comDRAM'];
    $cfla = $_POST['comFlash'];
    $crid = $_POST['comRoverID'];

    $query = "update Computer set NAME='$cname',OS='$cos',EEPROM='$ceep',DRAM='$cdram',FLASH='$cfla',ROVERROVERID='$crid' where CPUID='$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Updated');</script>";
    }

}

if (isset($_POST['delete'])) {
    $pkey = $_POST['primaryKey'];

    echo "<script>console.log($pkey);</script>";
    $query = "delete from Computer where CPUID = '$pkey'";
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
                    <div class="col-4">
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
                                                    <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Rover Computer</h3>

                                                    <div class="row d-flex align-contents-right"
                                                         style="text-align:right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" style="text-align:right">
                                                <button onclick="location.href = '3d.php';" type="button"
                                                        title="3D Coordinates"
                                                        class="btn btn-outline-primary btn-sm px-2">
                                                    <i style="font-size:40px" class="fa fa-map-marker mt-0"></i>
                                                </button>
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
                                        <form name="computerForm" method="post">
                                            <!--Body-->
                                            <div class="md-form">
                                                <h6 for="primaryKey" class="text-white">CPUID</h6>
                                                <input type="text" name="primaryKey" id="primaryKey"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form">
                                                <h6 for="comName" class="text-white">Name</h6>
                                                <input type="text" name="comName" id="comName"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form">
                                                <h6 for="comOS" class="text-white">OS</h6>
                                                <input type="text" name="comOS" id="comOS"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form">
                                                <h6 for="comEEP" class="text-white">EEPROM</h6>
                                                <input type="text" name="comEEP" id="comEEP"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form">
                                                <h6 for="comDRAM" class="text-white">DRAM</h6>
                                                <input type="text" name="comDRAM" id="comDRAM"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form">
                                                <h6 for="comFlash" class="text-white">Flash</h6>
                                                <input type="text" name="comFlash" id="comFlash"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form">
                                                <h6 for="comRoverID" class="text-white">RoverID</h6>
                                                <input type="text" name="comRoverID" id="comRoverID"
                                                       class="form-control bg-dark text-white" required>
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
                    <!--new form-->


                    <div class="col-8">
                        <div style="overflow: auto;height: 650px;">
                            <!--Table-->
                            <div class="table-responsive">
                                <form method="post">
                                    <table id="table" class="table table-hover table-active text-white"
                                           style="font-weight: 900;">
                                        <thead>
                                        <tr>
                                            <th scope="col">CPUID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">OS</th>
                                            <th scope="col">EEPROM</th>
                                            <th scope="col">DRAM</th>
                                            <th scope="col">Flash</th>
                                            <th scope="col">RoverID</th>
                                            <th scope="col" style="text-align: center">Change</th>
                                        </tr>
                                        </thead>
                                        <tbody style="font-weight: 900;">
                                        <?php

                                        include('connect.php');
                                        $stid = oci_parse($conn, 'SELECT * FROM Computer');
                                        oci_execute($stid);

                                        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                                            // Use the uppercase column names for the associative array indices
                                            echo "<tr>\n";
                                            echo "    <td class='align-middle'>" . $row['CPUID'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['NAME'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['OS'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['EEPROM'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['DRAM'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['FLASH'] . "</td>\n";
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
                                                document.getElementById("comName").value = this.cells[1].innerHTML;
                                                document.getElementById("comOS").value = this.cells[2].innerHTML;
                                                document.getElementById("comEEP").value = this.cells[3].innerHTML;
                                                document.getElementById("comDRAM").value = this.cells[4].innerHTML;
                                                document.getElementById("comFlash").value = this.cells[5].innerHTML;
                                                document.getElementById("comRoverID").value = this.cells[6].innerHTML;
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