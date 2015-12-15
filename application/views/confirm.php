<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirm</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			text-align: center;
		}
		.container{
			border: 1px solid silver;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class = 'container'>
		<h3>Are you sure you want to delete the following courses?</h3>
		Id: <?= $id ?><br>
		Name: <?= $title ?><br>
		Description: <?= $description?>
	</div>
	<form action="/" method = "post">
		<input type="submit" class = 'btn btn-success' value = "no">
	</form>
	<form action= <?= base_url("destroy_course/{$id}") ?> method = "post">
		<input type="submit" class = 'btn btn-danger' value = "yes! I want to delete this">
	</form>
</body>
</html>