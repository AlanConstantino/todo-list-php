<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add</title>
    </head>

    <body>
        <h1>Add to my todo list</h1>
        <form autocomplete="off" action="addToList.php" method="POST">
            <input type="text" name="title" placeholder="Title">
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit">Add</button>
        </form>

        <!-- will seperate error handling from HTML later -->
        <?php
            $full_url = "https://$_SERVER[HTTP_HOST] $_SERVER[REQUEST_URI]";
            if (strpos($full_url, 'empty')){
                exit('<p>One or more fields are empty.</p>');
            }
        ?>

    </body>
</html>