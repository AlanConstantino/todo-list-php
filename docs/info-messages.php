<?php
    $full_url = "https://$_SERVER[HTTP_HOST] $_SERVER[REQUEST_URI]";

    if (strpos($full_url, 'fields=empty')){
        exit('One or more fields are empty.');
    }
    if (strpos($full_url, 'query=fail')){
        exit('Unsuccessful add to database.');
    }
    if (strpos($full_url, 'query=success')){
        exit('Successfully added to my list.');
    }
    if (strpos($full_url, 'delete=failure')){
        exit('Failed to delete note. Try again later.');
    }
    if (strpos($full_url, 'delete=success')){
        exit('Successfully deleted note.');
    }
    if (strpos($full_url, 'idToDelete=empty')){
        exit('You didn&rsquo;t specify a number.');
    }
?>