<?php
include("FIRV.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIRs</title>
  <style>
    table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    align-content:center;
  }
  
  table td, table th {
    border: 1px solid #000000;
    padding: 8px;
  }
  
 table tr:nth-child(even){background-color: #f2f2f2;}
  
  table tr:hover {background-color: #ddd;}
  
  table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #000000;
    color: rgb(255, 255, 255);
    border: 1px solid #ffffff;
  }
  h1{
    font-family: Arial, Helvetica, sans-serif;
    color: black  ;
    text-align: center;
  }
  </style>
</head>
<body>  
<div>
  <u><h1>FIRs Filed</h1></u>
 <div>
   <div>
    <?php echo $deleteMsg??''; ?>
    <div>
      <table>
       <thead><tr><th>S.N</th>
                <th>Name</th>
                <!--<th>Middle Name</th>
                <th>Last Name</th>-->
                <th>Contact No</th>
                <th>Class of crime</th>
                <th>Date of crime</th>
                <th>Time of crime</th>
                <th>Location of crime</th>
                <!--<th>Taluka of crime</th>
                <th>Pin of crime</th>-->
                <th>Address</th>
                <!--<th>Street</th>
                <th>Taluka</th>
                <th>Pin</th>-->
                <th>Description</th>
                
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['FName'].' '.$data['MName'].' '.$data['LName']??''; ?></td>
      <td><?php echo $data['ContactNo']??''; ?></td>
      <td><?php echo $data['CClass']??''; ?></td>
      <td><?php echo $data['CDate']??''; ?></td>
      <td><?php echo $data['CTime']??''; ?></td>
      <td><?php echo $data['CStreet'].','.$data['CWard'].','.$data['CPincode']??''; ?></td>
      <td><?php echo $data['PApartment'].','.$data['PStreet'].','.$data['PWard'].','.$data['PPincode']??''; ?></td>      
      <td><?php echo $data['Description']??''; ?></td>   
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>