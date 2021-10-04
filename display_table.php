<!DOCTYPE html>
<html>
<head>
	<title>Display Page</title>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="box.css">

</head>
<body>
<div class="container pt-5">
	<div class="d-flex justify-content-center h-100">
		<div class="card pt-10">
			<div class="card-header">
				<h3 class="text-warning">DISPLAY ALL RECORDS</h3>
			</div>
			<div class="card-body">
				<form  action ="display_table.php"    method="POST">
          
					<div class="input-group form-group">
						&nbsp
						<div class="input-group-prepend" style="color:">
							<!-- <span class="input-group-text"><i class="fas fa-user"></i></span> -->
						

<?php
if(isset($_POST["display"])){			
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo1";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM register");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $r= $_POST['user'] ;
// $password =  $_POST['pass'];
// $mail = $_POST['email'];

 echo "<table border='1'>
 <tr>

 <th>uname</th>
 <th>email</th>
 <th>pass</th>
 
 </tr>";

 while($row = mysqli_fetch_array($result))  

  {

  echo "<tr>";

  echo "<td>" . $row['uname'] . "</td>";

  echo "<td>" . $row['pass'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

mysqli_close($conn);

}

?>

						</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<!-- <span class="input-group-text"><i class="fas fa-key"></i></span> -->
						</div>
					<div class="form-group d-flex justify-content-left">
				<!-- <input type="submit" name="display" value="display" class="btn btn-warning delete_btn"> -->
<button type="submit" class="btn btn-warning submit_btn" value="display" style="float:left" name="display">display records</button>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links text-info">
				</div>
				<div class="d-flex justify-content-center">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html


