<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>Victory</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<h3 class="rightText"><a href="<?php echo HOST ?>victory/new" class="links">NEW VICTORY</a></h3>
<table border="1px solid black" cellpadding="10px" >
	<th class="tables">#</th>
	<th class="tables">Trophy</th>
	<th class="tables">Club</th>
	<th class="tables">Year</th>



	<?php $i = 1; foreach ($victoryList as $victoryItem): ?>
		<tr class="tables">
			<td><?php echo $i++ ?></td>
			<td><?php echo $victoryItem['trophy'] ?></td>
			<td><?php echo $victoryItem['club'] ?></td>
			<td><?php echo $victoryItem['year'] ?></td>
		</tr>

	<?php  endforeach; ?>
</table>

</body>
</html>