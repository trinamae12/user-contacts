<?php 

// env constants
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "test");

// connect to db
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

echo 'Hello world'; 

?>