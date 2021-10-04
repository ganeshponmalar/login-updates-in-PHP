<!DOCTYPE html>
<html>
<head>
  
	<title>register page</title>
   <!--Made   -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="boost.css">
</head>
<body>

<div class="container-fluid pt-5">
	<div class="d-flex justify-content-center h-100">
		<div class="card pt-10">
			<div class="card-header">
				<h3 class="text-warning">Register Here</h3>
				<!-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->
			</div>
			<div class="card-body">
      
				<form action="registerdb.php" method="POST">

					  <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>

            <input type="text" class="form-control"  placeholder="Enter username" name="uname">						
					</div>
          
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <input type="email" class="form-control"  placeholder="Enter email" name="email">
					</div>

          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <input type="password" class="form-control" placeholder="Enter password" name="pass"> 
            
</div>


					<div class="form-group d-flex justify-content-left">
          <input type="submit" value="Sign Up" class="btn btn-warning login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
        
				<div class="d-flex justify-content-center links text-info">
					Already have an account? &nbsp <a href="login.php">sign in</a>
          
          &nbsp

         <a href="display_tabel.php">display in tabel</a>
				</div>
				<div class="d-flex justify-content-center">
					
         
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>


  








