<?php
    require 'database.php';

    if(empty($_POST['title']) || empty($_POST['description'])){
        exit(header('Location: ../index.php?fields=empty'));
    }

    // prepare items for insertion into database
    $db = new Database();
    $title = mysqli_real_escape_string($db->getConnection(), $_POST['title']);
    $date = mysqli_real_escape_string($db->getConnection(), date('Y-m-d'));
    $description = mysqli_real_escape_string($db->getConnection(), $_POST['description']);

    // query database with a prepared statement then close after execution
    $sql = "INSERT INTO Tasks (title, date, description) VALUES (?, ?, ?)";
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param("sss", $title, $date, $description);
    $result = $stmt->execute();
    $stmt->close();
    
    if(!$result){
        exit(header('Location: ../index.php?query=fail'));
    } else{
        exit(header('Location: ../index.php?query=success'));
    }
?>