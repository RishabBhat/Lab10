<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "rishabbhat", "oPhah7Ae", "rishabbhat");



if ($mysqli->connect_errno) {
    echo("Connection failed");
}
else {
    echo "<html>";
  
    echo('<table>');
    echo('<tr>');
    
    echo('<th scope = "col">' ."Users".'</th>');
    echo('</tr>');
    
    $query = "SELECT user_id FROM Users";

    if ($result = $mysqli->query($query)) {
        
        while($row = $result->fetch_assoc()) {
            echo('<tr>');
            		echo('<th scope = "row">'.$counter.'</th>');
            echo('<td>'.$row["user_id"].'<td>');
            echo('<tr>');
            
        }
        echo('<table>');
    }
    
    
echo "</html>";
}


?>