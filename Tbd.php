<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";//including database name as a connection variable
$conn = new mysqli($servername, $username, $password, $dbname);
//below is query string
$qry = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";
$res = $conn->query($qry);//execute query
if($res)
{ echo "table created successfully"; }
else
{ echo "error occurred"; }
$conn->close();
?>