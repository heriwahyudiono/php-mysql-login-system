<?php

function openConnection()
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "login";

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
