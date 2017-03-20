<?php
require_once __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/TrophyDisplayer.php';
require_once __DIR__ . '/../project/Sort.php';
require_once __DIR__ . '/../project/Search.php';

$project = new Project();
$project->loadDB();

$display_trophy = new TrophyDisplayer();

if (isset($_POST['sort'])) {
	$sort = new Sort('trophy', 'name');
	$display_trophy->makeArray($sort->arr);
} elseif (isset($_POST['search'])) {
	$search = new Search('trophy', $_POST['sumbol']);
	$display_trophy->makeArray($search->arr);
} else {

	$display_trophy->makeArray();
}


?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Trophy</title>
</head>
<body>
<form action="trophy_view.php" method="post">
	<input type="submit" value="SORT" name="sort">
</form>
<form action="trophy_view.php" method="post">
	<input type="text" name="sumbol">
	<input type="submit" value="SEARCH" name="search">
</form>
<div>
	<table border="1px solid black" cellpadding="10px">
		<th>Trophy</th>
		<th>Year</th>
		<th>Clubs</th>
		<?php foreach ($display_trophy->trophyArr as $items => $item) { ?>
			<tr>

				<td><?php echo $item->getName(); ?></td>
				<td><?php echo $item->getYear(); ?></td>
				<td>
					<a href="http://<?= $_SERVER['SERVER_NAME'] . '/softgroup/task2class/view/clubs.php?trophy_id=' . $item->getId(); ?>">Clubs</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>

</body>

</html>