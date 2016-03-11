<?php
	session_start(); //DONT USE SESSION IN MVC
 ?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Add Plan</title>
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
		<a href="/travels/success">Home</a> | | <a href="/travels/logout">Log Out</a>
		  <h2>Add a Trip</h2>
		  	<?php		
				if($this->session->flashdata("travel_errors")){
					echo $this->session->flashdata("travel_errors");
				}
			?>
		  <form action="/travels/add_plan" method="POST" class="form-horizontal" role="form">
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="destination">Destination:</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter destination...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="plan">Description:</label>
		      <div class="col-sm-10">          
		        <input type="text" class="form-control" id="plan" name="plan" placeholder="Enter your plan...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="start_date">Travel Date From:</label>
		      <div class="col-sm-10">          
		        <input type="text" class="form-control" id="start_date" name="start_date" placeholder="YY/MM/DD...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="end_date">Travel Date To:</label>
		      <div class="col-sm-10">          
		        <input type="text" class="form-control" id="end_date" name="end_date" placeholder="YY/MM/DD...">
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <button type="submit" class="btn btn-default">Add</button>
		      </div>
		    </div>
		  </form>
	</div>
</body>
</html>