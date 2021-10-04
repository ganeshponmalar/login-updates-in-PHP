
<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "demo1";   
           
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

     $r = $_POST['user'];  
       $password = $_POST['pass'];                                        
         $sql = "SELECT * FROM register WHERE uname='$r' AND pass='$password'";
           $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
               $count = mysqli_num_rows($result);  
           
           if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
             }  
            else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
             }     
  
         ?> 
    
            




        

        