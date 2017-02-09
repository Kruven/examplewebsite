<?php
$page_title = 'Source';
include ('adminPanelBase.php');

// Get all the folders in the main directory
$mainFolderDirectories = glob($_SERVER['DOCUMENT_ROOT']."/*", GLOB_ONLYDIR);
$mainFolderNames = array();
foreach ($mainFolderDirectories as $d) {
    $directories = explode("/", $d);
    $mainFolderNames[] = $directories[sizeof($directories) - 1];
}

// Get all the files in the main directory
$mainFileDirectories = glob($_SERVER['DOCUMENT_ROOT']."/*.*");
$mainFiles = array();
foreach ($mainFileDirectories as $d) {
    $directories = explode("/", $d);
    $mainFiles[] = $directories[sizeof($directories) - 1];
}

/* Folder class - Represents a folder in the source code
        directory - The full location of this folder
        parentFolder - The folder that contains this folder
 
        folders - Every folder inside this folder
        folderNames - The name of every folder inside this folder
        files - Every file inside this folder
*/
class Folder {
    public $directory;
    public $parentFolder;

    public $folders = array();
    public $folderNames = array();
    public $files = array();
}

// Create the main directory folder
$mainDirectory = new Folder();
$mainDirectory->directory = $_SERVER['DOCUMENT_ROOT']."/";
$mainDirectory->folderNames = $mainFolderNames;
$mainDirectory->files = $mainFiles;

// Contains the directory for every file
$allFileDirectories = array();

// Go through every folder in the main directory and set the contents of it
for ($x = 0; $x < sizeof($mainDirectory->folderNames); $x++) {
    $mainDirectory->folders[] = new Folder();
    setFoldersContents($mainDirectory->folders[$x], $mainDirectory->directory . $mainDirectory->folderNames[$x] . "/");
}

// Collects all the folders and files within a folder and saves them
function setFoldersContents($folder, $directory) {
    // Get all the folders
    $folderDirectories = glob($directory."*", GLOB_ONLYDIR);
    $folderNames = array();
    foreach ($folderDirectories as $d) {
        $directories = explode("/", $d);
        $folderNames[] = $directories[sizeof($directories) - 1];
    }

    // Get all the files
    $fileDirectories = glob($directory."*.*");
    $files = array();
    foreach ($fileDirectories as $d) {
        $directories = explode("/", $d);
        $files[] = $directories[sizeof($directories) - 1];
    }

    // Save the data
    for ($x = 0; $x < sizeof($folderDirectories); $x++) {
        $folder->folders[] = new Folder();
    }
    $folder->directory = $directory;
    $folder->parentFolder = $folder;
    $folder->folderNames = $folderNames;
    $folder->files = $files;

    // Set the contents of the folders within this folder as well
    for ($x = 0; $x < sizeof($folder->folders); $x++) {
        setFoldersContents($folder->folders[$x], $directory . $folder->folderNames[$x] . "/");
    }
}

/* Checks to see if a string ends with another string
        haystack - String to check
        needle - The potential ending string
*/
function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

// Returns a <li> element for every folder or file within a folder
function getFoldersContents($folder) {
    global $allFileDirectories;
    static $fileId = 0;
    echo '<ul>';

    // Go through every folder within this folder
    for ($x = 0; $x < sizeof($folder->folderNames); $x++) {
        // Create a <li> element for the folder
        echo '<li class="folder"><h1>' . $folder->folderNames[$x] . '</h1>';
        // Get all the contents of this folder
        getFoldersContents($folder->folders[$x]);
        echo '</li>';
    }

    // Go through every file within this folder
    foreach ($folder->files as $f) {
        // If it is of a clickable type; Create a <li> of the "file" class
        if (endsWith($f, ".html") || endsWith($f, ".php") || endsWith($f, ".js") || endsWith($f, ".css")) {
            echo '<li id="' . $fileId .'" class="file">' . $f . '</li>';
        }
        // Else; Create a normal <li>
        else {
            echo '<li id="' . $fileId .'">' . $f . '</li>';
        }
        $fileId++;

        // Add this file to the array of all file locations
        $allFileDirectories[] = $folder->directory . $f;
    }
    echo '</ul>';
}
?> 

<div id="sourcePanel">
    <?php
        // Get every folder and file in the main directory and create a list of them
        getFoldersContents($mainDirectory);
    ?>
</div>

<!-- The container for viewing the source code of a file -->
<ul id="sourceFileViewContainer">
    <li id="sourceFileViewArea">
        <ul>
            <li id="fileSource"></li>
            <li><img src="/includes/images/crossButton.png" alt="Exit" id="exitButton"></li>
        </ul>
    </li>
</ul>

<script>
    <?php
        // Create a javascript array for every file's location
        $js_allFileDirectories = json_encode($allFileDirectories);
        echo "var allFileDirectories = ". $js_allFileDirectories . ";\n";
    ?>
</script>

<script>
    // Close every folder's <ul>
    $(".folder").each(function () {
        $(this).children("ul").hide();
        $(this).addClass("closed");
    });

    // Add a click event to every "folder" to show/hide the contents of it
    $(".folder h1").click(function () {
        var parent = $(this).parent();
        if (parent.hasClass("closed")) {
            parent.children("ul").show();
            parent.removeClass("closed");
        }
        else {
            parent.children("ul").hide();
            parent.addClass("closed");
        }
    });

    // Add a click event to every li that has the "file" class to show the source code of it
    $("li").click(function () {
        if ($(this).hasClass("file")) {
            // Get the id of this file
            var id = parseInt($(this).attr("id"));

            // Get the source code viewing area
            var area = $("#fileSource");

            $.ajax({
                // The url containing the php code we want to run
                url: 'setSourceFileViewArea.php',
                // The data we want to send to the url
                data: {
                    directory: allFileDirectories[id]
                },
                // The type of request to use
                type: 'post',
                // The function to run if the request is successful
                success: function (result) {
                    area.html(result);
                    $("#sourceFileViewContainer").show();
                }
            });
        }
    });

    // Closes the source code viewing area
    $("#exitButton").click(function () {
        $("#sourceFileViewContainer").hide();
    });
</script>

</body>
</html>