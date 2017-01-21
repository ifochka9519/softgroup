<?php
function make_array(){
	$file = "myfile.txt";
	$big_arr = [];
	$handle = fopen($file, "r");
	$contents = fread($handle, filesize($file));
	fclose($handle);
	$arr = explode('.', $contents);

	foreach ($arr as $key => $value){
		$small_array = [];
		$tmp = explode(';', $value);

		foreach ($tmp as $value){
			$tmp2 = explode(':', $value);
			$small_array[trim($tmp2[0])] = trim($tmp2[1]);
		}
		$big_arr['club'.($key+1)] = $small_array;
	}

	return $big_arr;
}