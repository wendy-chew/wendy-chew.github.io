<?php 
$con =mysqli_connect('localhost','wenderdq_cheww', 'W3ndy241100');

mysqli_select_db($con,'wenderdq_portfolio');

if(!$con){
    die("Connection error :".mysqli_connect_error);
}

?>