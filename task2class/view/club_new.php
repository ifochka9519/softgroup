<?php
require_once __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/StadiumDisplayer.php';
require_once __DIR__ . '/../project/LeagueDisplayer.php';
require_once __DIR__ . '/../project/PersoneDisplayer.php';
require_once __DIR__ . '/../project/CityDisplayer.php';




$project = new Project();
$project->loadDB();



$display_stadium = new StadiumDisplayer();
$display_stadium->makeArray();

$display_league = new LeagueDisplayer();
$display_league->makeArray();

$display_persone = new PersoneDisplayer();
$display_persone->makeArray();

$display_city = new CityDisplayer();
$display_city->makeArray();




?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="add.php" method="post">


    <label for="name">Name</label><br>
    <input type="text" name='name' id='name'><br>
    <label>City</label><br>
    <select name="city">
        <option label="city" selected></option>
        <option value="<?php echo($display_city->cityArr[0]->getId()); ?>"><?php echo($display_city->cityArr[0]->getName()); ?></option>
        <option value="<?php echo($display_city->cityArr[1]->getId()); ?>"><?php echo($display_city->cityArr[1]->getName()); ?></option>
        <option value="<?php echo($display_city->cityArr[2]->getId()); ?>"><?php echo($display_city->cityArr[2]->getName()); ?></option>
        <option value="<?php echo($display_city->cityArr[3]->getId()); ?>"><?php echo($display_city->cityArr[3]->getName()); ?></option>
        <option value="<?php echo($display_city->cityArr[4]->getId()); ?>"><?php echo($display_city->cityArr[4]->getName()); ?></option>
    </select><br>


    <label for="founded">Founded</label><br>
    <input type="text" name='founded' id='founded'><br>
    <label for="president">President</label><br>


    <select name="president">
        <option label="president" selected></option>
        <option value="<?php echo($display_persone->personeArr[0]->getId()); ?>"><?php echo($display_persone->personeArr[0]->getName()); ?></option>
        <option value="<?php echo($display_persone->personeArr[1]->getId()); ?>"><?php echo($display_persone->personeArr[1]->getName()); ?></option>
        <option value="<?php echo($display_persone->personeArr[2]->getId()); ?>"><?php echo($display_persone->personeArr[2]->getName()); ?></option>
        <option value="<?php echo($display_persone->personeArr[3]->getId()); ?>"><?php echo($display_persone->personeArr[3]->getName()); ?></option>
        <option value="<?php echo($display_persone->personeArr[4]->getId()); ?>"><?php echo($display_persone->personeArr[4]->getName()); ?></option>
        <option value="<?php echo($display_persone->personeArr[5]->getId()); ?>"><?php echo($display_persone->personeArr[5]->getName()); ?></option>
    </select><br>

    <label for="revenue">Revenue</label><br>
    <input type="text" name='revenue' id='revenue'><br>
    <label for="stadium">Stadium</label><br>
    <select name="stadium">
        <option label="stadium"  selected></option>
        <option value="<?php echo($display_stadium->stadiumsArr[0]->getId()); ?>"><?php echo($display_stadium->stadiumsArr[0]->getName()); ?></option>
        <option value="<?php echo($display_stadium->stadiumsArr[1]->getId()); ?>"><?php echo($display_stadium->stadiumsArr[1]->getName()); ?></option>
        <option value="<?php echo($display_stadium->stadiumsArr[2]->getId()); ?>"><?php echo($display_stadium->stadiumsArr[2]->getName()); ?></option>
    </select><br>


    <label for="league">League</label><br>

    <select name="league">
        <option label="league" selected></option>
        <option value="<?php echo($display_league->leaguesArr[0]->getId()); ?>"><?php echo($display_league->leaguesArr[0]->getName()); ?></option>
        <option value="<?php echo($display_league->leaguesArr[1]->getId()); ?>"><?php echo($display_league->leaguesArr[1]->getName()); ?></option>
        <option value="<?php echo($display_league->leaguesArr[2]->getId()); ?>"><?php echo($display_league->leaguesArr[2]->getName()); ?></option>
    </select>
    <br><br>

    <input type="submit" value='Add new club' id='newclub' name='newclub'>


</form>
</body>
</html>