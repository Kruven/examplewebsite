<?php
$page_title = 'PC Repairs UK';
include ('./includes/header.php');

// Get the title and the text
$title = '';
$text = '';
$query = "SELECT * FROM aboutUsContent";
$result = $mysqli->query($query);

$row = mysqli_fetch_array($result);
$title = $row['title'];
$text = nl2br(htmlspecialchars_decode($row['text']));

// Get all the images
$sidebarImages = array();

$query = "SELECT * FROM sidebarImages";
$result = $mysqli->query($query);
while ($row = mysqli_fetch_array($result)) {
    $sidebarImages[] = $row['image'];
}
?> 

<div class="contentArea">
    <ul class="pageContent">
        <li class="pageText">
            <h1><?php echo $title ?></h1>
            <p><?php echo $text ?></p>
        </li>

        <li class="sidebar">
            <?php
            for ($x = 0; $x < sizeof($sidebarImages); $x++) {
                ?>
                <img src="<?php echo 'includes/images/sidebarImages/' . $sidebarImages[$x] ?>" alt="#">
                <?php
            }
            ?>
        </li>
    </ul>

    <br class="clear">
</div>

<?php
include ('./includes/footer.php');
?>