<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "rishabbhat", "oPhah7Ae", "rishabbhat");


if ($mysqli->connect_errno) {
    echo("Connection failed");
}


else {
    echo "<html>";
    echo('<h2>' ."Posts". '</h2>');
    echo('<table>');
    echo('<tr>');
    echo('<tr scope = "col">' ." User".'</tr>');
    echo('<tr scope = "col">' ." Post ID".'</tr>');
    echo('<tr scope = "col">' ." Content".'</tr>');
    echo('</tr>');
    

    $user_id = $_POST["users"];


    $query = "SELECT * FROM Posts WHERE author_id = '$user_id'";

    if ($result = $mysqli->query($query)) {
        
            while($row = $result->fetch_assoc()) {
                echo('<tr>');
                echo('<td>'.$row["author_id"].'<td><td>'.$row["post_id"].'<td><td>'.$row["content"].'<td>');
                echo('<tr>');
            }
            echo('<table>');
        
            }
    echo "</html>";
    

}

?>