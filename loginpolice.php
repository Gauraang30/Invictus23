<?php      
    include('connection.php'); 
    $badgeid = $_POST['badgeid'];  
    $password = $_POST['password']; 
    // $email = $_POST['policeemail'];
    // $name = $_POST['policename'];
    // $mobile = $_POST['mobile']; 
    // $branchadd = $_POST['branchadd'];
      
        //to prevent from mysqli injection  
        $badgeid = stripcslashes($badgeid);  
        $password = stripcslashes($password);  
        // $email = stripcslashes($email);
        // $name = stripcslashes($name);
        // $mobile = stripcslashes($mobile);
        // $branchadd = stripcslashes($branchadd);

        $badgeid = mysqli_real_escape_string($con, $badgeid);  
        $password = mysqli_real_escape_string($con, $password);
        // $email = mysqli_real_escape_string($con, $email);
        // $address = mysqli_real_escape_string($con, $address);
        // $mobile = mysqli_real_escape_string($con, $mobile);
        // $branchadd = mysqli_real_escape_string($con, $branchadd);  
      
        $sql = "SELECT * from `police_login` WHERE `Badge_Id`='$badgeid'and `Password` = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script type="text/JavaScript"> 
            alert("Login Successful");
            window.location.href="police.html";
            </script>';  
        }  
        else{  
            echo '<script type="text/JavaScript"> 
            alert("Invalid E-mail or Password");
            window.location.href="loginpolice.html";
            </script>';  
        }     
?>