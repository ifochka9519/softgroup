<?php
require_once __DIR__ . '/../project/Project.php';




$project = new Project();
$project->loadDB();





?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Trophy</title>
</head>
<body>

<form action="add.php" method="post">


	<label for="name">Name</label><br>
	<input type="text" name='name' id='name'><br>



	<label for="year">Year</label><br>
	<input type="text" name='year' id='year'><br>

	<br><br>

	<input type="submit" value='Add new trophy' id='newtrophy' name='newtrophy'>


</form>
</body>
</html>