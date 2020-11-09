<?php
$servername = "localhost";
$username = "root";
$password = "";
try {// set the PDO error mode to exception
$conn = new PDO("mysql:host=$servername", $username, $password); //PDO connection object
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE news"; //query string
$conn->exec($sql); //query execute
echo "Database created successfully<br>";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
$conn = null; //close PDO connection object
?>