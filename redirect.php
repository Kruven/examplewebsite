<?php
// Redirect the user to the specified page
function redirect($page) {
    // Create the url
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    // Remove any unwanted slashes
    if ((substr($url, -1) == '/') OR (substr($url, -1) == '\\')) 
    {
        $url = substr ($url, 0, -1);
    }
    // Add the home page
    $url .= '/' . $page;
    // Delete the buffer
    ob_end_clean();
    // Redirect the user
    header("Location: $url");
    // Exit this script
    exit();
}
?>