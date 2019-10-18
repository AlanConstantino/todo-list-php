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

        <form action="delete-note.php" method="POST">
            <input type="number" name="idToDelete" placeholder="Id To delete">
            <button type="submit">Delete</button>
        </form>

        <div>
            <?php
                include 'display-notes.php';
            ?>
        </div>
    </body>
</html>