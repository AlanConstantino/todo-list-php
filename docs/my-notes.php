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

        <table>
            <thead align="left">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                </tr>
                <tbody>
                    <?php include 'display-notes.php'; ?>
                </tbody>
            </thead>
        </table>
    </body>
</html>