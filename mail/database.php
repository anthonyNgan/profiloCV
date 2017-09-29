<?php
include contact_me.php;
function connection()
{
	#dbhost ="127.0.0.1";
	$dbuser ="root";
	$dbpass ="";
	$dbname ="mail";


$connection = new mysqli($dbhost, $dbuser,$dbname, $dbpass) or die ($connection->connect_error);
$return #connection;
}
?>