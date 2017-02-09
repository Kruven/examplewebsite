<?php
$page_title = 'Admin Panel';
include ('adminPanelBase.php');
include ('../mysqlConnect.php');

// SAVE CONTENT FORM SUBMIT  
if (isset($_POST['aboutUsSubmit'])) {
    // Get the new title and the text
    $newTitle = $_POST['title'];
    $newText = $_POST['text'];

    // Convert them to make them database compatible
    $newTitle = testInput($newTitle);
    $newTitle = mysqli_real_escape_string($newTitle);

    $newText = testInput($newText);
    $newText = mysqli_real_escape_string($newText);

    // Update the database with the new values
    $query = "UPDATE aboutUsContent SET title = '$newTitle', text = '$newText' WHERE id = 1";
    $result = $mysqli->query($query);
    if ($result) {
        echo '<script> alert("Database successfully updated."); </script>';
    }
    else {
        echo '<script> alert("Database could not be updated."); </script>';
    }
}

// Get the current title and text from the database 
$query = 'SELECT * FROM aboutUsContent';
$result = $mysqli->query($query);
$title = '';
$text = '';

// If the query was successful; get the data
if ($result) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $text = htmlspecialchars_decode($row['text']);
}

mysqli_close();
?> 

<div id="mainArea">
    <h1>About Us</h1>
    <fieldset class="adminFieldset">
        <legend>Manage Content</legend>
        <form method="post" class="adminPanelForm">
            <ul>
                <li>
                    <p>Title:</p>
                    <input type="text" name="title" id="title" value="<?php echo $title ?>">
                </li>
                <li>
                    <p>Text:</p>
                    <textarea name="text" id="text" rows="35" cols="70"><?php echo $text ?></textarea>
                </li>
                <li>
                    <input type="submit" name="aboutUsSubmit" name="Save" value="Submit" style="float: right; margin-right: 20px">
                </li>
            </ul>
        </form>
    </fieldset>
</div>

</body>
</html>