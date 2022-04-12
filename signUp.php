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
    $logo="./images/logo1.jpeg";
    pageHeaderSession($pageTitle,$logo);


	

	?>

<form action="./signUpHandler.php" method="POST">
    <label for="Username">Username:</label><br>
    <input type="text" id="Username" name="Username" ><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" ><br>
    <label for="pwd">Password:</label><br>
    <input type="text" id="pwd" name="pwd" ><br>
    <input type="submit" value="Login">
  </form>

</body>
</html>