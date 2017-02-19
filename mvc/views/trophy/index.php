<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>Trophy</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<form action="<?php echo HOST ?>trophy/search" method="get">
	<input type="text" name="sumbol">
	<input type="submit" class="links" value="SEARCH">
</form>
<table border="1px solid black" cellpadding="10px" >
	<th class="tables">#</th>
    <th class="tables"><a href="<?php echo HOST ?>trophy/sort/trophy.name"class="links">Trophy</a></th>
    <th class="tables"><a href="<?php echo HOST ?>trophy/sort/trophy.year"class="links">Founded</a></th>
	<th class="tables">Clubs</th>
	<th class="tables">Delete League</th>



	<?php $i = 1; foreach ($trophyList as $trophyItem): ?>
		<tr class="tables">
			<td><?php echo $i++ ?></td>
			<td><?php echo $trophyItem['name'] ?></td>
			<td><?php echo $trophyItem['year'] ?></td>
			<td><a href="<?php echo HOST ?>trophy/<?php echo $trophyItem['id'] ?>/clubs">CLUBS</a></td>
			<td><a href="<?php echo HOST ?>trophy/<?php echo $trophyItem['id'] ?>/delete">DELETE</a></td>
		</tr>

	<?php  endforeach; ?>
</table>

</body>
</html>