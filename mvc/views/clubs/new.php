<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>New Club</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<?php require_once (ROOT."/helpers/CreateSelect.php"); ?>
<?php require_once (ROOT."/controllers/ClubsController.php"); ?>
<h3><?php echo urldecode($e);?></h3>
<form action="<?php echo HOST ?>clubs/new" method="post">
<label for="name">Name</label><br>
<input type="text" name='name' id='name' value="<?php echo $name?>"><br>

<label>City</label><br>
	<?php echo( CreateSelect::createSelectes('city',$citiesNameList));?>
<label>League</label><br>
	<?php echo( CreateSelect::createSelectes('league',$leaguesNameList));?>

<label for="founded">Founded</label><br>
<input type="text" name='founded' id='founded' value="<?php echo $year?>"><br>

<label for="president">President</label><br>
	<?php echo( CreateSelect::createSelectes('president',$personeNameList));?>
<label for="revenue">Revenue</label><br>
<input type="text" name='revenue' id='revenue' value="<?php echo $revenue?>"><br>

<label for="stadium">Stadium</label><br>

    <?php echo( CreateSelect::createSelectes('stadium',$stadiumsNameList));?>


	<input name="add" type="submit" value="ADD">
</form>
</body>
</html>
