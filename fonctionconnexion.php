<?php
require_once 'config.php' ;
function connect()
{
	try
	{
	//connexion
	$con= new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PW,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	return $con;
	}
	catch(PDOException $e)
	{
	echo "problème de connexion". $e->getMessage();
	return false;
	}
}
?>