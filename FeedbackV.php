<?php
include("connection.php");
$tableName = 'feedback';
$columns= ['ComplaintNo','FType','FRegd','Title','FName','MName','LName','Email','ContactNo','Feedback'];
$fetchData = fetch_data($con, $tableName, $columns);
function fetch_data($con, $tableName, $columns){
 if(empty($con)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT $columnName FROM `feedback` ORDER BY `ComplaintNo` DESC";
$result = $con->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($con);
}
}
return $msg;
}
?>