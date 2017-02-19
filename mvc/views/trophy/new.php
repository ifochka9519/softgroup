<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='/assets/stylesheet/style.css'>
    <title>New Trophy</title>
</head>
<body>
<?php require_once(ROOT . "/views/header.php"); ?>
<h3><?php echo urldecode($e);?></h3>
<form action="<?php echo HOST ?>trophy/new" method="post">
    <label for="name">Name</label><br>
    <input type="text" name='name' id='name' value="<?php echo $name?>"><br>


    <label for="year">Founded</label><br>
    <input type="text" name='year' id='year' value="<?php echo $year?>"><br>


    <input name="add" type="submit" value="ADD">
</form>
</body>
</html>