<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<!--  Link the bootstrap in the html page   -->
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<!--  Link the local css style in the html page   -->
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
</head>
</head>
<!--  Body tag start  -->
<body>
	<!--  Main container start  -->
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 bg">
				<div class="text-center header "><h1>Login Page</h1></div>
				<form action="index.php?model=login" method="POST">
					<div class="form-group">
    					 <label><mark>User Name</mark></label>
   						 <input type="text" name="username" class="form-control" value="" required>
  					</div>
 					<div class="form-group">
   						 <label for="pwd"><mark>Password</mark></label>
   						 <input type="password" name="password" class="form-control" value="" required>
 				    </div>
 				    <div style="color:red;font-size: 10px;"><?php echo $_data; ?></div>
 				    <div class="text-center">
  					<button type="submit" class="btn btn-default btn-cus btn-info">Signin</button>
  					</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<!--  Main container ends  -->
</body>
<!--  Body tag ends  -->
</html>