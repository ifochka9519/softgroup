<?php
include('config\configuration.php');
	try{
		$dbh = new PDO($host, $user, $password);
	}
	catch (PDOException $e){
		echo ($e->getMessage());
}
