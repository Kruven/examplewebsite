<?php
$page_title = "Computer Isn't Turning On";
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
            <h1>Computer Isn't Turning On</h1>
            <p>
                Here at PC Repairs UK we often see many computers suffering from power failure, although there are many checks that can be 
                performed to diagnose these symptoms it can sometimes be dangerous for you to perform these checks yourself without the 
                correct equipment.
                <br><br>
                We can offer a full comprehensive diagnostic on your system to ensure that your computer will be returned in correct working 
                order with all power failures corrected.
                <br><br>
                If you decide to correct the fault by using our help guide in our help centre please ensure you follow the correct health & 
                safety techniques when handling sensitive circuit boards and power connections.
                <br><br>
                We advise all unqualified persons to bring the computer to us to avoid any possibility of electrocution.
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