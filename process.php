<?php

// connect to the database
$conn = mysqli_connect('localhost:3306', 'root', '', 'test_ajax');

echo 'Processing...';

// Check for GET variable
if(isset($_GET['name'])) {
    echo "GET: Your name is " . $_GET['name'];
}

// Check for POST variable
if(isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $query = "INSERT INTO users(name) VALUE('$name')";

    if(mysqli_query($conn, $query)) {
        echo 'User added...';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

