<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include('connection.php');
// get the post records
$FType = $_POST['type'];
$FRegd = $_POST['FRegd'];
$title = $_POST['title'];
$FName = $_POST['FName'];
$MName = $_POST['MName'];
$LName = $_POST['LName'];
$Email = $_POST['Email'];
$ContactNo=$_POST['ContactNo'];
$Feedback = $_POST['feedback'];
// database insert SQL code
$sql = "INSERT INTO `feedback` VALUES ('0', '$FType', '$FRegd', '$title','$FName','$MName','$LName','$Email','$ContactNo','$Feedback')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Feedback Sent!";
}

?>