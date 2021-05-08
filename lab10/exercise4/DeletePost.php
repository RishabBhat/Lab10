<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "rishabbhat", "oPhah7Ae", "rishabbhat");



        if ($mysqli->connect_errno) {
            echo("Connection has failed");
            
        }
        else {
            $query = "SELECT * FROM Posts";

            if ($result = $mysqli->query($query)) {

                $count = mysqli_num_rows($result);

                if ($count > 0) {


                    echo("Deleted!! ");
                    foreach($_POST['delete'] as $entry) {

                        echo($entry." ");

                        $query = "DELETE FROM Posts WHERE post_id =".$entry;
                        if ($result = $db->query($query)) {


                        }
                        else {
                            echo("Issue completing query");


                      }
                 }
              }
             }
          }

?>