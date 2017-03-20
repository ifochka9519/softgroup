<?php
include __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/LeagueDisplayer.php';
require_once __DIR__ . '/../project/StadiumDisplayer.php';
require_once __DIR__ . '/../project/TrophyDisplayer.php';


$project = new Project();
$project->loadDB();
$arr = [];
if(!empty($_GET['league_id'])){
$display_league = new LeagueDisplayer();
$arr = $display_league->getClubs($_GET['league_id']);
}

if(!empty($_GET['stadium_id'])){
	$display_stadium = new StadiumDisplayer();
	$arr = $display_stadium->getClubs($_GET['stadium_id']);
}


if(!empty($_GET['trophy_id'])){
	$display_trophy = new TrophyDisplayer();
	$arr = $display_trophy->getClubs($_GET['trophy_id']);
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

<div>
	<table border="1px solid black" cellpadding="10px">
		<th>Football Club</th>
		<th>Year</th>
		<?php foreach ($arr as $items => $item) { ?>
			<tr>

				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['year']; ?></td>
			</tr>
		<?php } ?>
	</table>
</div>

</body>
</html>