<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>New League</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<?php require_once (ROOT."/helpers/CreateSelect.php"); ?>
<h3><?php echo urldecode($e);?></h3>
<form action="<?php echo HOST ?>leagues/new" method="post">
	<label for="name">Name</label><br>
	<input type="text" name='name' id='name' value="<?php echo $name?>"><br>

	<label>Country</label><br>
	<?php echo( CreateSelect::createSelectes('country',$countriesNameList));?>

	<label for="place">Top Place</label><br>
	<input type="text" name='place' id='place' value="<?php echo $place?>"><br>

	<label for="president">President</label><br>
	<?php echo( CreateSelect::createSelectes('president',$personeNameList));?>


	<input name="add" type="submit" value="ADD">
</form>
</body>
</html>