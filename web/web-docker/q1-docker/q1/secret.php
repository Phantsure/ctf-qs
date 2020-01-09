<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron">
	<?php
		if($_GET["auth"]=='false')
		{
			echo "<div class='alert alert-danger'>
				No! I won't give you the flag. Bad user!
			      </div>";
		} else {
			echo "<div class='alert alert-success'>
				Fine! Here's the flag GLUG{5n0wd3n_3471n6_53cur17y}
			      </div>";
		}
	?>
</div>
</body>
</html>
