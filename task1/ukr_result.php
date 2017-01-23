<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKR</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php require_once ("header.php"); ?>
    <?php
    require_once("make_array_function.php");
    $arr = make_array();
    $suma = 0;
    $tmp = 0;
    foreach ($arr as $value){
        if(($value['Country'] == 'Ukraine') || ($value['Country'] == 'Україна')){
            $suma += $value['Revenue'];
            $tmp++;
        }
    }
    if($tmp != 0){
        echo "<p id='ukrn'> Ukranian's money: ";
        echo (int)($suma/$tmp);
        echo "</p>";
    }
    else{
        echo "<p id='ukrn'>Sorry!</p>";
    }
    ?>

</body>
</html>
