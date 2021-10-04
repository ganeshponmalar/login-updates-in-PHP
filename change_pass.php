<!DOCTYPE html>
<html lang="en">
<?php SESSION_START() ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="cpass.css">
</head>
<body>
    <div class="container-fluid pt-5">
                  <div class="d-flex justify-content-center h-100">
                  <div class="card pt-10">
                  <div class="card-header">
                  <h3 class="text-warning">CHANGE PASSWORD</h3>
                  </div>
    <div class="card-body">
        
    <p style="color:red;"><?php echo $_SESSION['msg1'];?></p>
        <form action="change_passdb.php" method="POST">


        <div class="input-group form-group">
                 <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-key"></i></span>
                 </div>
      <input type="email" class="form-control" placeholder="Enter email Id" name="email">
                 </div>


        <div class="input-group form-group">
                 <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-key"></i></span>
                 </div>
      <input type="text" class="form-control" placeholder="Enter old password" name="opwd">
                 </div>

                 <div class="input-group form-group">
                 <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-key"></i></span>
                 </div>
      <input type="text" class="form-control" placeholder="Enter new password" name="npwd">
                 </div>

                 <div class="input-group form-group">
                 <span class="input-group-text"><i class="fas fa-key"></i></span>
                 <div class="input-group-prepend">
                 </div>
      <input type="text" class="form-control" placeholder="Enter confirm password" name="cpwd">
                 </div> 

            <div class="form-group d-flex justify-content-right">
     <input type="submit"  value="change_password" name="submit" class="btn btn-warning submit_btn">  



    
                 </div>
                 </form>
                 </div>
                 <div class="card">
<div class="d-flex justify-content-center links text-info">
    Do you want to change password? &nbsp <a href="register.php">register up</a>

    &nbsp
    
    &nbsp

    <a href="deletedb.php">sign up</a>
     </div>
        </div>
	      </div>
	        </div>
                 </div>
                       </body>
                              </html>

                                    </body>
                                        </html>
