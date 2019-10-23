<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <title>Selected Note</title>
</head>
<body>
    <div class="note">
        <?php include 'display-selected-note.php'; ?>
    </div>

    <form class="box" autocomplete="off" action="update-note.php" method="POST">
        <input type="text" name="updatedTitle" placeholder="Updated title">
        <textarea name="updatedDescription" placeholder="Updated description"></textarea>
        <button type="submit">Update</button>
        <button type="submit" formaction="my-notes.php">Go back</button>
    </form>
</body>
</html>