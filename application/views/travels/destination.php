<?php
	session_start();
 ?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Destination</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
	</script>

	<style type="text/css">
		.tab {
			margin-left: 60px;
		}
	</style>
	
</head>
<body>
	<div class="container">
		<a href="/travels/success">Home</a> | | <a href="/travels/logout">Log Out</a>
		<div id="the_plan">
			<h1>Destination Name</h1>
			<h4>Planned By: </h4>
				<p class="tab">person who planned it</p>
			<h4>Description:</h4>
				<p class="tab">description of travel plan</p>
			<h4>Travel Date From:</h4>
				<p class="tab">travel date from</p>
			<h4>Travel Date To:</h4>
				<p class="tab">travel date to</p>
		</div>
		<div id="joiners">
			<h1>Other user's joining the trip:</h1>
			<p>person</p>
			<p>person</p>
			<p>person</p>
			<p>person</p>
		</div>
	</div>
</body>
</html>