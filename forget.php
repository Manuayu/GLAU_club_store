<?php

if(isset($_POST['forget']))
{
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ayush";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$newemail = mysqli_real_escape_string($conn, $_POST['email']); 
 $result = $conn->query("SELECT * FROM signup WHERE email ='$newemail'");

while($row=mysqli_fetch_assoc($result))
{
    $yourname=$row['yourname'];
    $password=$row['password'];
    $emails=$row['email'];
    
}
    error_reporting(0);
    if($newemail!=$emails)
    {
     echo "Incorrect Email";
    }
  else{
      
      $from="mridulsrivastav407@gmail.com";
        $to=$emails;
        $subject="Lost password";
        $body="Dear $yourname \n Your Username is:$yourname \n Your password is :$password ";
        mail($to,$subject,$body,$from);
        echo "Email has been sent to you ! Thank you $yourname \n Check your inbox";
  }
}
else{
    echo " Please fill your Email";
}

