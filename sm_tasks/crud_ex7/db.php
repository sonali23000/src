<?php
// shell.hamk.fi >>> localhost
$servername = "localhost";
$username = "sonali23000";
$password = "PBNbklzo";
$dbname = "wp_sonali23000";

// create database connection
$conn = new mysqli($servername,$username,$password,$dbname);
// check connection

if($conn->connect_error) {

    die("Connection Failed:" . $conn->connect_error);
}






?>
