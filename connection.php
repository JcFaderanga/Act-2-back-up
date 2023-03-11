<?php

$dbhost = "sql205.epizy.com";
$dbuser = "epiz_33759027";
$dbpass = "Nxyv2YlSPj";
$dbname = "epiz_33759027_Activity2";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>