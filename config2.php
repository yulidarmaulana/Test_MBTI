<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='pesbuk';
$koneksi = mysqli_connect("localhost","root","","mbti");
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($db->connect_error) {
    die('Connect Error (' . $db->connect_errno . ') '
            . $db->connect_error);
}