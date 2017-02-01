<?php
include __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/ClubsDisplayer.php';


$project = new Project();
$project->loadDB();


$display_club = new ClubsDisplayer();
$arr = $display_club->getTrophy($_GET['club_id']);
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

<div>
    <table border="1px solid black" cellpadding="10px">
        <th>Football Cup</th>
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