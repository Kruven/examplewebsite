<?php
$page_title = "Webcam Isn't Working";
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
            <h1>Webcam Isn't Working</h1>
            <p>
                The webcam in modern times is a window to the world and allows us as computer users to contact and see people all over the 
                world in an instant. This technology has now been proven to have such an impact in the business world that a lot of 
                conferences are now performed in this way across the globe. Having family and friends abroad means that by using the 
                webcam technology gives us 24 hour a day access to there part of the world making them feel as though they are almost in our 
                homes with us.
                <br><br>
                Some families rely on this technology and panic when it fails, so why not have the ability of being able to get back in touch 
                as quickly as possible by letting “PC Repairs UK” solve these issues that can take the average user hours or even days to 
                solve.
                <br><br>
                Remember all of our popular social networking websites use webcam technology to allow users to speak face to face and its 
                usage has seen growing trends over the last few years.
                <br><br>
                All of our FULLY qualified staff are here to help so be sure that if you can't do we can, we're only a phone call away 
                (99999) 999999
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