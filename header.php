<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<base href="/www/themes/custom/tbi/" /><!--[if IE]></base><![endif]-->
<title>Tony Blair Institute</title>
<!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<link rel="stylesheet" href="compiled/ie.css">
<![endif]-->
<link rel="stylesheet" href="compiled/tbi.min.css">
</head>
<body class="<?php echo $bodyID; ?> <?php echo $headerClass; ?>">

	<div class="header">
		<div class="logo"><a href="/static" title="Go to Homepage"><img src="images/tony-blair-institute.png" /></a></div>

		<nav class="main">
			<ul>
			<li><a <?php if($bodyID == 'about') echo 'class="active"'; ?> href="/static/about.php">About</a></li>
			<li><a <?php if($bodyID == 'news') echo 'class="active"'; ?> href="/static/news.php">News</a></li>
			<li><a <?php if($bodyID == 'careers') echo 'class="active"'; ?> href="/static/careers.php">Careers</a></li>
			<li><a <?php if($bodyID == 'contact') echo 'class="active"'; ?> href="/static/contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>

	<div class="menu-icon">
		<button class="c-hamburger c-hamburger--htx">
		  <span>toggle menu</span>
		</button>
	</div>