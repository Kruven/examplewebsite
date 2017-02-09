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
                $mysqli->query("UPDATE header_slides SET slide = '$data' WHERE id = '$id'") or die();
            }
            break;
        case "PC":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $mysqli->query("UPDATE pc_services_slides SET slide = '$data' WHERE id = '$id'") or die();
            }
            break;
        case "LAPTOP":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $mysqli->query("UPDATE laptop_services_slides SET slide = '$data' WHERE id = '$id'") or die();
            }
            break;
        case "MAC":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $mysqli->query("UPDATE mac_services_slides SET slide = '$data' WHERE id = '$id'") or die();
            }
            break;
        case "MOBILE":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $mysqli->query("UPDATE mobile_services_slides SET slide = '$data' WHERE id = '$id'") or die();
            }
            break;
        case "SIDEBAR_IMAGES":
            for ($x = 0; $x < sizeof($dataIds); $x++) {
                $data = $currentData[$x];
                $id = $dataIds[$x];
                $mysqli->query("UPDATE sidebar_images SET image = '$data' WHERE id = '$id'") or die();
            }
            break;
        case "BLOG":
            $id = $dataIds;
            $newTitle = testInput($currentData['title']);
            $newTitle = $mysqli->real_escape_string($newTitle);
            $newThumbnail = $currentData['thumbnail'];
            $newCategoryId = $currentData['category'];
            $newText = testInput($currentData['text']);
            $newText = $mysqli->real_escape_string($newText);

            $mysqli->autocommit(FALSE);
            $r1 = $mysqli->query("UPDATE blog_posts SET title = '$newTitle', thumbnail = '$newThumbnail', text = '$newText' WHERE id = '$id'");
            $r2 = $mysqli->query("UPDATE blog_categories_assoc SET category_id = '$newCategoryId' WHERE blog_post_id = '$id'");
            if ($r1 && $r2) {
                $mysqli->commit();
            }
            else {
                $mysqli->rollback();
            }
            $mysqli->autocommit(TRUE);
            break;
    }

    $mysqli->close();
}
?>