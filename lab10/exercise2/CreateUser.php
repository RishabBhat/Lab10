<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "rishabbhat", "oPhah7Ae", "rishabbhat");

$user_id = $_POST["userName"];

if (strlen($user_id) > 0) {
    
    if ($mysqli->connect_errno) {
        echo("No connection");
        include 'CreateUser.html';
    }




    else {
        echo("Database is connected<br>");
        $query = "INSERT INTO Users (user_id) VALUES ('$user_id')";
        if ($result = $mysqli->query($query)) {
            echo("insertion worked!<br>");
        }
        else {
            echo("Username taken!");
            include 'CreateUser.html';
        }
    }
    
}

?>