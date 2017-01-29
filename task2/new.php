<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="js/main.js"></script>
    <title>New</title>
</head>
<body>

<?php
    if(isset($_POST['club'])){
        include 'forms/new_club.php';
    }
    if(isset($_POST['stadium'])){
	    include 'forms/new_stadium.php';
    }
    if(isset($_POST['trophy'])){
        include 'forms/new_trophy.php';
    }
    if(isset($_POST['league'])){
        include 'forms/new_league.php';
    }
?>

</body>
</html>