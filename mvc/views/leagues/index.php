<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href='/assets/stylesheet/style.css'>
	<title>Leagues</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<form action="<?php echo HOST ?>leagues/search" method="get">
	<input type="text" name="sumbol">
	<input type="submit" class="links" value="SEARCH">
</form>
<table border="1px solid black" cellpadding="10px" >
	<th class="tables">#</th>
    <th class="tables"><a href="<?php echo HOST ?>leagues/sort/leagues.name"class="links">League</a></th>
    <th class="tables"><a href="<?php echo HOST ?>leagues/sort/countries.name"class="links">Country</a></th>
    <th class="tables"><a href="<?php echo HOST ?>leagues/sort/persone.name"class="links">President</a></th>
    <th class="tables"><a href="<?php echo HOST ?>leagues/sort/leagues.top_place"class="links">Place</a></th>
	<th class="tables">Clubs</th>
	<th class="tables">Delete League</th>



	<?php $i = 1; foreach ($leaguesList as $leaguesItem): ?>
		<tr class="tables">
			<td><?php echo $i++ ?></td>
			<td><?php echo $leaguesItem['name'] ?></td>
			<td><?php echo $leaguesItem['country'] ?></td>
			<td><?php echo $leaguesItem['president'] ?></td>
			<td><?php echo $leaguesItem['place'] ?></td>
			<td><a href="<?php echo HOST ?>leagues/<?php echo $leaguesItem['id'] ?>/clubs">CLUBS</a></td>
			<td><a href="<?php echo HOST ?>leagues/<?php echo $leaguesItem['id'] ?>/delete">DELETE</a></td>
		</tr>

	<?php  endforeach; ?>
</table>

</body>
</html>