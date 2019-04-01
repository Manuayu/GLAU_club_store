<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"ayush");
if(isset($_REQUEST["submit"]))
{
    $user=$_REQUEST ["username"];
    $pass=$_REQUEST ["password"];
    $select="SELECT * from signup where yourname='$user' && password='$pass'";
    $query=mysqli_query($select); 

    $rowcount=mysqli_num_rows($query);
    if($rowcount==true){
        echo "your username and password is right";
        
    }
    else
    {
        echo "your username and password is incorect";
    }
}

    mysqli_close($con);

?>