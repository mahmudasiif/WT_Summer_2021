<!DOCTYPE html>
<html>
	<head>
    <script src="js/val.js"></script>
		<title>Registration Form</title>
	</head>
	<body>
		<h1>Registration Form</h1>
        <form action="" onsubmit="return validateForm()" method="post">
  Full Name: <input type="text" id="fname" onkeyup="nameval()" name="fname"><br><br><p id="errorfname"></p>
  Email: <input type="text" id="email" onkeyup="emailval()"name="email"><br><br><p id="erroremail"></p>
  Password: <input type="password" id="password" onkeyup="passval()"name="password"><br><br><p id="errorpassword"></p>
  Comment:<textarea rows="4" cols="40" id="comment"onmouseover="comval()" name="comment"></textarea><br><br><p id="errorcomment"></p>
  Gender :
  <input type="radio" name="Gender"> Male
						<input type="radio" name="Gender"> Female
						<input type="checkbox"> Other
                        <br><br>
  Please Choose a hobby :
  <input type="checkbox"> Singing
						<input type="checkbox"> Dancing
						<input type="checkbox"> Reading
    <br><br>
  Please Choose a file : <input type="file"></input><br><br>
  <input type="submit" value="Submit">

  <button id="btn" onclick="myfunc()" >Click </button>
</form>
		
	
	</body>
</html>