<?php

$conn = new mysqli('localhost', 'root', '', 'sportsclub');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>