<?php
    require 'database.php';

    $db = new Database();
    $result = $db->queryDatabase('SELECT * FROM Tasks');
    
    // ugly... but it'll do for now...
    while($row = mysqli_fetch_assoc($result)){
        echo '<br>';
        echo $row['id'] . str_repeat('&nbsp;', 5);
        echo $row['title'] . str_repeat('&nbsp;', 20) . '<br>';
        echo str_repeat('&nbsp;', 13) . $row['description'] . str_repeat('&nbsp;', 20);
    }
?>