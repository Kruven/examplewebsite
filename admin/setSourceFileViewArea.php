<?php
// Sets the contents of the source file view area in the source panel
if(isset($_POST['directory']) && !empty($_POST['directory'])) {

    $directory = $_POST['directory'];

    echo substr(highlight_file($directory), 0, -1);  
}
?>