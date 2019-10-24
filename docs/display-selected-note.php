<?php
    session_start();

    require 'database.php';

    if(empty($_POST['idToUpdate'])){
        exit(header('Location: ../index.php?idToDelete=empty'));
    }
    
    $db = new Database();
    $idToDisplay = mysqli_real_escape_string($db->getConnection(), $_POST['idToUpdate']);
    $result = $db->queryDatabase('SELECT * FROM Tasks WHERE id=' . $idToDisplay);
    $_SESSION['idToUpdate'] = $idToDisplay;
    $data = mysqli_fetch_assoc($result);

    if(!$data){
        exit(header('Location: ../index.php?idToDelete=dne'));
    }

    echo '<h1>' . $data['title'] . '</h1>';
    echo '<p>'  . $data['description'] . '</p>';
?>