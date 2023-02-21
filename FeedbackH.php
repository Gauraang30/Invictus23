<?php
include("FeedbackV.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Feedbacks</title>
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
<u><h1>Feedbacks Recieved</h1></u>
<div>
 <div>
   <div>
    <?php echo $deleteMsg??''; ?>
    <div>
      <table border=1>
       <thead><tr><th>S.N</th>
                <!--<th>Complaint No</th>-->
                <th>Type</th>
                <th>Regarding</th>
                <th>Name</th>
                <th>Email-Id</th>
                <th>Contact No</th>
                <th>Feedback</th>
                
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['FType']??''; ?></td>
      <td><?php echo $data['FRegd']??''; ?></td>
      <td><?php echo $data['Title'].' ',$data['FName'].' '.$data['MName'].' '.$data['LName']??''; ?></td>
      <td><?php echo $data['Email']??''; ?></td>
      <td><?php echo $data['ContactNo']??''; ?></td>
      <td><?php echo $data['Feedback']??''; ?></td>   
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