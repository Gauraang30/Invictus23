<?php
include("connection.php");
$tableName = 'FIR';
$columns= ['FName','MName','LName','ContactNo','CClass','CDate','CTime','CStreet','CWard','CPincode','PApartment','PStreet','PWard','PPincode','Description'];
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
$query = "SELECT $columnName FROM `FIR` ORDER BY `CDate` DESC";
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