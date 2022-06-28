<?php
    $conn = mysqli_connect('localhost:3306', 'root', '', 'test_ajax');

    $query = "select * from users";

    $result = mysqli_query($conn, $query);

    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo json_encode($users);

