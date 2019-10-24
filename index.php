<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <title>Add A Note</title>
    </head>

    <body>
        <h1>Add to my todo list</h1>
        <form class="box" autocomplete="off" action="/docs/add-to-list.php" method="POST">
            <input id="title" type="text" name="title" placeholder="Title">
            <textarea name="description" placeholder="Description"></textarea>
            <button id="button" type="submit">Add</button>
            <button id="button" type="submit" formaction="docs/my-notes.php">View My Notes</button>
        </form>
        
        <div class="message">
            <p><?php include 'docs/info-messages.php'; ?></p>
        </div>

    </body>
</html>