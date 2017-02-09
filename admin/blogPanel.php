<?php
$page_title = 'Blog Panel';
include ('adminPanelBase.php');
include ('../mysqlConnect.php');

// NEW POST FORM SUBMIT
if (isset($_POST['newPostSubmit'])) {
    // Get the new title
    if (!empty($_POST['title'])) {
        $newTitle = $_POST['title'];
        $newTitle = testInput($newTitle);
        $newTitle = mysqli_real_escape_string($newTitle);
    }
    else { $titleErr = "Please enter a title"; }

    // Get the new thumbnail
    if (!empty($_POST['thumbnail'])) {
        $newThumbnail = $_POST['thumbnail'];
        $newThumbnail = testInput($newThumbnail);
        $newThumbnail = mysqli_real_escape_string($newThumbnail);
    }
    else { $thumbnailErr = "Please choose a thumbnail"; }

    // Get the new category
    if (!empty($_POST['category'])) {
        $newCategory = $_POST['category'];
        $newCategory = testInput($newCategory);
        $newCategory = mysqli_real_escape_string($newCategory);
    }
    else { $categoryErr = "Please choose a category"; }

    // Get the new text
    if (!empty($_POST['text'])) {
        $newText = $_POST['text'];
        $newText = testInput($newText);
        $newText = mysqli_real_escape_string($newText);
    }
    else { $textErr = "Please enter some content"; }

    // Check that the data entered is valid
    if (isset($newTitle) && isset($newThumbnail) && isset($newCategory) && isset($newText)) {
        // Insert the new post into the database
        $query = "INSERT INTO blogPosts (title, thumbnail, date, text, categoryId) VALUES ('$newTitle', '$newThumbnail', NOW(), '$newText', '$newCategory')";
        $result = $mysqli->query($query);
        if (mysqli_error() == NULL) {
            echo '<script> alert("New post successfully submitted."); </script>';
        }
        else {
            echo '<script> alert("An error has occured. The blog post could not be submitted"); </script>';
        }
    }
    else {
        echo '<script> alert("An error has occured. The blog post could not be submitted"); </script>';
    }
}

// Get the current categories from the database 
$query = 'SELECT * FROM blogCategories';
$result = $mysqli->query($query);
$categories = array();

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $categories[] = $row['name'];
    }
}

// Get all the thumbnail images
$thumbnails = array();
// The formats that we will allow for the images
$formats = "(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)";
// The directory to check
$dir = "../includes/images/blogThumbnails/";

// Check to see if this directory exists
if (is_dir($dir)){
    // Open up the directory
    if ($dh = opendir($dir)) {
        $x = 0;
        // Read all the files from the directory
        while (($file = readdir($dh)) !== false) {
            // If this file has one of the allowed formats
            if (eregi($formats, $file)) {
                // Save the file
                $thumbnails[] = $file;
            }
        }
        // Close the directory
        closedir($dh);
    }
}

// Get all the blog posts from the database
$query = 'SELECT * FROM blogPosts';
$result = $mysqli->query($query);
$blogIds = array();
$blogTitles = array();
$blogThumbnails = array();
$blogCategoryIds = array();
$blogContents = array();

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $blogIds[] = $row['id'];
        $blogTitles[] = htmlspecialchars_decode($row['title']);
        $blogThumbnails[] = $row['thumbnail'];
        $blogCategoryIds[] = (int)$row['categoryId'];
        $blogContents[] = htmlspecialchars_decode($row['text']);
    }
}

mysqli_close();
?> 

<script>
    <?php
        // Create javascript variables for the blog posts data
        // Ids
        $js_blogIds = json_encode($blogIds);
        echo "var blogIds = ". $js_blogIds . ";\n";
        // Titles
        $js_blogTitles = json_encode($blogTitles);
        echo "var blogTitles = ". $js_blogTitles . ";\n";
        // Thumbnails
        $js_blogThumbnails = json_encode($blogThumbnails);
        echo "var blogThumbnails = ". $js_blogThumbnails . ";\n";
        // Categories
        $js_blogCategoryIds = json_encode($blogCategoryIds);
        echo "var blogCategoryIds = ". $js_blogCategoryIds . ";\n";
        // Categories
        $js_categories = json_encode($categories);
        echo "var categories = ". $js_categories . ";\n";
        // Contents
        $js_blogContents = json_encode($blogContents);
        echo "var blogContents = ". $js_blogContents . ";\n";
    ?>
    var selectedPost = 0;
</script>

<div id="mainArea">
    <h1>Blog Panel</h1>
    <!-- NEW BLOG POST FORM AREA START -->
    <fieldset class="adminFieldset">
        <legend>New Post</legend>
        <form method="post" class="adminPanelForm">
            <ul>
                <!-- Blog Title -->
                <?php if (isset($titleErr)) {
                    echo '<li><span class="errorText">' . $titleErr . '</span></li>';
                }?>
                <li>
                    <p>Title:</p>
                    <input type="text" name="title" id="title" maxlength="50">
                </li>
                <!-- Blog Thumbnail -->
                <?php if (isset($thumbnailErr)) {
                    echo '<li><span class="errorText">' . $thumbnailErr . '</span></li>';
                }?>
                <li>
                    <p>Thumbnail:</p>
                    <select name="thumbnail">
                        <option value="0">Select an image...</option>
                        <?php
                        // Create all the drop down options for each available thumbnail
                        for ($x = 0; $x < sizeof($thumbnails); $x++) {
                        ?>
                            <option value="<?php echo $thumbnails[$x] ?>"><?php echo $thumbnails[$x] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </li>
                <!-- Blog Category -->
                <?php if (isset($categoryErr)) {
                    echo '<li><span class="errorText">' . $categoryErr . '</span></li>';
                }?>
                <li>
                    <p>Category:</p>
                    <select name="category">
                        <option value="0">Select a category...</option>
                        <?php
                        for ($x = 0; $x < sizeof($categories); $x++) { 
                        ?>
                            <option value="<?php echo ($x + 1) ?>"> <?php echo $categories[$x]?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </li>
                <!-- Blog Text/Contents -->
                <?php if (isset($textErr)) {
                    echo '<li><span class="errorText">' . $textErr . '</span></li>';
                }?>
                <li>
                    <p>Text:</p>
                    <textarea name="text" id="text" rows="35" cols="70" maxlength="10000"></textarea>
                </li>
                <li>
                    <input type="submit" name="newPostSubmit" name="Submit" value="Submit" style="float: right; margin-right: 20px">
                </li>
            </ul>
        </form>
    </fieldset>
    <!-- NEW BLOG POST FORM AREA END -->

    <!-- MANAGE BLOG POSTS FORM AREA START -->
    <fieldset class="adminFieldset">
        <legend>Manage Posts</legend>
        <ul>
            <li class="tableArea">
            <!-- Blog Posts Table -->
            <table id="adminTable" class="adminTable">
                <tr>
                    <th>Posts</th>
                    <th style="background-color: #fff"></th>
                </tr>
                <?php
                // Get all the blog posts and put them into the table
                for ($x = 0; $x < sizeof($blogTitles); $x++) {
                    ?>
                    <tr id="<?php echo 'tr' . $x ?>">
                        <?php
                        // If this is the first blog posts then make it the selected one
                        if ($x == 0) {
                            ?>
                            <td id="<?php echo 'postRow' . $x ?>" class="selected">
                                <?php echo $blogTitles[$x] ?>
                            </td>
                            <?php
                        }
                        // Else; create a normal table entry
                        else {
                            ?>
                            <td id="<?php echo 'postRow' . $x ?>">
                                <?php echo $blogTitles[$x] ?>
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
        </ul>

        <!-- Edit Blog Post Form -->
        <ul class="adminPanelForm" style="float: right">
            <!-- Title -->
            <li>
                <p>Title:</p>
                <input type="text" name="updateTitle" id="updateTitle" maxlength="50">
            </li>
            <!-- Thumbnail -->
            <li>
                <p>Thumbnail:</p>
                <select name="updateThumbnail" id="updateThumbnail">
                    <option value="0">Select an image...</option>
                    <?php
                    // Create all the drop down options for each available thumbnail
                    for ($x = 0; $x < sizeof($thumbnails); $x++) {
                    ?>
                        <option value="<?php echo $thumbnails[$x] ?>"><?php echo $thumbnails[$x] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </li>
            <!-- Category -->
            <li>
                <p>Category:</p>
                <select name="updateCategory" id="updateCategory">
                    <option value="0">Select a category...</option>
                    <?php
                    for ($x = 0; $x < sizeof($categories); $x++) { 
                    ?>
                        <option value="<?php echo ($x + 1) ?>"> <?php echo $categories[$x]?> </option>
                    <?php
                    }
                    ?>
                </select>
            </li>
            <!-- Text -->
            <li>
                <p>Text:</p>
                <textarea name="updateText" id="updateText" rows="35" cols="70" maxlength="10000"><?php echo $blogContents[0] ?></textarea>
            </li>
            <!-- Submit Button -->
            <li>
                <input type="button" name="updatePostSubmit" value="Save" id="updatePostButton" style="float: right; margin-right: 20px">
            </li>
        </ul>
    </fieldset>
    <!-- MANAGE BLOG POSTS FORM AREA END -->
</div>

<script>
    $(document).ready(function () {
        // Go through each td for the table except the first and add a click event
        $(".adminTable").delegate("td:first-child", "click", function () {
            // Remove the "selected" class from each td
            $(".adminTable td").each(function () {
                $(this).removeClass("selected");
            })
            // Add the selected class to this td
            $(this).addClass("selected");

            // Get the base id of this td
            var id = $(this).attr("id");
            id = id.substring(7);
            selectedPost = parseInt(id);

            // Update the selected post form
            $("#updateTitle").val(blogTitles[selectedPost]);
            $("#updateThumbnail").val(blogThumbnails[selectedPost]);
            $("#updateCategory").val(blogCategoryIds[selectedPost]);
            $("#updateText").val(blogContents[selectedPost]);
        });

        // Add functionality to all the delete buttons
        $(".tableButton").click(function () {
            // Get the base id of the button
            var id = $(this).attr("id");
            id = id.substring(2);

            // Get the posts's id
            var postId = blogIds[id];

            // Delete the entry in the database
            $.ajax({
                // The url containing the php code we want to run
                url: 'deleteData.php',
                // The data we want to send to the url
                data: {
                    table: "BLOG",
                    dataId: postId
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

        // When the update blog post submit button is clicked
        $("#updatePostButton").click(function () {
            // Get the new values
            var newTitle = $("#updateTitle").val();
            var newThumbnail = $("#updateThumbnail").val();
            var newCategory = $("#updateCategory").val();
            var newText = $("#updateText").val();

            // Change the values in the database
            $.ajax({
                // The url containing the php code we want to run
                url: 'updateTable.php',
                // The data we want to send to the url
                data: {
                    table: "BLOG",
                    dataIds: blogIds[selectedPost],
                    currentData: {
                        title: newTitle,
                        thumbnail: newThumbnail,
                        category: newCategory,
                        text: newText
                    }
                },
                // The type of request to use
                type: 'post',
                // The function to run if the request is successful
                success: function (result) {
                    if (result) {
                        alert("The blog post could not be updated");
                    }
                    else {
                        alert("Blog post successfully updated.");

                        // Update the data for this blog post
                        blogTitles[selectedPost] = newTitle;
                        blogThumbnails[selectedPost] = newThumbnail;
                        blogCategoryIds[selectedPost] = newCategory;
                        blogContents[selectedPost] = newText;
                    }
                }
            });
        });
    });
</script>

</body>
</html>