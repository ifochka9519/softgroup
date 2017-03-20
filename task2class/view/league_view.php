<?php
require_once __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/LeagueDisplayer.php';
require_once __DIR__ . '/../project/Sort.php';
require_once __DIR__ . '/../project/Search.php';

$project = new Project();
$project->loadDB();

$display_league = new LeagueDisplayer();

if (isset($_POST['sort'])) {
	$sort = new Sort('leagues', 'name');
	$display_league->makeArray($sort->arr);
} elseif (isset($_POST['search'])) {
	$search = new Search('leagues', $_POST['sumbol']);
	$display_league->makeArray($search->arr);
} else {

	$display_league->makeArray();
}


?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Leagues</title>
</head>
<body>
<form action="league_view.php" method="post">
	<input type="submit" value="SORT" name="sort">
</form>
<form action="league_view.php" method="post">
	<input type="text" name="sumbol">
	<input type="submit" value="SEARCH" name="search">
</form>
<div>

	<table border="1px solid black" cellpadding="10px">
		<th>League</th>
		<th>Country</th>
		<th>Top-place</th>
		<th>Clubs</th>
		<?php foreach ($display_league->leaguesArr as $items => $item) { ?>
			<tr>

				<td><?php echo $item->getName(); ?></td>
				<td><?php echo $display_league->getCountryName($item); ?></td>
				<td><?php echo $item->getTopPlace(); ?></td>

				<td>
					<a href="http://<?= $_SERVER['SERVER_NAME'] . '/softgroup/task2class/view/clubs.php?league_id=' . $item->getId(); ?>">CLUBS</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>

</body>

</html>