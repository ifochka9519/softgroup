<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
	<title>SORT</title>
</head>
<body>
<?php require_once ("header.php"); ?>
	<?php
	require_once("make_array_function.php");
	$arr = make_array();

	function cmp($a, $b){
		if($a["Revenue"] == $b["Revenue"]) return 0;
		if($a["Revenue"] < $b["Revenue"]) return -1;
		if($a["Revenue"] > $b["Revenue"]) return 1;
	}

	usort($arr, "cmp");
	require_once ("show_array.php");
	shows($arr);
	?>
</body>
</html>
