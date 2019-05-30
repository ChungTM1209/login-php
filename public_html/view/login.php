<?php

use Controller\UserController;
use Model\User;

require "../model/User.php";
require "../model/UserTable.php";
require "../model/DBConnection.php";
require "../controller/UserController.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form method="post">
	<label>email
		<input type="text" name="email">
	</label>
	<label>Password
		<input type="password" name="password">
	</label>
	<button type="submit">login</button>
	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$controller = new UserController();
		$controller->login();
		if ($controller->login()){
			session_start();
			$_SESSION['email'] = $_POST['email'];
			header('Location: afterLogin.php');
		} else echo "dang nhap that bai";
	}
	?>
</form>
</body>
</html>
