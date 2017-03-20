<?php
require_once __DIR__ . '/../project/Project.php';


require_once __DIR__ . '/../project/PersoneDisplayer.php';
require_once __DIR__ . '/../project/CountryDisplayer.php';




$project = new Project();
$project->loadDB();


$display_persone = new PersoneDisplayer();
$display_persone->makeArray();

$display_country = new CountryDisplayer();
$display_country->makeArray();




?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<form action="add.php" method="post">


	<label for="name">Name</label><br>
	<input type="text" name='name' id='name'><br>
	<label>Country</label><br>
	<select name="country">
		<option label="country" selected></option>
		<option value="<?php echo($display_country->countryArr[0]->getId()); ?>"><?php echo($display_country->countryArr[0]->getName()); ?></option>
		<option value="<?php echo($display_country->countryArr[1]->getId()); ?>"><?php echo($display_country->countryArr[1]->getName()); ?></option>
		<option value="<?php echo($display_country->countryArr[2]->getId()); ?>"><?php echo($display_country->countryArr[2]->getName()); ?></option>
		<option value="<?php echo($display_country->countryArr[3]->getId()); ?>"><?php echo($display_country->countryArr[3]->getName()); ?></option>
		<option value="<?php echo($display_country->countryArr[4]->getId()); ?>"><?php echo($display_country->countryArr[4]->getName()); ?></option>
	</select><br>


	<label for="top_place">Top Place</label><br>
	<input type="text" name='top_place' id='top_place'><br>
	<label for="president">President</label><br>


	<select name="president">
		<option label="president" selected></option>
		<option value="<?php echo($display_persone->personeArr[0]->getId()); ?>"><?php echo($display_persone->personeArr[0]->getName()); ?></option>
		<option value="<?php echo($display_persone->personeArr[1]->getId()); ?>"><?php echo($display_persone->personeArr[1]->getName()); ?></option>
		<option value="<?php echo($display_persone->personeArr[2]->getId()); ?>"><?php echo($display_persone->personeArr[2]->getName()); ?></option>
		<option value="<?php echo($display_persone->personeArr[3]->getId()); ?>"><?php echo($display_persone->personeArr[3]->getName()); ?></option>
		<option value="<?php echo($display_persone->personeArr[4]->getId()); ?>"><?php echo($display_persone->personeArr[4]->getName()); ?></option>
		<option value="<?php echo($display_persone->personeArr[5]->getId()); ?>"><?php echo($display_persone->personeArr[5]->getName()); ?></option>
	</select><br>
	<br><br>

	<input type="submit" value='Add new league' id='newleague' name='newleague'>


</form>
</body>
</html>