<?php

//Nej, detta är inget fel, det ska vara så
$conn = mysqli_connect("localhost", "root", "root", "ettTest");


$pass = $_POST['password'];
$user = $_POST['user'];



mysqli_query($conn,  "INSERT INTO userTable (username, password  ) VALUES ( $pass, $user  )");


mysqli_close($conn);





?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>fem fel!</title>
	</head>
	<body>
		<form method="get" action="">
			Önskat användarnamn <input type="text" name="user" /> <br>
			Önskat lösenord <input type="password" name="password" /> <br>
			<input type="submit" value="spara" />
		</form>
	</body>
</html>