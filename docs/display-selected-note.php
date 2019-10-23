<?php
    session_start();

    require 'database.php';

    $db = new Database();
    $idToDisplay = mysqli_real_escape_string($db->getConnection(), $_POST['idToUpdate']);
    $result = $db->queryDatabase('SELECT * FROM Tasks WHERE id=' . $idToDisplay);
    $_SESSION['idToUpdate'] = $idToDisplay;
    $data = mysqli_fetch_assoc($result);

    echo '<h2>' . $data['id'] . '</h2>';
    echo '<h1>' . $data['title'] . '</h1>';
    echo '<p>'  . $data['description'] . '</p>';
?>