<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sign up</title>
</head>
<body>
	<div class= "container">
	<?php

	
	require_once 'pageFormatSession.php';

    $pageTitle="Sign up";
    $logo="./images/logo.jpg";
    pageHeaderSession($pageTitle,$logo);


	

	?>

<form action="./signUpHandler.php" method="POST">
    <label for="Username">Username:</label><br>
    <input type="text" id="Username" name="Username" ><br>
    <label for="pwd">Password:</label><br>
    <input type="text" id="pwd" name="pwd" ><br>
    <label for="Name">Name:</label><br>
    <input type="text" id="name" name="name" ><br>
    <label for="Email">Email:</label><br>
    <input type="text" id="Email" name="Email" ><br>
    <input type="submit" value="Login">
  </form>

</body>
</html>