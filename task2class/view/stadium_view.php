<?php
require_once __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/StadiumDisplayer.php';
require_once __DIR__ . '/../project/Sort.php';
require_once __DIR__ . '/../project/Search.php';

$project = new Project();
$project->loadDB();

$display_stadium = new StadiumDisplayer();

if (isset($_POST['sort'])) {
	$sort = new Sort('stadiums', 'name');
	$display_stadium->makeArray($sort->arr);
} elseif (isset($_POST['search'])) {
	$search = new Search('stadiums', $_POST['sumbol']);
	$display_stadium->makeArray($search->arr);
} else {

	$display_stadium->makeArray();
}


?>


<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Stadiums</title>
</head>
<body>
<form action="stadium_view.php" method="post">
	<input type="submit" value="SORT" name="sort">
</form>
<form action="stadium_view.php" method="post">
	<input type="text" name="sumbol">
	<input type="submit" value="SEARCH" name="search">
</form>
<div>
	<table border="1px solid black" cellpadding="10px">
		<th>Stadium</th>
		<th>Year</th>
		<th>Capacity</th>
		<th>City</th>
		<th>Clubs</th>
		<?php foreach ($display_stadium->stadiumsArr as $items => $item) { ?>
			<tr>

				<td><?php echo $item->getName(); ?></td>
				<td><?php echo $item->getYear(); ?></td>
				<td><?php echo $item->getCapacity(); ?></td>
				<td><?php echo $display_stadium->getCityName($item); ?></td>


				<td>
					<a href="http://<?= $_SERVER['SERVER_NAME'] . '/softgroup/task2class/view/clubs.php?stadium_id=' . $item->getId(); ?>">Clubs</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>

</body>

</html>