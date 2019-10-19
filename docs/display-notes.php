<?php
    require 'database.php';

    $db = new Database();
    $result = $db->queryDatabase('SELECT * FROM Tasks');

    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '</tr>';
    }
?>