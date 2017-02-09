<?php
$page_title = "Screen Isn't Working";
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
            <h1>Screen Isn't Working</h1>
            <p>
                It can be really frustrating trying to troubleshoot a broken screen, the problem can lie in several places such as connections 
                or hardware failure. We have compiled a series of ways you could identify faults through our “Health Centre Troubleshooter”. 
                PC Repairs UK have provided this service to help our customers save time and money with computer faults.
                <br><br>
                A screen for a computer is one of the most important components for your computer to work correctly as it acts as a window to 
                your personal information.
                <br><br>
                If a screen fault is an electrical issue we advise that you seek a professional advice before attempting any kind of computer 
                hardware fault finding as it could cause severe injury if incorrect procedures are followed.
                <br><br>
                If you feel as though you couldn't handle the job then bring it to the experts to have a look so call us on (99999) 999999
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