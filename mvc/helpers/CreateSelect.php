<?php


class CreateSelect
{
	public static function createSelectes($name, $arr)
	{
		$str = '<select name = '.$name.' >';

		foreach ($arr as $value){
			//$str .= $value['id'];
			//$str .= $value['name'];
  			$str .="<option value =".$value['id'].">".$value['name']."</option>";
		}

		$str .= '</select><br>';
		return $str;
	}
}