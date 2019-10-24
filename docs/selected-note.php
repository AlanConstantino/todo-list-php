<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <title>Selected Note</title>
</head>
<body>
    <h1>Current Note</h1>
    <div class="note">
        <?php include 'display-selected-note.php'; ?>
    </div>
    
    <h1>Updated Note</h1>
    <form class="box" autocomplete="off" action="update-note.php" method="POST">
        <input id="title" type="text" name="updatedTitle" placeholder="Update title of note above">
        <textarea name="updatedDescription" placeholder="Update description of the note above"></textarea>   
        <button id="button" type="submit">Update</button>   
        <button id="button" type="submit" formaction="my-notes.php">Go back</button>
    </form>
</body>
</html>