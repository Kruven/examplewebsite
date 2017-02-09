<?php
$page_title = 'Admin Panel';
include ('adminPanelBase.php');
include ('../mysqlConnect.php');

// If the add slide form has been submitted
if (isset($_POST['addFileSubmit'])) {
    // If an image was selected in the select option
    if ($_POST['newSlideSrc'] !== 0) {
        // Check to see if the image exists
        $imageExists = FALSE;
        $newSlide = $_POST['newSlideSrc'];

        // The formats we allow for images
        $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
        // The directory to check
        $dir = "../includes/images/headerSlides/";
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
                            // The image exists! End this loop
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
            $query = "INSERT into headerSlides (slide) VALUES ('$newSlide')";
            $mysqli->query($query) or die('Could not add the slide to the database');
        }
    }
}

// If the user has submitted a file to be uploaded
if (isset($_POST['uploadFileSubmit'])) {
    //if they DID upload a file...
    if($_FILES['photo']['name'])
    {
	    //if no errors...
	    if(!$_FILES['photo']['error'])
	    {
		    //now is the time to modify the future file name and validate the file
		    $new_file_name = $_FILES['photo']['tmp_name']; //rename file
            $valid_file = TRUE;
		    if($_FILES['photo']['size'] > (1024000)) //can't be larger than 1 MB
		    {
			    $valid_file = false;
			    $message = 'Oops!  Your file\'s size is to large.';
		    }
		
		    //if the file has passed the test
		    if($valid_file)
		    {
			    //move it to where we want it to be
			    move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '../includes/images/headerSlides/' . $new_file_name);
			    $message = 'Congratulations!  Your file was accepted.';
		    }
	    }
	    //if there is an error...
	    else
	    {
		    //set that to be the returned message
		    $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
	    }
    }
}

// Collect all the images that are available for slides
$images = array();
// The formats that we will allow for the images
$formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
// The directory to check
$dir = "../includes/images/headerSlides/";

// Check to see if this directory exists
if (is_dir($dir)){
    // Open up the directory
    if ($dh = opendir($dir)) {
        // Read all the files from the directory
        while (($file = readdir($dh)) !== false) {
            // If this file has one of the allowed formats
            if (eregi($formats, $file)) {
                // Create an option for this file
                $images[] = $file;
            }
        }
        // Close the directory
        closedir($dh);
    }
}

// Get the current slides for the main slideshow from the database 
$query = 'SELECT * FROM headerSlides';
$result = $mysqli->query($query);
$slideIds = array();
$currentSlides = array();
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $slideIds[] = $row['id'];
        $currentSlides[] = $row['slide'];
    }
}

mysqli_close();
?> 

<script>
    <?php
        // Create javascript variables for all the slide variables
        // The currently used slides
        $js_currentSlides = json_encode($currentSlides);
        echo "var currentSlides = ". $js_currentSlides . ";\n";

        // The ids of the current slides
        $js_slideIds = json_encode($slideIds);
        echo "var slideIds = ". $js_slideIds . ";\n";
    ?>
    var selectedSlide = 0;
</script>

<div id="mainArea">
    <!-- Manage Slides Field -->
    <fieldset class="adminFieldset">
        <legend>Manage Slides</legend>
        <ul>
            <li class="tableArea">
            <!-- Table Up and Down Arrows -->
            <div id="tableArrowsContainer" style="height:<?php echo (24 * sizeof($currentSlides)) + 24 ?>px">
                <ul>
                    <li class="tableUpArrow"></li>
                    <li class="tableDownArrow" style="top:<?php echo 24 * (sizeof($currentSlides) - 1) + 5 ?>px"></li>
                </ul>
            </div>

            <!-- Slides Table -->
            <table class="adminTable">
                <tr>
                    <th>Slides</th>
                    <th style="background-color: #fff"></th>
                </tr>
                <?php
                // Get all the slides that are currently used for this slideshow
                for ($x = 0; $x < sizeof($currentSlides); $x++) {
                    ?>
                    <tr id="<?php echo 'tr' . $x ?>">
                        <?php
                        // If this slide is the first one then make this row selected
                        if ($x == 0) {
                            ?>
                            <td id="<?php echo 'slideRow' . $x ?>" class="selected">
                                <?php echo $currentSlides[$x] ?>
                            </td>
                            <?php
                        }
                        // Else; create a normal row
                        else {
                            ?>
                            <td id="<?php echo 'slideRow' . $x ?>">
                                <?php echo $currentSlides[$x] ?>
                            </td>
                            <?php
                        }
                        // Create the delete button for this row
                        ?>
                        <td style="width: 20px">
                            <div id="<?php echo 'tb' . $x ?>" class="tableButton"></div>
                        </td>
                    </tr>
                    <?php
                }    
                ?>
            </table>

            <!-- Save Table Button -->
            <input type="button" id="tableSaveButton" name="tableSave" value="Save">
            </li>

            <!-- Currently Selected Slide's Image -->
            <li><img src="<?php echo '../includes/images/headerSlides/' . $currentSlides[0]?>" id="selectedSlide" alt="#"></li>
        </ul>
    </fieldset>
    <!-- Manage Slides Field End -->

    <!-- Add Slides Field -->
    <fieldset class="addFile">
        <legend>Add Slide</legend>
        <form method="post">
            <!-- Image Selection Select -->
            <select name="newSlideSrc" id="newSlideSelect">
                <option value="0">Select an image...</option>
                <?php
                // Create all the drop down options for each available image
                for ($x = 0; $x < sizeof($images); $x++) {
                    // Create an option for this file
                    ?>
                    <option value="<?php echo $images[$x] ?>"><?php echo $images[$x] ?></option>
                    <?php
                }
                ?>
            </select>

            <!-- Submit Button -->
            <input type="submit" name="addFileSubmit" value="Submit">
        </form>

        <!-- Currently Selected Image -->
        <img src="#" id="newSlideSelected" style="display: none" alt="#" class="selectImage">
    </fieldset>
    <!-- Add Slides Field End -->

    <fieldset>
        <legend>Upload Slide</legend>
        <p>Slides must be 465x129 and be of .png, .jpeg, .jpg or .gif format.</p>
        <form method="post" enctype="multipart/form-data">
	        Your Photo: <input type="file" name="photo" size="25" />
	        <input type="submit" name="uploadFileSubmit" value="Submit" />
        </form>
        <?php echo $message ?>
    </fieldset>
</div>

<script>
    $(document).ready(function () {
        // Add a click event to each table row except the first
        $(".adminTable").delegate("td:first-child", "click", function () {
            // Remove the selected class from every row
            $("td").each(function () {
                $(this).removeClass("selected");
            })
            // Add the selected class to this row
            $(this).addClass("selected");

            // Get the base id of this row
            var id = $(this).attr("id");
            id = id.substring(8);

            // Set the selected image
            var src = "../includes/images/headerSlides/" + currentSlides[id];
            $("#selectedSlide").attr("src", src);

            // Set the new selected slide
            selectedSlide = parseInt(id);
        });

        // When a table row delete button is clicked
        $('.tableButton').click(function () {
            // Get the base id of the button
            var id = $(this).attr("id");
            id = id.substring(2);

            // Get the slide's id
            var slideId = slideIds[id];
            console.log('SLIDE ID: ' + slideId);

            // Delete the entry in the database
            $.ajax({
                // The url containing the php code we want to run
                url: 'deleteData.php',
                // The data we want to send to the url
                data: {
                    table: "HEADER",
                    dataId: slideId
                },
                // The type of request to use
                type: 'post',
                // The function to run if the request is successful
                success: function () {
                    // Remove the row from the table that matches this id
                    var tr = document.getElementById('tr' + id);
                    tr.parentNode.removeChild(tr);
                }
            });
        });

        // When the table up arrow is clicked
        $(".tableUpArrow").click(function () {
            // Check to make sure the selected slide is not the first slide
            if (selectedSlide != 0) {
                // Save the values of the slides that will switch
                var selectedImg = currentSlides[selectedSlide];
                var otherImg = currentSlides[selectedSlide - 1];

                // Swap the values in the array
                currentSlides[selectedSlide] = otherImg;
                currentSlides[selectedSlide - 1] = selectedImg;

                // Change the values in the table;
                document.getElementById("slideRow" + selectedSlide).innerHTML = currentSlides[selectedSlide];
                document.getElementById("slideRow" + (selectedSlide - 1)).innerHTML = currentSlides[selectedSlide - 1];

                // Set the selected row to the new row that contains the value
                $("#slideRow" + selectedSlide).removeClass("selected");
                $("#slideRow" + (selectedSlide - 1)).addClass("selected");
                selectedSlide--;
            }
        })

        // When the table down arrow is clicked
        $(".tableDownArrow").click(function () {
            // Check to make sure the selected slide is not the last slide
            if (selectedSlide < (currentSlides.length - 1)) {
                // Save the values of the slides that will switch
                var selectedImg = currentSlides[selectedSlide];
                var otherImg = currentSlides[selectedSlide + 1];

                // Swap the values in the array
                currentSlides[selectedSlide] = otherImg;
                currentSlides[selectedSlide + 1] = selectedImg;

                // Change the values in the table;
                document.getElementById("slideRow" + selectedSlide).innerHTML = currentSlides[selectedSlide];
                document.getElementById("slideRow" + (selectedSlide + 1)).innerHTML = currentSlides[selectedSlide + 1];

                // Set the selected row to the new row that contains the value
                $("#slideRow" + selectedSlide).removeClass("selected");
                $("#slideRow" + (selectedSlide + 1)).addClass("selected");
                selectedSlide++;
            }
        })

        // When the save button is clicked
        $("#tableSaveButton").click(function () {
            // Change the values in the database
            $.ajax({
                // The url containing the php code we want to run
                url: 'updateTable.php',
                // The data we want to send to the url
                data: {
                    table: "HEADER",
                    dataIds: slideIds,
                    currentData: currentSlides
                },
                // The type of request to use
                type: 'post',
                // The function to run if the request is successful
                success: function (result) {
                    if (result) {
                        alert(result);
                    }
                    else {
                        alert("Slides successfully updated.");
                    }
                }
            });
        });

        // When the new slide select option is changed
        $("#newSlideSelect").on('change', function () {
            var image = $(this).val();
            // Change the source of the new slide image to the new one
            $("#newSlideSelected").attr('src', '../includes/images/headerSlides/' + image);

            // If the option is an image then show the image
            if (image != 0) {
                // Show the image
                $("#newSlideSelected").show();
            }
            // Else; hide the image
            else {
                $("#newSlideSelected").hide();
            }
        });
    });
</script>

</body>
</html>