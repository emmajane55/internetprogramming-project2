<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

	<?php

	require_once 'pageFormatSession.php';

    $pageTitle = "HOME";
    $img = "./images/logo1.jfif";
    pageHeaderSession($pageTitle,$img);

    //display home page
    echo("<h1>Information to be added</h1>");
    echo("<p>include description of company and website.</p>");

    pageFooter();

	?>

</body>
</html>