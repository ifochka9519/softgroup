<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>New Stadium</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<?php require_once (ROOT."/helpers/CreateSelect.php"); ?>
<h3><?php echo urldecode($e);?></h3>
<form action="<?php echo HOST ?>stadiums/new" method="post">
	<label for="name">Name</label><br>
	<input type="text" name='name' id='name' value="<?php echo $name?>"><br>

	<label>City</label><br>
	<?php echo( CreateSelect::createSelectes('city',$citiesNameList));?>

	<label for="founded">Founded</label><br>
	<input type="text" name='founded' id='founded' value="<?php echo $year?>"><br>

	<label for="capacity">Capacity</label><br>
	<input type="text" name='capacity' id='capacity' value="<?php echo $capacity?>"><br>


	<input name="add" type="submit" value="ADD">
</form>
</body>
</html>