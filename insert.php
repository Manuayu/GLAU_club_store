<?php

$yourname=$_POST['yourname'];
$email=$_POST['email'];
$number=$_POST['number'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

if(!empty($yourname)||!empty($password)||!empty($email)||!empty($number)||!empty($confirmpassword)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="ayush";
    
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
   else{
    $sql="INSERT into signup (yourname,email,number,password,confirmpassword) values ('$yourname','$email','$number','$password','$confirmpassword')";
if ($conn->query($sql))
{
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else if(empty($yourname)){
echo "Data is empty";
die();
}










?>