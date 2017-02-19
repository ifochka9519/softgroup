<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>Stadiums</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<form action="<?php echo HOST ?>stadiums/search" method="get">
	<input type="text" name="sumbol">
	<input type="submit" class="links" value="SEARCH">
</form>
<table border="1px solid black" cellpadding="10px" >
	<th class="tables">#</th>
    <th class="tables"><a href="<?php echo HOST ?>stadiums/sort/stadiums.name"class="links">Stadium</a></th>
    <th class="tables"><a href="<?php echo HOST ?>stadiums/sort/cities.name"class="links">City</a></th>
    <th class="tables"><a href="<?php echo HOST ?>stadiums/sort/stadiums.year"class="links">Year</a></th>
	<th class="tables">Clubs</th>
	<th class="tables">Delete Stadium</th>



	<?php $i = 1; foreach ($stadiumsList as $stadiumsItem): ?>
		<tr class="tables">
			<td><?php echo $i++ ?></td>
			<td><?php echo $stadiumsItem['name'] ?></td>
			<td><?php echo $stadiumsItem['city'] ?></td>
			<td><?php echo $stadiumsItem['year'] ?></td>
			<td><a href="<?php echo HOST ?>stadiums/<?php echo $stadiumsItem['id'] ?>/clubs">CLUBS</a></td>
			<td><a href="<?php echo HOST ?>stadiums/<?php echo $stadiumsItem['id'] ?>/delete">DELETE</a></td>
		</tr>

	<?php  endforeach; ?>
</table>

</body>
</html>