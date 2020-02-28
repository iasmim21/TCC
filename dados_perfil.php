<?php
session_start();
include("conn.php");

$query = "SELECT * FROM cliente"; 
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() )
