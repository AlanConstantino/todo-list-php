<?php
    include 'database.php';

    // if fields are empty, go back to index.php
    if(empty($_POST['title']) || empty($_POST['description'])){
        exit(header('Location: index.php?empty'));
    }

    $db = new Database();
    $title = mysqli_real_escape_string($db->getConnection(), $_POST['title']);
    $date = mysqli_real_escape_string($db->getConnection(), date('Y-m-d'));
    $description = mysqli_real_escape_string($db->getConnection(), $_POST['description']);

    $sql = "INSERT INTO Tasks (title, date, description) VALUES (?, ?, ?)"; // sql query
    $stmt = $db->getConnection()->prepare($sql); // prepare statement
    $stmt->bind_param("sss", $title, $date, $description); // bind parameters
    $result = $stmt->execute(); // execute query
    
    if(!$result){
        echo 'Failed to store note to database.';
    } else{
        echo 'Successfully stored note to database.';
    }

    $stmt->close(); // close
    
    // print everything from 'Tasks' table

    // $result = $db->queryDatabase('SELECT * FROM Tasks');
    // echo '<br>';
    // while($row = mysqli_fetch_assoc($result)){
    //     echo '<br>';
    //     print_r($row);
    // }
?>