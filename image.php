<?php

include('connect.php');

if (isset($_POST['add'])) {
    $pkey = $_POST['primaryKey'];
    $itime = $_POST['imgTime'];
    $idate = $_POST['imgDate'];
    $idens = $_POST['imgDensity'];
    $isig = $_POST['imgSig'];
    $icol = $_POST['imgColT'];
    $icomp = $_POST['imgComp'];
    $ipix = $_POST['imgPix'];
    $ires = $_POST['imgRes'];
    $icont = $_POST['imgCont'];
    $idb = $_POST['imgDbID'];
    $icam = $_POST['imgCamID'];
    $itd = $_POST['imgTDId'];

    $query = "insert into Image values('$pkey',TO_TIMESTAMP('$itime','HH24:MI:SS'),TO_DATE('$idate','YYYY-MM-DD'),'$idens','$isig','$icol','$icomp','$ipix','$ires','$icont','$idb','$icam','$itd')";
    $stid = oci_parse($conn, $query);
   $res= oci_execute($stid);

    if ($res) {
        echo "<script>alert('Record Inserted!');</script>";
        
    }



}

if (isset($_POST['update'])) {
    $pkey = $_POST['primaryKey'];
    $itime = $_POST['imgTime'];
    $idate = $_POST['imgDate'];
    $idens = $_POST['imgDensity'];
    $isig = $_POST['imgSig'];
    $icol = $_POST['imgColT'];
    $icomp = $_POST['imgComp'];
    $ipix = $_POST['imgPix'];
    $ires = $_POST['imgRes'];
    $icont = $_POST['imgCont'];
    $idb = $_POST['imgDbID'];
    $icam = $_POST['imgCamID'];
    $itd = $_POST['imgTDId'];

    $query = "update Image set TOOKEDTIME=TO_TIMESTAMP('$itime','HH24:MI:SS'),TOOKEDDATE=TO_DATE('$idate','YYYY-MM-DD'),DENSITY='$idens',SIGNIFICANCE='$isig',COLORTYPE='$icol',IMAGECOMPRESSION='$icomp',PIXELS='$ipix',RESOLUTION='$ires',CONTRAST='$icont',DBDBID='$idb',CAMERACAMERAID='$icam',THREEDCOORDINATESID='$itd' where IMAGEID='$pkey'";
    $stid = oci_parse($conn, $query);
    oci_execute($stid);

    if ($stid) {
        echo "<script>alert('Record Updated');</script>";
    }

}

if (isset($_POST['delete'])) {
    $pkey = $_POST['primaryKey'];

    echo "<script>console.log($pkey);</script>";
    $query = "delete from Image where IMAGEID = '$pkey'";
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
    <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>MARS Explore</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="planet.php">Planet <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="landsite.php">Landsite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rover.php">Rover</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
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
                                                    <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5">Rover Images</h3>

                                                    <div class="row d-flex align-contents-right"
                                                         style="text-align:right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" style="text-align:right">
                                                <button onclick="location.href = 'db.php';" type="button"
                                                        title="Database List"
                                                        class="btn btn-outline-primary btn-sm px-2">
                                                    <i style="font-size:40px" class="fa fa-database mt-0"></i>
                                                </button>
                                                <button onclick="location.href = '3d.php';" type="button"
                                                        title="3D Coordinates"
                                                        class="btn btn-outline-primary btn-sm px-3">
                                                    <i style="font-size:40px" class="fa fa-map-marker mt-0"></i>
                                                </button>
                                                <button onclick="location.href = 'rover.php';" type="button"
                                                        title="Go Back" class="btn btn-outline-success btn-sm px-2">
                                                    <i style="font-size:40px"
                                                       class="fa fa-chevron-circle-left mt-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Header-->

                                    <div class="card-body mx-4 mt-4">

                                        <form name="imageForm" method="post">
                                            <!--Body-->
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="primaryKey">Image ID</h6>
                                                        <input type="text" name="primaryKey" id="primaryKey"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgTime">Time</h6>
                                                        <input type="time" name="imgTime" id="imgTime"
                                                               class="form-control bg-dark text-white" step="2"
                                                               required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgDate">Date</h6>
                                                        <input type="date" name="imgDate" id="imgDate"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgDensity">Density</h6>
                                                        <input type="text" name="imgDensity" id="imgDensity"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgSig">Significance</h6>
                                                        <input type="text" name="imgSig" id="imgSig"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgColT">Colour Type</h6>
                                                        <input type="text" name="imgColT" id="imgColT"
                                                               class="form-control bg-dark text-white">
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgComp">Compression</h6>
                                                        <input type="text" name="imgComp" id="imgComp"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgPix">Pixels</h6>
                                                        <input type="text" name="imgPix" id="imgPix"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgRes">Resolution</h6>
                                                        <input type="text" name="imgRes" id="imgRes"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgCont">Contrast</h6>
                                                        <input type="text" name="imgCont" id="imgCont"
                                                               class="form-control bg-dark text-white">
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgDbID">Database ID</h6>
                                                        <input type="text" name="imgDbID" id="imgDbID"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgCamID">Camera ID</h6>
                                                        <input type="text" name="imgCamID" id="imgCamID"
                                                               class="form-control bg-dark text-white" required>
                                                    </div>
                                                    <div class="md-form">
                                                        <h6 class="text-white" for="imgTDId">3D CoordinatesID</h6>
                                                        <input type="text" name="imgTDId" id="imgTDId"
                                                               class="form-control bg-dark text-white">
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
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-danger btn-block z-depth-2"
                                                                name="delete">Delete
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
                                        <th scope="col">Image_ID</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Density</th>
                                        <th scope="col">Significance</th>
                                        <th scope="col">Colour_Type</th>
                                        <th scope="col">Image_Compression</th>
                                        <th scope="col">Pixels</th>
                                        <th scope="col">Resolution</th>
                                        <th scope="col">Contrast</th>
                                        <th scope="col">DB_ID</th>
                                        <th scope="col">Camera_ID</th>
                                        <th scope="col">3dCoodinates_ID</th>
                                        <th scope="col" style="text-align: center">Change/Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    include('connect.php');
                                    $stid = oci_parse($conn, 'SELECT IMAGEID,TO_CHAR(TOOKEDTIME,\'HH24:MI:SS\') AS TT,TO_CHAR(TOOKEDDATE,\'YYYY-MM-DD\') AS TD,DENSITY,SIGNIFICANCE,COLORTYPE,IMAGECOMPRESSION,PIXELS,RESOLUTION,CONTRAST,DBDBID,CAMERACAMERAID,THREEDCOORDINATESID FROM image');
                                    oci_execute($stid);

                                    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                                        // Use the uppercase column names for the associative array indices
                                        echo "<tr>\n";
                                        echo "    <td class='align-middle'>" . $row['IMAGEID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TT'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['TD'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['DENSITY'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['SIGNIFICANCE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['COLORTYPE'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['IMAGECOMPRESSION'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['PIXELS'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['RESOLUTION'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['CONTRAST'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['DBDBID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['CAMERACAMERAID'] . "</td>\n";
                                        echo "    <td class='align-middle'>" . $row['THREEDCOORDINATESID'] . "</td>\n";
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
                                            document.getElementById("imgTime").value = this.cells[1].innerHTML;
                                            document.getElementById("imgDate").value = this.cells[2].innerHTML;
                                            document.getElementById("imgDensity").value = this.cells[3].innerHTML;
                                            document.getElementById("imgSig").value = this.cells[4].innerHTML;
                                            document.getElementById("imgColT").value = this.cells[5].innerHTML;
                                            document.getElementById("imgComp").value = this.cells[6].innerHTML;
                                            document.getElementById("imgPix").value = this.cells[7].innerHTML;
                                            document.getElementById("imgRes").value = this.cells[8].innerHTML;
                                            document.getElementById("imgCont").value = this.cells[9].innerHTML;
                                            document.getElementById("imgDbID").value = this.cells[10].innerHTML;
                                            document.getElementById("imgCamID").value = this.cells[11].innerHTML;
                                            document.getElementById("imgTDId").value = this.cells[12].innerHTML;
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