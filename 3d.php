<?php

include('connect.php');

if (isset($_POST['add'])) {
    $pkey = $_POST['primaryKey'];
    $ti = $_POST['TDTime'];
    $coodi = $_POST['TDCoo'];
    $takenD = $_POST['TDDate'];
    $cpui = $_POST['TDComID'];
    $query = "INSERT INTO
  THREEDCOORDINATES(ID, TAKENTIME, COODINATES, TAKENDATE, COMPUTERCPUID)
VALUES
(
    TD_SEQ.nextval,
    TO_TIMESTAMP('{$ti}', 'HH24.MI.SS'),
    '{$coodi}',
    TO_DATE('{$takenD}', 'YYYY-MM-DD'),
    '{$cpui}'
)";

    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Inserted!');</script>";
        //echo "<script> swal('WOW!','Message!','success') </script>";
    }

}

if (isset($_POST['update'])) {
    $pkey = $_POST['primaryKey'];
    $time = $_POST['TDTime'];
    $coodinate = $_POST['TDCoo'];
    $takenD = $_POST['TDDate'];
    $cpuid = $_POST['TDComID'];

    $query = "update THREEDCOORDINATES set COODINATES='$coodinate',TAKENTIME=TO_TIMESTAMP('$time','HH24:MI:SS'),TAKENDATE=TO_DATE('$takenD','YYYY-MM-DD'),COMPUTERCPUID='$cpuid' where ID='$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Updated');</script>";

    }

}

if (isset($_POST['delete'])) {
    $pkey = $_POST['primaryKey'];

    echo "<script>console.log($pkey);</script>";
    $query = "delete from ThreeDcoordinates where ID = '$pkey'";
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
    <!-- Sweet Alert -->
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                                                    <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">3D Coordinates</h3>

                                                    <div class="row d-flex align-contents-right"
                                                         style="text-align:right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" style="text-align:right">
                                                <button onclick="location.href = 'computer.php';" type="button"
                                                        title="Go Back to Computer"
                                                        class="btn btn-outline-success btn-sm px-1">
                                                    <i style="font-size:20px" class="fa fa-laptop mt-0"></i>
                                                </button>
                                                <button onclick="location.href = 'image.php';" type="button"
                                                        title="Go Back to Images"
                                                        class="btn btn-outline-success btn-sm px-1">
                                                    <i style="font-size:20px" class="fa fa-image mt-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Header-->

                                    <div class="card-body mx-4 mt-4">
                                        <form name="3DForm" method="post">
                                            <!--Body-->

                                            <input type="hidden" name="primaryKey" id="primaryKey" class="form-control">

                                            <div class="md-form">
                                                <h6 for="TDTime" class="text-white">Time</h6>
                                                <input type="time" name="TDTime" id="TDTime"
                                                       class="form-control bg-dark text-white" step="2" required>
                                            </div>
                                            <div class="md-form" class="text-white">
                                                <h6 for="TDCoo" class="text-white">Coodinates</h6>
                                                <input type="text" name="TDCoo" id="TDCoo"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form" class="text-white">
                                                <h6 for="TDDate" class="text-white">Taken Date</h6>
                                                <input type="date" name="TDDate" id="TDDate"
                                                       class="form-control bg-dark text-white" required>
                                            </div>
                                            <div class="md-form" class="text-white">
                                                <h6 for="TDComID" class="text-white">Computer ID</h6>
                                                <input type="text" name="TDComID" id="TDComID"
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
                                                                class="btn btn-success btn-block z-depth-2"
                                                                name="add">ADD
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-info btn-block z-depth-2"
                                                                name="update">Update
                                                        </button>
                                                    </div>
                                                </div>
                                                <br>
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
                                            <th scope="col">3DCoodinate_ID</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Coordinates</th>
                                            <th scope="col">Taken_Date</th>
                                            <th scope="col">Computer_ID</th>
                                            <th scope="col" style="text-align: center">Change/Remove</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        include('connect.php');
                                        $stid = oci_parse($conn, 'SELECT ID,TO_CHAR(TAKENTIME,\'HH24:MI:SS\') AS T,COODINATES,TO_CHAR(TAKENDATE,\'YYYY-MM-DD\') AS TD,COMPUTERCPUID FROM THREEDCOORDINATES');
                                        oci_execute($stid);

                                        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                                            // Use the uppercase column names for the associative array indices
                                            echo "<tr>\n";
                                            echo "    <td class='align-middle'>" . $row['ID'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['T'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['COODINATES'] . "</td>\n";
                                            echo "    <td class='align-middle'>" . $row['TD'] . "</td>\n";
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
                                                document.getElementById("TDTime").value = this.cells[1].innerHTML;
                                                document.getElementById("TDCoo").value = this.cells[2].innerHTML;
                                                document.getElementById("TDDate").value = this.cells[3].innerHTML;
                                                document.getElementById("TDComID").value = this.cells[4].innerHTML;
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