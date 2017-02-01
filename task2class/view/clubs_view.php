<?php
require_once __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/ClubsDisplayer.php';
require_once __DIR__ . '/../project/Sort.php';
require_once __DIR__ . '/../project/Search.php';

$project = new Project();
$project->loadDB();

$display_club = new ClubsDisplayer();

if (isset($_POST['sort'])) {
	$sort = new Sort('clubs', 'name');
	$display_club->makeArray($sort->arr);
} elseif (isset($_POST['search'])) {
	$search = new Search('clubs', $_POST['sumbol']);
	$display_club->makeArray($search->arr);
} else {

	$display_club->makeArray();
}


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clubs</title>
</head>
<body>
<form action="clubs_view.php" method="post">
    <input type="submit" value="SORT" name="sort">
</form>
<form action="clubs_view.php" method="post">
    <input type="text" name="sumbol">
    <input type="submit" value="SEARCH" name="search">
</form>
<div>
    <table border="1px solid black" cellpadding="10px">
        <th>Football Club</th>
        <th>League</th>
        <th>City</th>
        <th>Stadium</th>
        <th>Year</th>
        <th>Revenue</th>
        <th>Trophy</th>
		<?php foreach ($display_club->clubsArr as $items => $item) { ?>
            <tr>

                <td><?php echo $item->getName(); ?></td>
                <td><?php echo $display_club->getLeagueName($item); ?></td>
                <td><?php echo $display_club->getCityName($item); ?></td>
                <td><?php echo $display_club->getStadiumName($item); ?></td>
                <td><?php echo $item->getYear(); ?></td>
                <td><?php echo $item->getRevenue(); ?></td>
                <td>
                    <a href="http://<?= $_SERVER['SERVER_NAME'] . '/softgroup/task2class/view/trophy.php?club_id=' . $item->getId(); ?>">TROPHY</a>
                </td>
            </tr>
		<?php } ?>
    </table>
</div>

</body>

</html>