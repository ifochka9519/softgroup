<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='/assets/stylesheet/style.css'>
    <title>FootBall</title>
</head>
<body>
<?php require_once(ROOT . "/views/header.php"); ?>


<div class = "divs" >
    <a href="<?php echo HOST ?>clubs" class="links">ALL CLUBS</a><br><br>
    <a href="<?php echo HOST ?>clubs/new" class="links">NEW CLUB</a>
</div>

<div class="divs" >
    <a href="<?php echo HOST ?>stadiums" class="links">ALL STADIUMS</a><br><br>
    <a href="<?php echo HOST ?>stadiums/new" class="links">NEW STADIUM</a>
</div>

<div class="divs">
    <a href="<?php echo HOST ?>leagues" class="links">ALL LEAGUES</a><br><br>
    <a href="<?php echo HOST ?>leagues/new" class="links">NEW LEAGUE</a>
</div>

<div class="divs">
    <a href="<?php echo HOST ?>trophy" class="links">ALL TROPHY</a><br><br>
    <a href="<?php echo HOST ?>trophy/new" class="links">NEW TROPHY</a>
</div>
<div class="trophy">
    <a href="<?php echo HOST ?>victories"><img src="<?php echo HOST ?>img/trophy.png" alt="" width="50px" height="60px"></a>
</div>

<img src="<?php echo HOST ?>img/img.png" alt="" height="70%" width="100%">
</body>
</html>