<?php
// This script will delete the data of a specified id from a specified table    

// If values were passed to the required variables
if (isset($_POST['dataId']) && isset($_POST['table'])) {
    // Get the required variables
    $dataId = $_POST['dataId'];
    $table = $_POST['table'];
    
    // Connect to the database
    include_once('../mysqlConnect.php');

    // Select the table and delete the data
    switch ($table) {
        case "HEADER":
            $query = "DELETE from headerSlides WHERE id = '$dataId'";
            break;
        case "PC":
            $query = "DELETE from pcServicesSlides WHERE id = '$dataId'";
            break;
        case "LAPTOP":
            $query = "DELETE from laptopServicesSlides WHERE id = '$dataId'";
            break;
        case "MAC":
            $query = "DELETE from macServicesSlides WHERE id = '$dataId'";
            break;
        case "MOBILE":
            $query = "DELETE from mobileServicesSlides WHERE id = '$dataId'";
            break;
        case "SIDEBAR_IMAGES":
            $query = "DELETE from sidebarImages WHERE id = '$dataId'";
            break;
        case "BLOG":
            $query = "DELETE from blogPosts WHERE id = '$dataId'";
            break;
    }
    $result = $mysqli->query($query) or die("An error occured");

    // Close the database connection
    mysqli_close();
}
?>