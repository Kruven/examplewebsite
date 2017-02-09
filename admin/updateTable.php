<?php
// Updates the contents of a specified table, with specified ids and data
if(isset($_POST['table']) && !empty($_POST['table']) &&
   isset($_POST['dataIds']) && !empty($_POST['dataIds']) &&
   isset($_POST['currentData']) && !empty($_POST['currentData'])) {

    $table = $_POST['table'];
    $dataIds = $_POST['dataIds'];
    $currentData = $_POST['currentData'];

    include_once('../mysqlConnect.php');
    
    switch ($table) {
        case "HEADER":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $query = "UPDATE headerSlides SET slide = '$data' WHERE id = '$id'";
                $mysqli->query($query) or die('Could not update one or more slides');
            }
            break;
        case "PC":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $query = "UPDATE pcServicesSlides SET slide = '$data' WHERE id = '$id'";
                $mysqli->query($query) or die('Could not update one or more slides');
            }
            break;
        case "LAPTOP":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $query = "UPDATE laptopServicesSlides SET slide = '$data' WHERE id = '$id'";
                $mysqli->query($query) or die('Could not update one or more slides');
            }
            break;
        case "MAC":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $query = "UPDATE macServicesSlides SET slide = '$data' WHERE id = '$id'";
                $mysqli->query($query) or die('Could not update one or more slides');
            }
            break;
        case "MOBILE":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $query = "UPDATE mobileServicesSlides SET slide = '$data' WHERE id = '$id'";
                $mysqli->query($query) or die('Could not update one or more slides');
            }
            break;
        case "HOME_PAGE_PARAGRAPHS":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $data = testInput($data);
                $data = mysqli_real_escape_string($data);
                $id = $dataIds[$x];
                $query = "UPDATE homePageParagraphs SET paragraph = '$data' WHERE id = '$id'";
                $mysqli->query($query) or die('Could not update one or more paragraphs');
            }
            break;
        case "SIDEBAR_IMAGES":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $query = "UPDATE sidebarImages SET image = '$data' WHERE id = '$id'";
                $mysqli->query($query) or die('Could not update one or more images');
            }
            break;
        case "BLOG":
            $id = $dataIds;
            $newTitle = testInput($currentData['title']);
            $newTitle = mysqli_real_escape_string($newTitle);
            $newThumbnail = $currentData['thumbnail'];
            $newCategoryId = $currentData['category'];
            $newText = testInput($currentData['text']);
            $newText = mysqli_real_escape_string($newText);
            $query = "UPDATE blogPosts SET title = '$newTitle', thumbnail = '$newThumbnail', categoryId = '$newCategoryId', text = '$newText' WHERE id = '$id'";
            $mysqli->query($query) or die(mysqli_error());
            break;
    }

    mysqli_close();
}
?>