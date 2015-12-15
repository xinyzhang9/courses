<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Result</title>
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
		<h3>Submitted Information</h3>
		<p>Name: <?= $this->session->userdata('name')?></p>
		<p>Dojo Location: <?= $this->session->userdata('location')?></p>
		<p>Favorite Language: <?= $this->session->userdata('language')?></p>
		<p>Comments: <?= $this->session->userdata('comment')?></p>

	</div>
	<form action="survey/back" method = "post">
	<input type="submit" value = "Go back to home page">
	</form>
</body>
</html>