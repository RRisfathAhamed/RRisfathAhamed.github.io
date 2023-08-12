<?php
function connectDatabase() {
    // Database configuration
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "portfolio_data";

    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>

