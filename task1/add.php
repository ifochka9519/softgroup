<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/main.js"></script>
	<title>New</title>
</head>
<body>
    <?php require_once ("header.php"); ?>
	<div id='newclub'>
	<form action='add_club.php' onsubmit="return adds();" method="post" name='add_form'>
	<label for="name">Name</label><br>
	<input type="text" name='name' id='name'><br>
	<label for="country">Country</label><br>
	<input type="text" name='country' id='country'><br>
	<label for="founded">Founded</label><br>
	<input type="text" name='founded' id='founded'><br>
	<label for="president">President</label><br>
	<input type="text" name='president' id='president'><br>
	<label for="revenue">Revenue</label><br>
	<input type="text" name='revenue' id='revenue'><br>
	<label for="honours">Honours</label><br>
	<input type="text" name='honours' id='honours'><br><br>
	<input type="submit" value='Add new club' id='newfoot' name='newfoot'>
	</form>
	</div>

</html>
