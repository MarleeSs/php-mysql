<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comments(name, email, comment) VALUES ('Marleess','coba@test.com', 'hi')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;
