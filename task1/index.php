<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/main.js"></script>
    <title>Task1</title>
</head>
<body>
    <?php require_once ("header.php"); ?>
    <div id="form1">
        <form action="clubs.php" method="post">
            <input type="submit" name="show" id="show" value="ALL CLUBS">
        </form>
    </div>
    <div id="form3" >
        <form action="searches_result.php" onsubmit="return searching();" method="post" name="sear" id="searchs">
            <input type="text" name="sumb" id="sumb"><br>
            <input  type="submit" name="add" id="srch" value="Search club">
        </form>
    </div>
    <div id="form2">
        <form action="adding_form.php" method="post">
            <input type="submit" name="add" id="add" value="ADD NEW CLUB">
        </form>
    </div>
</body>
</html>