 <?php
	session_start();
 ?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Travel Dashboard</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
	</script>

</head>
<body>
	<div class="container">
		<h1>Hello <?= $user_session['name'] ?>!</h1>
		<div id="your_trip">
			<h4>Your Trip Schedules</h4>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Destination</th>
			        <th>Travel Start Date</th>
			        <th>Travel End Date</th>
			        <th>Plan</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>South Korea Seoul</td>
			        <td>June 16 2016</td>
			        <td>August 16 2016</td>
			        <td>to explore</td>
			      </tr>
			    </tbody>
			</table>
		</div>

		<div id="their_trip">
			<h4>Other User's Travel Plans</h4>
			<table class="table table-striped">
			    <thead>
			      <tr>
			      	<th>Trip Organizer</th>
			        <th>Destination</th>
			        <th>Travel Start Date</th>
			        <th>Travel End Date</th>
			        <th>Do You WAnt to Join?</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      	<td>Name of person who created the plan</td>
			        <td><a href="/travels/destination_by_id">South Korea Seoul</a></td>
			        <td>June 16 2016</td>
			        <td>August 16 2016</td>
			        <td><a href="">Join</a></td>
			      </tr>
			    </tbody>
			</table>
		</div>
		<a href="/travels/logout">Log Out</a>  | | <a href="/travels/add_page/<?= $user_session['id'] ?>">Add Travel Plans</a>
	</div>
</body>
</html>