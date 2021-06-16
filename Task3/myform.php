
 <?php include "process.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<h1>Registration Form</h1>
		
		<hr>
		
		<form action="" method="POST">
			<table>
				<tr>
				<td>First Name :</td>
				<td><input name="firstName" type="text"></td>
				</tr>

				<tr>
				<td>last Name :</td>
				<td><input name="lastName" type="text"></td>
				</tr>
				
				<tr>
				<td>Email :</td>
				<td><input type="email" name="email"></td>
				</tr>

				<tr>
				<td>mobile :</td>
				<td><input name="mobile" type="text"></td>
				</tr>
			   

				<tr>
					<td><input type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>