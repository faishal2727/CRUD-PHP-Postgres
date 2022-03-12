<?php

$hostDB = '127.0.0.1';
$portDB = '5432';
$nameDB = 'mahasiswa';
$userDB = 'postgres';
$pwDB = '12345';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

 session_start();
if($connection){

}else{
 
}
?>