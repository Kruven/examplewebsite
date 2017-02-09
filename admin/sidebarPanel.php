<?php
$page_title = 'Admin Panel';
include ('adminPanelBase.php');
include ('../mysqlConnect.php');

// If the add image form has been submitted
if (isset($_POST['addFileSubmit'])) {
    // If an image was selected in the select option
    if ($_POST['newImageSrc'] !== 0) {
        // Check to see if the image exists
        // This will prevent malicious option injections containing incorrect files
        $imageExists = FALSE;
        $newImage = $_POST['newImageSrc'];

        // The formats we allow for images
        $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
        // The directory to check
        $dir = "../includes/images/sidebarImages/";
        // Check to see if this directory exists
        if (is_dir($dir)){
            // Open up the directory
            if ($dh = opendir($dir)) {
                // Read all the files from the directory
                while (($file = readdir($dh)) !== false) {
                    // If this file has one of the allowed formats
                    if (eregi($formats, $file)) {
                        // Check to see if it is this file
                        if ($file == $newImage) {
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
            $query = "INSERT into sidebarImages (image) VALUES ('$newImage')";
            $mysqli->query($query) or die('Could not add the image to the database');
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
			    move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/includes/images/sidebarImages/' . $new_file_name);
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

// Collect all the images that are available
$type = 'c';
$imagesDir = '../includes/images/sidebarImages/';
$images = glob($imagesDir . $type . '*[TYPE].{jpg,jpeg,png,gif}', GLOB_BRACE);

// Get the current images for the sidebar from the database 
$query = 'SELECT * FROM sidebarImages';
$result = $mysqli->query($query) or die(mysqli_error());
$imageIds = array();
$currentImages = array();
while ($row = mysqli_fetch_array($result)) {
    $imageIds[] = $row['id'];
    $currentImages[] = $row['image'];
}
$selectedImage = 0; 

mysqli_close();
?> 

<script>
    <?php
        $js_currentImages = json_encode($currentImages);
        echo "var currentImages = ". $js_currentImages . ";\n";

        $js_imageIds = json_encode($imageIds);
        echo "var imageIds = ". $js_imageIds . ";\n";

        $js_images = json_encode($images);
        echo "var images = ". $js_images . ";\n";
    ?>
    var selectedImage = 0;
</script>

<div id="mainArea">
    <h1>Sidebar Images</h1>
    <!-- Manage Images Field -->
    <fieldset class="adminFieldset">
        <legend>Manage Images</legend>
        <ul>
            <li class="tableArea">
            <!-- Table Up and Down Arrows -->
            <div id="tableArrowsContainer" style="height:<?php echo (24 * sizeof($currentImages)) + 24 ?>px">
                <ul>
                    <li class="tableUpArrow"></li>
                    <li class="tableDownArrow" style="top:<?php echo 24 * (sizeof($currentImages) - 1) + 5 ?>px"></li>
                </ul>
            </div>

            <!-- Images Table -->
            <table id="sidebarImagesTable" class="adminTable">
                <tr>
                    <th>Images</th>
                    <th style="background-color: #fff"></th>
                </tr>
                <?php
                // Get all the images that are currently used for this sidebar
                for ($x = 0; $x < sizeof($currentImages); $x++) {
                    ?>
                    <tr id="<?php echo 'tr' . $x ?>">
                        <?php
                        // If this image is selected then create this row with the selected class
                        if ($x == $selectedImage) {
                            ?>
                            <td id="<?php echo 'imageRow' . $x ?>" class="selected">
                                <?php echo $currentImages[$x] ?>
                            </td>
                            <?php
                        }
                        // Else; create a normal row
                        else {
                            ?>
                            <td id="<?php echo 'imageRow' . $x ?>">
                                <?php echo $currentImages[$x] ?>
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

            <!-- Currently Selected Image -->
            <li><img src="<?php echo '../includes/images/sidebarImages/' . $currentImages[$selectedImage]?>" id="selectedImage" alt="#"></li>
        </ul>
    </fieldset>
    <!-- Manage Images Field End -->

    <!-- Add Images Field -->
    <fieldset class="addFile">
        <legend>Add Image</legend>
        <form method="post">
            <!-- Image Selection Select -->
            <select name="newImageSrc" id="newImageSelect">
                <option value="0">Select an image...</option>
                <?php
                // Create all the drop down options for each available image
                // The formats that we will allow for the images
                $formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
                // The directory to check
                $dir = "../includes/images/sidebarImages/";

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
            <input type="submit" name="addFileSubmit" value="Submit">
        </form>

        <!-- Currently Selected Image -->
        <img src="#" id="newImageSelected" style="display: none" alt="#" class="selectImage">
    </fieldset>
    <!-- Add Images Field End -->

    <fieldset>
        <legend>Upload Image</legend>
        <p>Images must be of .png, .jpeg, .jpg or .gif format.</p>
        <form method="post" enctype="multipart/form-data">
	        Your Photo: <input type="file" name="photo" size="25" />
	        <input type="submit" name="uploadFileSubmit" value="Submit" />
        </form>
        <?php echo $message ?>
    </fieldset>
</div>

<script>
    $(document).ready(function () {
        // Go through every table row except the first and add a click event
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
            var src = "../includes/images/sidebarImages/" + currentImages[id];
            $("#selectedImage").attr("src", src);
            selectedImage = parseInt(id);
        });

        // When a table row delete button is clicked
        $('.tableButton').click(function () {
            // Get the base id of the button
            var id = $(this).attr("id");
            id = id.substring(2);

            // Get the image's id
            var dataId = imageIds[id];

            // Delete the entry in the database
            $.ajax({
                // The url containing the php code we want to run
                url: 'deleteData.php',
                // The data we want to send to the url
                data: {
                    table: "SIDEBAR_IMAGES",
                    dataId: dataId
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
            // Check to make sure the selected image is not the first image
            if (selectedImage != 0) {
                // Save the values of the images that will switch
                var selectedImg = currentImages[selectedImage];
                var otherImg = currentImages[selectedImage - 1];

                // Swap the values in the array
                currentImages[selectedImage] = otherImg;
                currentImages[selectedImage - 1] = selectedImg;

                // Change the values in the table;
                document.getElementById("imageRow" + selectedImage).innerHTML = currentImages[selectedImage];
                document.getElementById("imageRow" + (selectedImage - 1)).innerHTML = currentImages[selectedImage - 1];

                // Set the selected row to the new row that contains the value
                $("#imageRow" + selectedImage).removeClass("selected");
                $("#imageRow" + (selectedImage - 1)).addClass("selected");
                selectedImage--;
            }
        })

        // When the table down arrow is clicked
        $(".tableDownArrow").click(function () {
            // Check to make sure the selected image is not the last image
            if (selectedImage < (currentImages.length - 1)) {
                // Save the values of the images that will switch
                var selectedImg = currentImages[selectedImage];
                var otherImg = currentImages[selectedImage + 1];

                // Swap the values in the array
                currentImages[selectedImage] = otherImg;
                currentImages[selectedImage + 1] = selectedImg;

                // Change the values in the table;
                document.getElementById("imageRow" + selectedImage).innerHTML = currentImages[selectedImage];
                document.getElementById("imageRow" + (selectedImage + 1)).innerHTML = currentImages[selectedImage + 1];

                // Set the selected row to the new row that contains the value
                $("#imageRow" + selectedImage).removeClass("selected");
                $("#imageRow" + (selectedImage + 1)).addClass("selected");
                selectedImage++;
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
                    table: "SIDEBAR_IMAGES",
                    dataIds: imageIds,
                    currentData: currentImages
                },
                // The type of request to use
                type: 'post',
                // The function to run if the request is successful
                success: function (result) {
                    if (result) {
                        alert(result);
                    }
                    else {
                        alert("Images successfully updated.");
                    }
                }
            });
        });

        // When the new image select option is changed
        $("#newImageSelect").on('change', function () {
            var image = $(this).val();
            // Change the source of the new image to the new one
            $("#newImageSelected").attr('src', '../includes/images/sidebarImages/' + image);

            // If the option is an image then show the image
            if (image != 0) {
                // Show the image
                $("#newImageSelected").show();
            }
            // Else; hide the image
            else {
                $("#newImageSelected").hide();
            }
        });
    });
</script>

</body>
</html>