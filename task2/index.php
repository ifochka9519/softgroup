<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/main.js"></script>
	<title>Football</title>
</head>
<body>
    <form action="index.php" method="post">
        <input name="clubs" type="submit" value="ALL CLUBS">
        <input name="league" type="submit" value="ALL LEAGUES">
        <input name="trophy" type="submit" value="ALL TROPHIES">
        <input name="stadium" type="submit" value="ALL STADIUMS">
    </form>

	<?php
	include 'connect.php';
	include 'club.class.php';
	include 'league.class.php';
	include 'trophy.class.php';
	include 'stadium.class.php';
	$club = new Club();
	$league = new League();
	$trophy = new Trophy();
	$stadium = new Stadium();
	if(isset($_POST['clubs'])) {
	    echo ("<div>
        <form action=\"searches_result.php\" onsubmit=\"return searching();\" method=\"post\" name=\"sear\" id=\"searchs\">
            <input type=\"text\" name=\"sumb\" id=\"sumb\"><br><br>
            <input  type=\"submit\" name=\"search_club\" id=\"srch\" value=\"Search club\">
        </form>
    </div>");
	    echo ("<form method='post' action='sort.php'><input name='sort_club' type='submit' value='SORT'></form>");
		$club->answ = '';
		$stmt = $dbh->query($club->show_all_clubs());
		$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Club');
		foreach ($arr as $key => $value) {
			$club->answ = $club->answ.$value . "<br>";
			$club->answ = $club->answ."<br>";
		}
	}
	if(isset($_POST['league'])) {
		echo ("<div>
        <form action=\"searches_result.php\" onsubmit=\"return searching();\" method=\"post\" name=\"sear\" id=\"searchs\">
            <input type=\"text\" name=\"sumb\" id=\"sumb\"><br><br>
            <input  type=\"submit\" name=\"search_league\" id=\"srch\" value=\"Search league\">
        </form>
    </div>");
		echo ("<form method='post' action='sort.php'><input name='sort_league' type='submit' value='SORT'></form>");
		$league->answ = '';
		$stmt = $dbh->query($league->show_all_league());
		$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'League');
		foreach ($arr as $key => $value) {
			$league->answ = $league->answ.$value . "<br>";
			$league->answ = $league->answ."<br>";
		}
	}
	if(isset($_POST['stadium'])) {
		echo ("<div>
        <form action=\"searches_result.php\" onsubmit=\"return searching();\" method=\"post\" name=\"sear\" id=\"searchs\">
            <input type=\"text\" name=\"sumb\" id=\"sumb\"><br><br>
            <input  type=\"submit\" name=\"search_stadium\" id=\"srch\" value=\"Search stadium\">
        </form>
    </div>");
		echo ("<form method='post' action='sort.php'><input name='sort_stadium' type='submit' value='SORT'></form>");
		$stadium->answ = '';
		$stmt = $dbh->query($stadium->show_all_stadium());
		$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Stadium');
		foreach ($arr as $key => $value) {
			$stadium->answ = $stadium->answ.$value . "<br>";
			$stadium->answ = $stadium->answ."<br>";
		}
	}
	if(isset($_POST['trophy'])) {
		echo ("<div>
        <form action=\"searches_result.php\" onsubmit=\"return searching();\" method=\"post\" name=\"sear\" id=\"searchs\">
            <input type=\"text\" name=\"sumb\" id=\"sumb\"><br><br>
            <input  type=\"submit\" name=\"search_trophy\" id=\"srch\" value=\"Search trophy\">
        </form>
    </div>");
		echo ("<form method='post' action='sort.php'><input name='sort_trophy' type='submit' value='SORT'></form>");
		$trophy->answ = '';
		$stmt = $dbh->query($trophy->show_all_trothy());
		$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Trophy');
		foreach ($arr as $key => $value) {
			$trophy->answ = $trophy->answ.$value . "<br>";
			$trophy->answ = $trophy->answ."<br>";
		}
	}
	if($club->answ != ''){
	    echo $club->answ;
	    $club->answ = '';
    }
	if($league->answ != ''){
		echo $league->answ;
		$league->answ = '';
	}
	if($stadium->answ != ''){
		echo $stadium->answ;
		$stadium->answ = '';
	}
	if($trophy->answ != ''){
		echo $trophy->answ;
		$trophy->answ = '';
	}
	?>

    <form action="new.php" method="post" name="add">
        <input name="club" type="submit" value="NEW CLUB">
        <input name="league" type="submit" value="NEW LEAGUE">
        <input name="trophy" type="submit" value="NEW TROPHY">
        <input name="stadium" type="submit" value="NEW STADIUM">
    </form>
</body>
</html>