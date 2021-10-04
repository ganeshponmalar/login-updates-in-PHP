<?php

SESSION_START();

if(isset($_POST['submit'])){
$servername = "localhost";
$username ="root";
$password="";
$dbname="demo1";

//creat connection

$conn = new mysqli($servername,$username,$password,$dbname);

   //check connection
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    } 
    
$email= $_POST['email'];
$opwd=$_POST['opwd'];
$npwd=$_POST['npwd'];
$cpwd=$_POST['cpwd'];

// $pass=$_POST['pass'];

$query = mysqli_query($conn,"SELECT email,pass from register where email='$email' AND pass='$opwd'");  
$num = mysqli_fetch_array($query);   

if($num>0){    
    if($_POST["npwd"]===$_POST["cpwd"])
    {
    $query2= mysqli_query($conn,"UPDATE register SET pass='$npwd' where email = '$email'");
    
  $SESSION['msg1']="password change successfully";
    }
}
    else{

        $_SESSION['msg1']="password does not match";
    }
} 

?>

