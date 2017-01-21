<link rel="stylesheet" href="styles/style.css">
<?php
$new = [];
$new['Name'] = ':'.$_POST['name'].';';
$new['Country'] = ':'.$_POST['country'].';';
$new['Founded'] = ':'.$_POST['founded'].';';
$new['President'] = ':'.$_POST['president'].';';
$new['Revenue'] = ':'.$_POST['revenue'].';';
$new['Honours'] = ':'.$_POST['honours'];
$handle = fopen("myfile.txt", "a") or die ("Cannot open file!");
fwrite($handle, ".");
foreach ($new as $key => $value){
	$key = PHP_EOL.$key;
	fwrite($handle, "$key");
	fwrite($handle, "$value");
}
fclose($handle);
require_once ("header.php");
?>
<a href="add.php" id="addd">ADD ONE MORE!</a>