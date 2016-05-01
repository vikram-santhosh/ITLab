<html>
	<body>
		<h1>Registration Form</h1><br>
		<form action="8A.php" method = "post">
			<h3>Name</h3>
			<input type="text" name="name"><br>
			<h3>Username</h3>
			<input type="text" name="user"><br>
			<h3>Password</h3>
			<input type="password" name="pwd_1"><br>
			<h3>Confirm Password</h3>
			<input type="password" name="pwd_2"><br>
			<input type="submit" name = "submit"><br>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$pwd_1 = $_POST['pwd_1'];
		$pwd_2 = $_POST['pwd_1'];
		$user = $_POST['user'];
		$name = $_POST['name'];

		if($name == "")
			echo "Name is blank!".PHP_EOL;
		if($user == "")
			echo "Username is blank!".PHP_EOL;
		if($pwd_1 == "")
			echo "Password is blank!".PHP_EOL;
		if(! strcmp ($pwd_1 ,$pwd_2))
			echo "Passwords do not match!".PHP_EOL;
	}
?>