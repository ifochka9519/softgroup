<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
	<title>Sumbol</title>
</head>
<body>
<?php require_once ("header.php"); ?>
	<?php
		$arr_big = [];
		$good = false;
		$smb = $_POST['sumb'];
		require_once("make_array_function.php");
		$arr = make_array();
		foreach ($arr as $key => $value){
			if(stripos($value['Name'], $smb)!== false) {
				$arr_big[$key] = $value;
				$good = true;
			}
		}
		if($good){
			require_once ("show_array.php");
			shows($arr_big);
		}

	?>

</body>
</html>
