<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='/assets/stylesheet/style.css'>
    <title>Clubs</title>
</head>
<body>
<?php require_once (ROOT."/views/header.php"); ?>
<form action="<?php echo HOST ?>clubs/search" method="get">
    <input type="text" name="sumbol">
    <input type="submit" class="links" value="SEARCH">
</form>
<table border="1px solid black" cellpadding="10px" >
    <th class="tables">#</th>
    <th class="tables"><a href="<?php echo HOST ?>clubs/sort/clubs.name"class="links">Football Club</a></th>
    <th class="tables"><a href="<?php echo HOST ?>clubs/sort/cities.name"class="links">City</a></th>
    <th class="tables"><a href="<?php echo HOST ?>clubs/sort/clubs.year"class="links">Year</a></th>
    <th class="tables">Trophy</th>
    <th class="tables">Delete Club</th>



<?php $i = 1; foreach ($clubsList as $clubsItem): ?>
<tr class="tables">
	<td><?php echo $i++ ?></td>
	<td><?php echo $clubsItem['name'] ?></td>
	<td><?php echo $clubsItem['city'] ?></td>
	<td><?php echo $clubsItem['year'] ?></td>
   <td><a href="<?php echo HOST ?>clubs/<?php echo $clubsItem['id'] ?>/trophy">TROPHY</a></td>
   <td><a href="<?php echo HOST ?>clubs/<?php echo $clubsItem['id'] ?>/delete">DELETE</a></td>
</tr>

<?php  endforeach; ?>
</table>

</body>
</html>