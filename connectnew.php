<?php

$hostname='localhost';
$user='root';
$password='';
$db='';


$con+mysqli_connect($hostname,$user,$password,$db);
if($con)
	echo 'connected sucessfully';
