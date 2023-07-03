<!DOCTYPE html>
<html>
<head>
	<title>Formulir PHP</title>
</head>
<body>
	<form action="proses2.php" method="POST">
		<label for="gender">Gender:</label><br>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label><br><br>
		
		<input type="submit" value="Submit">
	</form>
</body>
</html>
