<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Football</title>
</head>
<body>
<form action="view/clubs_view.php" style="float: left; padding-right: 5px">
	<input type="submit" value="ALL CLUBS" >
</form>


<form action="view/league_view.php" style="float: left; padding-right: 5px">
    <input type="submit" value="ALL LEAGUES">
</form>

<form action="view/stadium_view.php" style="float: left; padding-right: 5px">
    <input type="submit" value="ALL STADIUMS" >
</form>

<form action="view/trophy_view.php" >
    <input type="submit" value="ALL TROPHY">
</form>


<form action="view/club_new.php" style="float: left; padding-right: 5px">
    <input type="submit" value="NEW CLUB">
</form>

<form action="view/league_new.php" style="float: left; padding-right: 5px">
    <input type="submit" value="NEW LEAGUE">
</form>

<form action="view/stadium_new.php" style="float: left; padding-right: 5px" >
    <input type="submit" value="NEW STADIUM">
</form>

<form action="view/trophy_new.php">
    <input type="submit" value="NEW TROPHY">
</form>



</body>
</html>

 <?php
/*include 'project/Project.php';

//include_once 'project/clubsDisplayer.php';
include 'project/leagueDisplayer.php';


$p = new Project();
$p->loadDB();


$pd = new clubsDisplayer();
$pd->makeArray();
var_dump($pd->clubsArr);



$pds = new leagueDisplayer();
$pds->makeArray();
var_dump($pds->leaguesArr);*/