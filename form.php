<?php
	include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="descriotion" content="A gaming review website to suggest which games are the best">
	<meta name="Keywords" content="#">
	<meta name="author" content="Shashank Shekhar">
	<title>GameArena | Subscribe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Seymour+One" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
	<div class="container">
		<div id="branding">
			<h1 style="font-family:'Bangers';font-size: 50px; ">GameArena</h1>

		</div>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="Reviews.html">Reviews</a></li>
				<li><a href="Ratings.html">Top Ratings</a></li>
				<li><a href="About.html">About</a></li>
				<li><a href="help.html">Help</a></li>
			</ul>
		</nav>
	</div>
</header>
<section id="form1">
	<div class="container">
		 <form action="form.php" method="post" class="modal-content">
		 	<div class="container">
		 		<h1>SUBSCRIBE</h1>
		 		<p>Please fill in your details to subscribe to our newsletter</p>
		 		<hr>
		 		<i class="fa fa-envelope icon"></i>
		 		<label for="email"><b>Email</b></label>
		 		<input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
		 		<i class="fa fa-user icon"></i>
		 		<label for="Name"><b>Name</b></label>
		 		<input type="text" placeholder="Enter Name" name="Name" required>
		 		<label>
		 			<input type="checkbox" checked="checked" name="daily" style="margin-bottom: 15px"> Get daily newsletters
		 		</label>
		 		<div class="clearfix">
		 			
		 			<button type="submit" class="subscribebtn" name="subscribe" value="subscribe">Subscribe
		 			</button>
		 		</div>
		 	</div>

        
         </form>

	</div>
</section>

<footer>
	<p>GameArena, Copyright &copy; 2018 Author : Shashank Shekhar</p>
</footer>
