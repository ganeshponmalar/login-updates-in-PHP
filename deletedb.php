
<!DOCTYPE html>
<html>
<head>
	<title>delete Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="margin.css">
</head>
<body>
<div class="container pt-5">
	<div class="d-flex justify-content-center h-100">
		<div class="card pt-10">
			<div class="card-header">
				<h3 class="text-warning">Delete Record</h3>

				<!-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->

			</div>
			<div class="card-body">
				<form  method="POST">

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span><i class="fas fa-user"></i></span>
							<input type="text" name="user" >
							
						</div>

						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						<span><i class="fas fa-key"></i></span>
							<input type="password" name="pass">
						</div>
          
					</div>
					<div class="form-group d-flex justify-content-center"> 
						
                        <input type="submit" name="delete" value="delete" class="btn btn-warning delete_btn">
						<!-- <hr>
                        <input type="submit" name="delete" value="display" class="btn btn-warning delete_btn"> -->

				<button type="btn btn-warning"><a href="display_table.php" >click here</a></button>

	
				<!-- <a href="display_table.php" class="button">Click Here</a> -->
                     
						<?php
      
if(isset($_POST['delete'])) {
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

$r= $_POST['user'];
$password =  $_POST['pass'];

//sql to delete a username,password and email 

$sql="DELETE FROM register WHERE uname ='$r' AND pass='$password'";

if($conn->query($sql)===TRUE)

{
    echo"record deleted successfully";
}
else
{
    echo"error deleteing record:".$conn->error;
}
$conn->close(); 
}	 
  ?>
  
					</div>
				</form>
			</div>
			<div class="card">
        
				<div class="d-flex justify-content-center links text-info">
					If you want to delete?  (or) &nbsp <a href="login.php">sign up</a>
                    &nbsp
                        (or)
                       &nbsp
                       <a href="change_pass.php"> change up</a>

				</div>
				<div class="d-flex justify-content-center">
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

	

