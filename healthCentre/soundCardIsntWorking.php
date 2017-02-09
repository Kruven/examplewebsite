<?php
$page_title = "Sound Card Isn't Working";
include ($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');

// Get all the images
$sidebarImages = array();

$query = "SELECT * FROM sidebarImages";
$result = $mysqli->query($query);
while ($row = mysqli_fetch_array($result)) {
    $sidebarImages[] = $row['image'];
}
?> 

<div class="contentArea">
    <ul class="pageContent" style="padding: 24px 24px 0 24px">
        <li class="healthCentre-readMore">
            <h1>Sound Card Isn't Working</h1>
            <p>
                In todays society it is almost essential that your computer/ laptop or Mac will require sound to perform some of the most 
                basic features such as Video/ Music or Gaming. Sound plays a crucial part of the way we interact with our computers especially 
                for gamers as they rely on sound to play the game and enjoy all the benifits of HD features making the game almost feel "real"
                in essense.
                <br><br>
                Youtube and other popular video networks allow users to play video, although most of them will supply subtitles (Main stream 
                videos mainly) it does not provide an enjoyable experience for the user by distracting their attention from the video 
                conent.
                <br><br>
                Many home computers in today's society come pre-built with DVD drives, families use their computers to allow siblings to 
                enjoy some of their favourite movies to free up the main TV for the adults, so sound provides you with quite content 
                children.
                <br><br>
                In essense media streaming accross the internet plays a vital part in the modern world allowing us to view content that 
                wouldn't be usually accessible, sound is one of the main components for our computer systems.
                <br><br>
                Please see <a href="index.php">health centre</a> for further diagnosis and troubleshooting, alternativly call us on 
                (99999) 999999.
            </p>
            <a href="index.php" class="plainLink"><div class="infoButton">Back</div></a>
        </li>

        <li class="sidebar">
            <?php
            for ($x = 0; $x < sizeof($sidebarImages); $x++) {
                ?>
                <img src="<?php echo '/includes/images/sidebarImages/' . $sidebarImages[$x] ?>" alt="#">
                <?php
            }
            ?>
        </li>
    </ul>
    <br class="clear">
</div>

<script src="healthCentreSidebar.js"></script>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
?>