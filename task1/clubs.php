<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Clubs</title>
</head>
<body>
<?php require_once ("header.php"); ?>
<br>
<br>
<form method='post' action='sort_money.php'>
    <input type='submit' value='SORT ALL CLUBS' name='sort_btn' class="btn">
</form>
<br>
<form action="ukr_result.php" method="post">
    <input type='submit' value='UKRANIAN CLUBS' name='ukr_btn' class="btn">
</form>
<?php
require_once("make_array_function.php");
$big_arr = make_array();
require_once("show_array.php");
shows($big_arr);
?>

</body>
</html>

