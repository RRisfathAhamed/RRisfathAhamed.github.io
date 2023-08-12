
<?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio_data";

    // Create a new connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>