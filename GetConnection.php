<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "db_education";
    $username = "root";
    $password = "marleess771";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
