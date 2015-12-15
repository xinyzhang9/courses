
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Course</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type ="text/css">
	body{
/*		text-align: center;*/
	}
	input{
		display: inline-block;
		margin: 10px 10px 10px 0;
	}
	.error{
		color: red;

	}
	.row{
		border: 1px solid silver;
	}
	.form-group{
		padding: 10px;
	}
	.message{
		color: red;
	}
	</style>
</head>
<body>
	<div class = 'container'>
		<h3>Add a new course</h3>
		<?php  
			if ($this->session->userdata('message')) {
				foreach ($this->session->userdata('message') as $message) {
					echo "<p class = 'message'>".$message."</p>";
				}
			}
		?>
		<form action="add" method = "post">
			Name:<input type="text" name = 'title'>
			<br>
			Description:<input type = "text" name = 'description'>
			<br>
			<input type="submit" value = 'Add' class = 'btn btn-success'>
		</form>
		<h3>Courses</h3>
		<!-- <form action="show" method = "post">
			<input type="submit" value = "show courses" class = "btn btn-danger">
		</form> -->
		<table class="table table-bordered">
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Actions</th>
			</tr>
			<?php
				if(isset($courses)){
					foreach ($courses as $course) {
						$href = "main/destroy/".$course['id'];
						echo "<tr>";
						echo "<td>".$course['title']."</td>";
						echo "<td>".$course['description']."</td>";
						echo "<td>".$course['created_at']."</td>";
						echo "<td><a href= $href>remove</a></td>";
						echo "</tr>";
					}
				}  
			?>
		</table>
	</div>

</body>
</html>