<?php

if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ayush";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $newUsername = mysqli_real_escape_string($conn, $_POST['username']); 
    $newPassword = mysqli_real_escape_string($conn, $_POST['password']);   

    session_start();
    
    $result = $conn->query("SELECT * FROM signup WHERE yourname ='$newUsername' AND password='$newPassword'");

   

    if (mysqli_num_rows($result)) {
        $_SESSION['newUsername']=$newUsername;

        echo " <h1>Welcome : ".$_SESSION['newUsername']."</h1>";
        header('location:index2.php');
       
       
    } 
    else
    {      
        echo "Login Unsuccessfull ! , please try again";     
    }
    $conn->close();
}
?>