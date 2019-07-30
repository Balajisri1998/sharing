<!DOCTYPE html>
<html>
<head>
	<title>register Page</title>
	<!--  Link the bootstrap in the html page   -->
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<!--  Link the local css style in the html page   -->
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
</head>
<!--  Body tag start  -->
<body>
	<!--  Main container start  -->
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 bg">
				<form action="" method="POST">
					<div class="text-center jumbotron"><h2>REGISTRATION FORM</h2></div>
					<div class="form-group">
    					 <label>First Name</label>
   						 <input type="text" name="fname" class="form-control" value="" required>
  					</div>
  					<div class="form-group">
    					 <label>Last Name</label>
   						 <input type="text" name="lname" class="form-control" value="" required>
  					</div>
 					<div class="form-group">
   						 <label>Mail Id</label>
   						 <input type="email" name="mailid" class="form-control" value="" required>
 				    </div>
 				    <div class="form-group">
    					 <label>Mobile No</label>
   						 <input type="number" name="mobileno" class="form-control" value="" required>
  					</div>
  					<div class="form-group">
    					 <label>Address</label>
   						 <input type="text" name="address" class="form-control" value="" required>
  					</div>
 				    <div class="text-center">
  					<button type="submit" class="btn btn-default btn-cus btn-info">Submit</button>
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