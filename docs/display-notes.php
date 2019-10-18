<?php
    require 'database.php';

    $db = new Database();
    $result = $db->queryDatabase('SELECT * FROM Tasks');

    echo '<br>';
    echo '<strong>id</strong>' . str_repeat('&nbsp;', 5);
    echo '<strong>title</strong>' . str_repeat('&nbsp;', 10);
    echo '<strong>Description</strong>' . '<hr>';
    
    // gross... but it'll do for now...
    // may switch this to a HTML table later on
    while($row = mysqli_fetch_assoc($result)){
        echo '<br>';
        echo $row['id'] . str_repeat('&nbsp;', 5);
        echo '<strong>' . $row['title'] . '</strong>' . str_repeat('&nbsp;', 20) . '<br>';
        echo str_repeat('&nbsp;', 26) . $row['description'] . str_repeat('&nbsp;', 20);
        echo '<hr>';
    }
?>