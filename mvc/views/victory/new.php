<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>New Victory</title>
</head>
<body>
<?php require_once(ROOT . "/views/header.php"); ?>
<?php require_once (ROOT."/helpers/CreateSelect.php"); ?>
<h3><?php echo urldecode($e);?></h3>
<form action="<?php echo HOST ?>victory/new" method="post">
	<label for="trophy">Trophy</label><br>
	<?php echo( CreateSelect::createSelectes('trophy',$trophyNameList));?><br>
	<label for="club">Club</label><br>
	<?php echo( CreateSelect::createSelectes('club',$clubsNameList));?><br>


	<label for="year">Year</label><br>
	<input type="text" name='year' id='year'><br>


	<input name="add" type="submit" value="ADD">
</form>
</body>
</html>