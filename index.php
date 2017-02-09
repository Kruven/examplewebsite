<?php
$page_title = 'PC Repairs UK';
include ('./includes/header.php');

// Get all of the slider images
$divIds = array("pcSlider", "laptopSlider", "macSlider", "mobileSlider");
$tables = array("pcServicesSlides", "laptopServicesSlides", "macServicesSlides", "mobileServicesSlides");
$slides = array();

for ($x = 0; $x < sizeof($tables); $x++) {
    $result = $mysqli->query("SELECT * FROM `$tables[$x]`");
    $slides[] = array();
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $slides[$x][] = $row['slide'];
    }
}

// Get the text
$result = $mysqli->query("SELECT * FROM homePageContent");
$row = $result->fetch_array(MYSQLI_ASSOC);
$text = nl2br(htmlspecialchars_decode($row['text']));

// Get all the images
$sidebarImages = array();

$result = $mysqli->query("SELECT * FROM sidebarImages");
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $sidebarImages[] = $row['image'];
}
?> 

<div class="contentArea">
    <ul id="servicesArea">
        <?php
        for ($x = 0; $x < 4; $x++) {
            ?>
            <li <?php if ($x == 0) { echo 'style="margin-left: 41px"'; }?>>
                <div id="<?php echo $divIds[$x] ?>">
                    <?php
                    for ($y = 0; $y < sizeof($slides[$x]); $y++) {
                        ?>
                        <img src="<?php echo 'includes/images/servicesSlides/' . $slides[$x][$y]?>" alt="#">
                        <?php
                    }
                    ?>
                </div>
                <div class="nextButton" id="<?php echo 'nextButton' . ($x + 1)?>"></div>
                <?php
                    switch ($x) {
                        case 0:
                            ?><a href="pcRepairs.php" class="plainLink"><div class="infoButton" id="<?php echo 'infoButton' . ($x + 1)?>">More Info</div></a><?php
                            break;
                        case 1:
                            ?><a href="laptopRepairs.php" class="plainLink"><div class="infoButton" id="<?php echo 'infoButton' . ($x + 1)?>">More Info</div></a><?php
                            break;
                        case 2:
                            ?><a href="macRepairs.php" class="plainLink"><div class="infoButton" id="<?php echo 'infoButton' . ($x + 1)?>">More Info</div></a><?php
                            break;
                        case 3:
                            ?><a href="mobileRepairs.php" class="plainLink"><div class="infoButton" id="<?php echo 'infoButton' . ($x + 1)?>">More Info</div></a><?php
                            break;
                    }
                ?>
            </li>
            <?php
        }
        ?>
    </ul>

    <ul class="pageContent">
        <li class="pageText">
            <p><?php echo nl2br($text) ?></p>
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

<script src="smallSlideshows.js"></script>

<?php
include ('./includes/footer.php');
?>