<?php

$host = 'localhost';
$user ="root";
$pass="";
$db_name='blog';
$conn = new MySQLi($host, $user, $pass, $db_name);

if  ($conn->connect_error) {
    die('Databasr connection error:'.$conn->connect_error);

}else{
    // echo "Connected to database";
}

