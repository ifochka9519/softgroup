<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>Clubs</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<table border="1px solid black" cellpadding="10px" class="tables">
	<th class="tables">#</th>
	<th class="tables">Clubs</th>



	<?php $i = 1; foreach ($stadiumsClub as $clubsItem){ ?>
		<tr class="tables">
			<td><?php echo $i++ ?></td>
			<td><?php echo $clubsItem['clubs'] ?></td>
		</tr>

	<?php  } ?>
</table>

</body>
</html>