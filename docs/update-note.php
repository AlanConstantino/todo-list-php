<?php
    session_start();
    $idToUpdate = $_SESSION['idToUpdate'];
    session_destroy();

    require 'database.php';

    function update($sqlStatement, $contentToUpdate, $db){
        if($contentToUpdate){
            $result = $db->queryDatabase($sqlStatement);
            return $result;
        } else{
            return False;
        }
    }

    // if both are empty, redirect to index with error message
    if(empty($_POST['updatedTitle']) && empty($_POST['updatedDescription'])){
        exit(header('Location: ../index.php?updated=empty'));
    }

    // check if either variable is empty
    $db = new Database();
    $updatedTitle = (empty($_POST['updatedTitle']) ? False : mysqli_real_escape_string($db->getConnection(), $_POST['updatedTitle']));
    $updatedDescription = (empty($_POST['updatedDescription']) ? False : mysqli_real_escape_string($db->getConnection(), $_POST['updatedDescription']));

    // sql statements
    $sqlTitleUpdate = 'UPDATE Tasks SET title="' . $updatedTitle . '" WHERE id=' . $idToUpdate;
    $sqlDescriptionUpdate = 'UPDATE Tasks SET description="' . $updatedDescription . '" WHERE id=' . $idToUpdate;

    // actually update
    $updatedTitleStatus = update($sqlTitleUpdate, $updatedTitle, $db);
    $updatedDescriptionStatus = update($sqlDescriptionUpdate, $updatedDescription, $db);
    
    if($updatedTitleStatus || $updatedDescriptionStatus){
        exit(header('Location: ../index.php?update=success'));
    }
?>