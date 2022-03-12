<?php

$hostDB = 'ec2-3-230-238-86.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'd54g8r1vhrh8v8';
$userDB = 'lwalqvxkfivigu';
$pwDB = '1f5098befd9e84749e22537c4153aae6df18a313e0a5d2dce94625eebdc2ac2d';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

 session_start();
if($connection){

}else{
 
}
?>
