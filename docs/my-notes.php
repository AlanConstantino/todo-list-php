<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <title>My Notes</title>
    </head>
    <body>
        <h1>My Notes</h1>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
                <tbody>
                    <?php include 'display-notes.php'; ?>
                </tbody>
            </thead>
        </table>
        <form class="box" action="delete-note.php" method="POST">
            <button type="submit" formaction="../index.php">Go back</button>
            <input type="number" name="idToDelete" placeholder="Id To delete">
            <button type="submit">Delete</button>
        </form>

        <form class="box2" action="selected-note.php" method="POST">
            <input type="number" name="idToUpdate" placeholder="Id To update">
            <button type="submit">Update</button>
        </form>
    </body>
</html>