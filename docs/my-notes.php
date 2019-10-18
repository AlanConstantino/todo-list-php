<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Notes</title>
    </head>
    <body>
        <h1>My Notes</h1>
        <form>
            <button type="submit" formaction="../index.php">Go back</button>
        </form>

        <div>
            <?php
                require 'display-notes.php';
                include 'info-messages.php';
            ?>
        </div>
    </body>
</html>