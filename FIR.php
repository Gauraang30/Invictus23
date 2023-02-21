<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include('connection.php');
// get the post records

$FName = $_POST['FName'];
$MName = $_POST['MName'];
$LName = $_POST['LName'];
$DOB = $_POST['DOB'];
$ContactNo=$_POST['ContactNo'];
$AdhaarID = $_POST['AdhaarID'];
$Class = $_POST['Class'];
$CDate = $_POST['Date'];
$CTime = $_POST['time'];
$CStreet = $_POST['CStreet'];
$CLandmark = $_POST['CLandmark'];
$CWard = $_POST['CWard'];
$CPincode = $_POST['CPincode'];
$PApartment = $_POST['PApartment'];
$PStreet = $_POST['PStreet'];
$PLandmark = $_POST['PLandmark'];
$PWard = $_POST['PWard'];
$PPincode = $_POST['PPincode'];
$Description = $_POST['Description'];
// database insert SQL code
$sql = "INSERT INTO `FIR` VALUES ('0', '$FName', '$MName', '$LName','$DOB','$ContactNo','$AdhaarID','$Class','$CDate','$CTime',
'$CStreet','$CLandmark','$CWard','$CPincode','$PApartment','$PStreet','$PLandmark','$PWard','$PPincode','$Description')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "FIR Filed!";
}

?>