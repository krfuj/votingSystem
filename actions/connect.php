<?php

/* Connecting to the database. */
$con = new mysqli('localhost', 'root', '', 'votingsystem');

if ($con->connect_error) {

    die('Connection Failed : ' . $con->connect_error);
}


?>