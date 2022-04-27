<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'root';

$connection = new mysqli($serverName, $userName, $password);

if (!$connection) {

    die('Connection failed ' . mysqli_connect_error());
}

echo 'Connection successfull!';

$connection->close();

$dataaseName = 'exampleDatabase';
$databaseConnection = new mysqli($serverName, $userName, $password);



$createDatabaseSql = 'CREATE DATABASE example Database';

if (!databaseConnection->query($createDatabaseSql)) {

die('Database was not created');
}
echo 'Databas created successfully!';
}


$createPostsTableSql = 'CREATE TABLE posts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,



