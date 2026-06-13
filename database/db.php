<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "emotion_ai";

$conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed.");
    }

    echo "Database connected successfully!";

?>