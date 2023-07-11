<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pbi_test";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
