<?php 
    require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $sql = "SELECT * FROM users";
        $result =  $conn->query($sql);

        //$data = [];
        if($result) {
            while ($row = $result->fetch_assoc()) {
                //$data[] = $row;
                echo $row['name'] . '-' . $row['contact'] . '-' . $row['email'] . '<br/>';
            }
        }
    }
?>