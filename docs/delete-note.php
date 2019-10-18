<?php
    require 'database.php';

    if(empty($_POST['idToDelete'])){
        exit(header('Location: ../index.php?idToDelete=empty'));
    }

    $db = new Database();
    $idToDelete = mysqli_real_escape_string($db->getConnection(), $_POST['idToDelete']);
    $sql = "DELETE FROM Tasks WHERE id=" . $idToDelete;
    $result = $db->queryDatabase($sql);

    if(!$result){
        exit(header('Location: ../index.php?delete=failure'));
    } else{
        exit(header('Location: ../index.php?delete=success'));
    }
?>