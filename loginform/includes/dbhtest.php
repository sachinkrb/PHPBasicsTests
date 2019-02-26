<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword="nihcas";
$dBName="loginformdb";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}