<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Home</title>
</head>
<body style = "background-color: #4594c5;">
	<div class="container-fluid">

	<?php

	require_once 'pageFormatSession.php';

    $pageTitle = "HOME";
    $img = "./images/logo.jpg";
    pageHeaderSession($pageTitle,$img);

	?>

	<h1>About Us</h1>
	<p>We provide functional, technical and project management support for implementations, upgrades and existing installs.</p>
	<p>With years of industry experience, ERP Atlantic delivers a sound methodology for supporting Oracle JD Edwards products. By combining 3rd party management tools and a proven methodology for ERP project management, we help our clients implement faster and better.</p>
	<p>At ERP Atlantic, we are committed to making our clients and partners successful.  Our business is based on integrity and fair values.</p>
	<button type="button" class="btn btn-primary" onclick="menuButton()">More</button>
	<div class="row" style="display:none" id="links">
		<a class="col-3 btn btn-secondary" href="https://www.linkedin.com/company/erp-atlantic">Visit our LinkedIn page</a>
		<a class="col-2 offset-1 btn btn-secondary" href="adminLogin.php">Admin Login</a>
	</div>

	<script type="text/javascript" src ="js/buttons.js"></script>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</div>

</body>
</html>