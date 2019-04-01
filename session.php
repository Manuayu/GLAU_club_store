<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ayush";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
   session_start();
   $user_check=$SESSION_['login_user'];
$ses_sql=$conn->query("SELECT * FROM signup WHERE yourname='$user_check'",$conn);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['yourname'];
if(!isset($login_session)){
    mysqli_close($conn);
    header('location:index.html');
}


?>