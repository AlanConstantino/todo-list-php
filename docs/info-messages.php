<?php
    $full_url = "https://$_SERVER[HTTP_HOST] $_SERVER[REQUEST_URI]";

    if (strpos($full_url, 'empty')){
        exit('<p>One or more fields are empty.</p>');
    }
    if (strpos($full_url, 'query=fail')){
        exit('<p>Unsuccessful add to database.</p>');
    }
    if (strpos($full_url, 'query=success')){
        exit('<p>Successfully added to my list.</p>');
    }
    if (strpos($full_url, 'delete=failure')){
        exit('<p>Failed to delete note. Try again later.</p>');
    }
    if (strpos($full_url, 'delete=success')){
        exit('<p>Successfully deleted note.</p>');
    }
?>