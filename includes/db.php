<?php

$conn = mysqli_connect("localhost", "root", "", "dreamlights");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>