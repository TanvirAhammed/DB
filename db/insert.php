<?php

function insertPerson($firstName,$lastName,$email,$gender){
   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "news";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO users(firstname, lastname, email,gender) VALUES ('".$firstName."','".$lastName."','".$email."','".$gender."')";
        
        $res = $conn->query($sql);//execute query
        if($res) { 
            echo 'new record inserted'; 
        }
        else { 
            echo "error occurred"; 
        }
    
    $conn->close();
}

?>