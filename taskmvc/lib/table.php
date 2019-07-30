<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--  Link the bootstrap in the html page   -->
	<link rel="stylesheet" type="text/css" href="Lib/css/bootstrap.min.css">
	<!--  Link the local css style in the html page   -->
	<link rel="stylesheet" type="text/css" href="Lib/css/style.css">
</head>
<!--  Body tag start  -->
<body>
	<div class="table-striped text-center">
		<table class="table text-center">
			<tr class="danger bold">
				<td>First Name</td>
				<td>Last Name</td>
				<td>Mail Id</td>
				<td>Mobile Number</td>
				<td>Address</td>
			</tr>
			 <?php
			 	if($_data!=1){
				  	$countOfData = count($_data);
				 	
				 	if ($countOfData!=0) {
				 		$datacount = count($_data[1]);
				 		if($datacount==3)
				 			echo "<h3 style=\"color: red\">You are restricted to view Mobile number and Address</h3>";
			 			for ($i=0; $i <$countOfData ; $i++) { 
			 				echo "<tr>";
			 				for ($j=0; $j <$datacount ; $j++) { 
			 					echo "<td class=\"warning\">".$_data[$i][$j]."</td>";
			 				}
			 				echo "</tr>";
			 			}
			 		}
			 		else{
			 			echo "<h3 style=\"color: red\">You are restricted to view the data!</h3>";
			 		}
			 	}
			 	else{
			 		echo "<h3 style=\"color: red\">Please enter the form to show the users</h3>";
			 	}
			 ?>
		</table>
	</div>
</body>
<!--  Body tag end  -->
</html>