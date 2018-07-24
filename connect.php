<?php
// Create connection to Oracle
$conn = oci_connect("CJ", "123", "localhost");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   //print "Connected to Oracle!";
}
// Close the Oracle connection

?>