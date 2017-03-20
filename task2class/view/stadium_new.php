<?php
require_once __DIR__ . '/../project/Project.php';

require_once __DIR__ . '/../project/CityDisplayer.php';


$project = new Project();
$project->loadDB();


$display_city = new CityDisplayer();
$display_city->makeArray();


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stadium_new</title>
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


    <label for="year">Founded</label><br>
    <input type="text" name='year' id='year'><br>

    <label for="capacity">Capacity</label><br>
    <input type="text" name='capacity' id='capacity'><br>
    <br><br>

    <input type="submit" value='Add new stadium' id='newstadium' name='newstadium'>


</form>
</body>
</html>