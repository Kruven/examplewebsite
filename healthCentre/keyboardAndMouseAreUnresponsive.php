<?php
$page_title = "Keyboard And Mouse Are Unresponsive";
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
            <h1>Keyboard & Mouse Are Unresponsive</h1>
            <p>
                To have the ability to perform common tasks on a computer requires the use of a mouse and keyboard, without it you basically 
                have a dead computer.
                <br><br>
                There could be a number of reasons why your mouse and keyboard has stopped working and not to forget our PC “Health Centre” 
                will provide you with some basic troubleshooting advice so you can detect some easy and well known common issues.
                <br><br>
                A computer without an active mouse and keyboard serves very little use and effectiveness without them and you may spend 
                several hours troubleshooting problems but if you brought the problem to us we can guarantee that we will fix all mouse & 
                keyboard issues.
                <br><br>
                All of our FULLY qualified staff are here to help so be sure that if you can't do we can, we're only a phone call away 
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