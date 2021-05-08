<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "rishabbhat", "oPhah7Ae", "rishabbhat");


$author_id = $_POST["userName"];


$post_text = $_POST["postText"];

    
    if ($mysqli->connect_errno) {
        echo("Connection failed");
        include 'CreatePosts.html';
    }
    else {
        echo("Connected to database...posts uploaded<br>");
        $query = "SELECT user_id from Users WHERE user_id = '$author_id'";


        if ($results = $mysqli->query($query)) {
            if (mysqli_num_rows($results) > 0) {
                echo("User found and logged in<br>");

               


                $query = "INSERT INTO Posts (content, author_id) VALUES ('$post_text', '$author_id')";
                //$query = "INSERT INTO Users (user_id) VALUES ('$user_id')";
                if ($result = $mysqli->query($query)) {
                    echo("successfully inserted!<br>");
                }
                           }
            else {
                echo("Not able to find user <br>");
            }
        }
        else {
            echo("Post upload failed<br>");
        }
    }

?>