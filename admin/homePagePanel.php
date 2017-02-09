<?php
$page_title = 'Admin Panel';
include ('adminPanelBase.php');
include ('../mysqlConnect.php');

// ===== ===== ADD SLIDE FORMS SUBMISSIONS ===== ===== \\
// PC
// If the add slide form has been submitted
if (isset($_POST['PC_addFileSubmit'])) {
    // If an image was selected in the select option
    if ($_POST['PC_newSlideSrc'] !== 0) {
        // Check to see if the image exists
        // This will prevent malicious option injections containing incorrect files
        $imageExists = FALSE;
        $newSlide = $_POST['PC_newSlideSrc'];

        // The formats we allow for images
        $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
        // The directory to check
        $dir = "../includes/images/servicesSlides/";
        // Check to see if this directory exists
        if (is_dir($dir)){
            // Open up the directory
            if ($dh = opendir($dir)) {
                // Read all the files from the directory
                while (($file = readdir($dh)) !== false) {
                    // If this file has one of the allowed formats
                    if (eregi($formats, $file)) {
                        // Check to see if it is this file
                        if ($file == $newSlide) {
                            $imageExists = TRUE;
                            break;
                        }
                    }
                }
                // Close the directory
                closedir($dh);
            }
        }

        // If the image exists then add it to the database
        if ($imageExists == TRUE) {
            $query = "INSERT into pc_services_slides (slide) VALUES ('$newSlide')";
            $mysqli->query($query) or die('Could not add the slide to the database');
        }
    }

    // Redirect to this page to prevent form resubmission
    include_once('../redirect.php');
    redirect('homePagePanel.php');
}

// LAPTOP
// If the add slide form has been submitted
if (isset($_POST['LAPTOP_addFileSubmit'])) {
    // If an image was selected in the select option
    if ($_POST['LAPTOP_newSlideSrc'] !== 0) {
        // Check to see if the image exists
        // This will prevent malicious option injections containing incorrect files
        $imageExists = FALSE;
        $newSlide = $_POST['LAPTOP_newSlideSrc'];

        // The formats we allow for images
        $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
        // The directory to check
        $dir = "../includes/images/servicesSlides/";
        // Check to see if this directory exists
        if (is_dir($dir)){
            // Open up the directory
            if ($dh = opendir($dir)) {
                // Read all the files from the directory
                while (($file = readdir($dh)) !== false) {
                    // If this file has one of the allowed formats
                    if (eregi($formats, $file)) {
                        // Check to see if it is this file
                        if ($file == $newSlide) {
                            $imageExists = TRUE;
                            break;
                        }
                    }
                }
                // Close the directory
                closedir($dh);
            }
        }

        // If the image exists then add it to the database
        if ($imageExists == TRUE) {
            $query = "INSERT into laptop_services_slides (slide) VALUES ('$newSlide')";
            $mysqli->query($query) or die('Could not add the slide to the database');
        }
    }

    // Redirect to this page to prevent form resubmission
    include_once('../redirect.php');
    redirect('homePagePanel.php');
}

// MAC
// If the add slide form has been submitted
if (isset($_POST['MAC_addFileSubmit'])) {
    // If an image was selected in the select option
    if ($_POST['MAC_newSlideSrc'] !== 0) {
        // Check to see if the image exists
        // This will prevent malicious option injections containing incorrect files
        $imageExists = FALSE;
        $newSlide = $_POST['MAC_newSlideSrc'];

        // The formats we allow for images
        $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
        // The directory to check
        $dir = "../includes/images/servicesSlides/";
        // Check to see if this directory exists
        if (is_dir($dir)){
            // Open up the directory
            if ($dh = opendir($dir)) {
                // Read all the files from the directory
                while (($file = readdir($dh)) !== false) {
                    // If this file has one of the allowed formats
                    if (eregi($formats, $file)) {
                        // Check to see if it is this file
                        if ($file == $newSlide) {
                            $imageExists = TRUE;
                            break;
                        }
                    }
                }
                // Close the directory
                closedir($dh);
            }
        }

        // If the image exists then add it to the database
        if ($imageExists == TRUE) {
            $query = "INSERT into mac_services_slides (slide) VALUES ('$newSlide')";
            $mysqli->query($query) or die('Could not add the slide to the database');
        }
    }

    // Redirect to this page to prevent form resubmission
    include_once('../redirect.php');
    redirect('homePagePanel.php');
}

// MOBILE
// If the add slide form has been submitted
if (isset($_POST['MOBILE_addFileSubmit'])) {
    // If an image was selected in the select option
    if ($_POST['MOBILE_newSlideSrc'] !== 0) {
        // Check to see if the image exists
        // This will prevent malicious option injections containing incorrect files
        $imageExists = FALSE;
        $newSlide = $_POST['MOBILE_newSlideSrc'];

        // The formats we allow for images
        $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
        // The directory to check
        $dir = "../includes/images/servicesSlides/";
        // Check to see if this directory exists
        if (is_dir($dir)){
            // Open up the directory
            if ($dh = opendir($dir)) {
                // Read all the files from the directory
                while (($file = readdir($dh)) !== false) {
                    // If this file has one of the allowed formats
                    if (eregi($formats, $file)) {
                        // Check to see if it is this file
                        if ($file == $newSlide) {
                            $imageExists = TRUE;
                            break;
                        }
                    }
                }
                // Close the directory
                closedir($dh);
            }
        }

        // If the image exists then add it to the database
        if ($imageExists == TRUE) {
            $query = "INSERT into mobile_services_slides (slide) VALUES ('$newSlide')";
            $mysqli->query($query) or die('Could not add the slide to the database');
        }
    }

    // Redirect to this page to prevent form resubmission
    include_once('../redirect.php');
    redirect('homePagePanel.php');
}
// ===== ===== ADD SLIDE FORMS SUBMISSIONS END ===== ===== \\

// SAVE CONTENT FORM SUBMIT  
if (isset($_POST['contentSubmit'])) {
    // Get the new text
    $newText = $_POST['text'];

    // Convert them to make them database compatible
    $newText = testInput($newText);
    $newText = $mysqli->real_escape_string($newText);

    // Update the database with the new value
    $result = $mysqli->query("UPDATE homepage_content SET text = '$newText' WHERE id = 1");
    if ($result) {
        echo '<script> alert("Database successfully updated."); </script>';
    }
    else {
        echo '<script> alert("Database could not be updated."); </script>';
    }
}

// Collect all the images that are available
// Get all the directories for the images
$imageDirectories = glob($_SERVER['DOCUMENT_ROOT']."/includes/images/servicesSlides/*.png");
$images = array();

// Convert the directories to just the image
foreach ($imageDirectories as $d) {
    $directories = explode("/", $d);
    $images[] = $directories[sizeof($directories) - 1];
}

// Get the current slides for each of the slideshows from the database 
$slideIds = array();
$currentSlides = array();
$selectedSlides = array();

$databaseTables = array("pcservicesslides", "laptopservicesslides", "macservicesslides", "mobileservicesslides");
for ($x = 0; $x < 4; $x++) {
    $slidesIds[] = array();
    $currentSlides[] = array();

    $result = $mysqli->query("SELECT * FROM `$databaseTables[$x]`");
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $slideIds[$x][] = $row['id'];
        $currentSlides[$x][] = $row['slide'];
    }
    $selectedSlides[] = 0; 
}
$idsPrefix = array("PC_", "LAPTOP_", "MAC_", "MOBILE_");
$headers = array("PC", "LAPTOP", "MAC", "MOBILE");

// Get the current title and text from the database 
$result = $mysqli->query("SELECT * FROM homepage_content");
$text = "";

// If the query was successful; get the data
if ($result) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $text = htmlspecialchars_decode($row['text']);
}


$mysqli->close();
?> 

<script>
    <?php
        // Create javascript variables for the slide id's, slides, images and paragraphs
        for ($x = 0; $x < 4; $x++) {
            $js_currentSlides = json_encode($currentSlides);
            echo "var currentSlides = ". $js_currentSlides . ";\n";
            $js_slideIds = json_encode($slideIds);
            echo "var slideIds = ". $js_slideIds . ";\n";
        }

        $js_images = json_encode($images);
        echo "var images = ". $js_images . ";\n";
    ?>
    var selectedSlides = [0, 0, 0, 0];
    var selectedParagraph = 0;
</script>

<div id="mainArea">
    <?php
    // Loop through all the sliders and create the sections for them
    for ($x = 0; $x < 4; $x++) {
        // Create the header
        echo '<h1>' . $headers[$x] . '</h1>';

        // Create the adminFieldset fieldset
        ?>
        <!-- Manage Slides Field -->
        <fieldset class="adminFieldset">
            <legend>Manage Slides</legend>
            <ul>
                <li class="tableArea">
                <!-- Table Up and Down Arrows -->
                <div id="tableArrowsContainer" style="height:<?php echo (24 * sizeof($currentSlides[$x])) + 24 ?>px">
                    <ul>
                        <li id="<?php echo $idsPrefix[$x] . 'tableUpArrow' ?>" class="tableUpArrow"></li>
                        <li id="<?php echo $idsPrefix[$x] . 'tableDownArrow' ?>" class="tableDownArrow" style="top:<?php echo 24 * (sizeof($currentSlides[$x]) - 1) + 5 ?>px"></li>
                    </ul>
                </div>

                <!-- Slides Table -->
                <table id="<?php echo $idsPrefix[$x] . 'adminTable' ?>" class="adminTable">
                    <tr>
                        <th>Slides</th>
                        <th style="background-color: #fff"></th>
                    </tr>
                    <?php
                    // Get all the slides that are currently used for this slideshow
                    for ($y = 0; $y < sizeof($currentSlides[$x]); $y++) {
                        ?>
                        <tr id="<?php echo $idsPrefix[$x] . 'tr' . $y ?>">
                            <?php
                            // If this slide is selected then create this row with the selected class
                            if ($y == $selectedSlides[$x]) {
                                ?>
                                <td id="<?php echo $idsPrefix[$x] . 'slideRow' . $y ?>" class="selected">
                                    <?php echo $currentSlides[$x][$y] ?>
                                </td>
                                <?php
                            }
                            // Else; create a normal row
                            else {
                                ?>
                                <td id="<?php echo $idsPrefix[$x] . 'slideRow' . $y ?>">
                                    <?php echo $currentSlides[$x][$y] ?>
                                </td>
                                <?php
                            }
                            // Create the delete button for this row
                            ?>
                            <td style="width: 20px">
                                <div id="<?php echo $idsPrefix[$x] . 'tb' . $y ?>" class="<?php echo $idsPrefix[$x] . 'tableButton tableButton' ?>"></div>
                            </td>
                        </tr>
                        <?php
                    }    
                    ?>
                </table>

                <!-- Save Table Button -->
                <input type="button" id="<?php echo $idsPrefix[$x] . 'tableSaveButton' ?>" name="<?php echo $idsPrefix[$x] . 'tableSave'?>" value="Save">
                </li>

                <!-- Currently Selected Image -->
                <li><img src="<?php echo '../includes/images/servicesSlides/' . $currentSlides[$x][$selectedSlides[$x]]?>" id="<?php echo $idsPrefix[$x] . 'selectedSlide' ?>" alt="#"></li>
            </ul>
        </fieldset>
        <!-- Manage Slides Field End -->

        <!-- Add Slides Field -->
        <fieldset class="addFile">
            <legend>Add Slide</legend>
            <form method="post">
                <!-- Image Selection Select -->
                <select name="<?php echo $idsPrefix[$x] . 'newSlideSrc' ?>" id="<?php echo $idsPrefix[$x] . 'newSlideSelect' ?>">
                    <option value="0">Select an image...</option>
                    <?php
                    // Create all the drop down options for each available image
                    // The formats that we will allow for the images
                    $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
                    // The directory to check
                    $dir = "../includes/images/servicesSlides/";

                    // Check to see if this directory exists
                    if (is_dir($dir)){
                        // Open up the directory
                        if ($dh = opendir($dir)) {
                            // Read all the files from the directory
                            while (($file = readdir($dh)) !== false) {
                                // If this file has one of the allowed formats
                                if (eregi($formats, $file)) {
                                    // Create an option for this file
                                    ?>
                                    <option value="<?php echo $file ?>"><?php echo $file ?></option>
                                    <?php
                                }
                            }
                            // Close the directory
                            closedir($dh);
                        }
                    }
                    ?>
                </select>

                <!-- Submit Button -->
                <input type="submit" name="<?php echo $idsPrefix[$x] . 'addFileSubmit' ?>" value="Submit">
            </form>
            <!-- Currently Selected Image -->
            <img src="#" id="<?php echo $idsPrefix[$x] . 'newSlideSelected' ?>" style="display: none" alt="#">
        </fieldset>
        <!-- Add Slides Field End -->
        <?php
    }
    ?>

    <!-- ----- ----- CONTENT ----- ----- -->
    <h1>Content</h1>
    <fieldset class="adminFieldset">
        <legend>Manage Content</legend>
        <form method="post" class="adminPanelForm">
            <ul>
                <li>
                    <p>Text:</p>
                    <textarea name="text" id="text" rows="35" cols="70"><?php echo $text ?></textarea>
                </li>
                <li>
                    <input type="submit" name="contentSubmit" name="Save" value="Submit" style="float: right; margin-right: 20px">
                </li>
            </ul>
        </form>
    </fieldset>
    <!-- Manage Slides Field End -->
</div>

<script>
    $(document).ready(function () {
        // ===== ===== ADD CLICK EVENTS TO ALL THE TD'S FROM EACH TABLE ===== ===== \\
        var prefixes = ["#PC_", "#LAPTOP_", "#MAC_", "#MOBILE_"];
        var substrings = [11, 15, 12, 15];
        for (var x = 0; x < 4; x++) {
            addTdClickEvent(x);
        }

        function addTdClickEvent(x) {
            // Go through each td for the table except the first and add a click event
            $(prefixes[x] + "adminTable").delegate("td:first-child", "click", function () {
                // Remove the selected class from each td
                $(prefixes[x] + "adminTable td").each(function () {
                    $(this).removeClass("selected");
                })
                // Add the selected class to this td
                $(this).addClass("selected");

                // Get the base id of this td
                var id = $(this).attr("id");
                id = id.substring(substrings[x]);
                selectedSlides[x] = parseInt(id);

                // Change the selected slide image
                var src = "../includes/images/servicesSlides/" + currentSlides[x][selectedSlides[x]];
                $(prefixes[x] + "selectedSlide").attr("src", src);
            });
        }
        // ===== ===== CLICK EVENTS FOR ALL TD'S END ===== ===== \\

        // ===== ===== DELETE BUTTONS CLICK EVENTS ===== ===== \\
        var prefixes2 = ["PC", "LAPTOP", "MAC", "MOBILE"];
        var substrings2 = [5, 9, 6, 9];
        for (var x = 0; x < 4; x++) {
            addDeleteButtonClickEvent(x);
        }

        function addDeleteButtonClickEvent(x) {
            $("." + prefixes2[x] + "_tableButton").click(function () {
                // Get the base id of the button
                var id = $(this).attr("id");
                id = id.substring(substrings2[x]);

                // Get the slide's id
                var slideId = slideIds[x][id];

                // Delete the entry in the database
                $.ajax({
                    // The url containing the php code we want to run
                    url: 'deleteData.php',
                    // The data we want to send to the url
                    data: {
                        table: prefixes2[x],
                        dataId: slideId
                    },
                    // The type of request to use
                    type: 'post',
                    // The function to run if the request is successful
                    success: function () {
                        // Remove the row from the table that matches this id
                        var tr = document.getElementById(prefixes2[x] + '_tr' + id);
                        tr.parentNode.removeChild(tr);
                    }
                });
            });
        }
        // ===== ===== DELETE BUTTONS CLICK EVENTS END ===== ===== \\

        // ===== ===== TABLE UP ARROWS CLICK EVENTS ===== ===== \\
        for (var x = 0; x < 4; x++) {
            addTableUpArrowClickEvent(x);
        }

        function addTableUpArrowClickEvent(x) {
            $(prefixes[x] + "tableUpArrow").click(function () {
                // Check to make sure the selected slide is not the first slide
                if (selectedSlides[x] != 0) {
                    // Save the values of the slides that will switch
                    var selectedImg = currentSlides[x][selectedSlides[x]];
                    var otherImg = currentSlides[x][selectedSlides[x] - 1];

                    // Swap the values in the array
                    currentSlides[x][selectedSlides[x]] = otherImg;
                    currentSlides[x][selectedSlides[x] - 1] = selectedImg;

                    // Change the values in the table;
                    document.getElementById(prefixes2[x] + "_slideRow" + selectedSlides[x]).innerHTML = currentSlides[x][selectedSlides[x]];
                    document.getElementById(prefixes2[x] + "_slideRow" + (selectedSlides[x] - 1)).innerHTML = currentSlides[x][selectedSlides[x] - 1];

                    // Set the selected row to the new row that contains the value
                    $(prefixes[x] + "slideRow" + selectedSlides[x]).removeClass("selected");
                    $(prefixes[x] + "slideRow" + (selectedSlides[x] - 1)).addClass("selected");
                    selectedSlides[x]--;
                }
            })
        }
        // ===== ===== TABLE UP ARROWS CLICK EVENTS END ===== ===== \\

        // ===== ===== TABLE DOWN ARROWS CLICK EVENTS ===== ===== \\
        for (var x = 0; x < 4; x++) {
            addTableDownArrowClickEvent(x);
        }

        function addTableDownArrowClickEvent(x) {
            $(prefixes[x] + "tableDownArrow").click(function () {
                // Check to make sure the selected slide is not the last slide
                if (selectedSlides[x] < (currentSlides[x].length - 1)) {
                    // Save the values of the slides that will switch
                    var selectedImg = currentSlides[x][selectedSlides[x]];
                    var otherImg = currentSlides[x][selectedSlides[x] + 1];

                    // Swap the values in the array
                    currentSlides[x][selectedSlides[x]] = otherImg;
                    currentSlides[x][selectedSlides[x] + 1] = selectedImg;

                    // Change the values in the table;
                    document.getElementById(prefixes2[x] + "_slideRow" + selectedSlides[x]).innerHTML = currentSlides[x][selectedSlides[x]];
                    document.getElementById(prefixes2[x] + "_slideRow" + (selectedSlides[x] + 1)).innerHTML = currentSlides[x][selectedSlides[x] + 1];

                    // Set the selected row to the new row that contains the value
                    $(prefixes[x] + "slideRow" + selectedSlides[x]).removeClass("selected");
                    $(prefixes[x] + "slideRow" + (selectedSlides[x] + 1)).addClass("selected");
                    selectedSlides[x]++;
                }
            })
        }
        // ===== ===== TABLE DOWN ARROWS CLICK EVENTS END ===== ===== \\

        // ===== ===== TABLE SAVE BUTTONS CLICK EVENTS END ===== ===== \\
        for (var x = 0; x < 4; x++) {
            addTableSaveButtonClickEvent(x);
        }

        function addTableSaveButtonClickEvent(x) {
            $(prefixes[x] + "tableSaveButton").click(function () {
                // Change the values in the database
                $.ajax({
                    // The url containing the php code we want to run
                    url: 'updateTable.php',
                    // The data we want to send to the url
                    data: {
                        table: prefixes2[x],
                        dataIds: slideIds[x],
                        currentData: currentSlides[x]
                    },
                    // The type of request to use
                    type: 'post',
                    // The function to run if the request is successful
                    success: function (result) {
                        if (result) {
                            alert("hello");
                        }
                        else {
                            alert("Slides successfully updated.");
                        }
                    }
                });
            });
        }
        // ===== ===== TABLE SAVE BUTTONS CLICK EVENTS END ===== ===== \\

        // ===== ===== NEW SLIDE SELECT CHANGE EVENTS ===== ===== \\
        for (var x = 0; x < 4; x++) {
            addFileSelectChangeEvent(x);
        }

        function addFileSelectChangeEvent(x) {
            $(prefixes[x] + "newSlideSelect").on('change', function () {
                var image = $(this).val();
                // Change the source of the new slide image to the new one
                $(prefixes[x] + "newSlideSelected").attr('src', '../includes/images/servicesSlides/' + image);

                // If the option is an image then show the image
                if (image != 0) {
                    // Show the image
                    $(prefixes[x] + "newSlideSelected").show();
                }
                // Else; hide the image
                else {
                    $(prefixes[x] + "newSlideSelected").hide();
                }
            });
        }
        // ===== ===== NEW SLIDE SELECT CHANGE EVENTS END ===== ===== \\
    });
</script>

</body>
</html>