<?php
$page_title = "Graphics Card Isn't Working";
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
            <h1>Graphis Card Isn't Working</h1>
            <p>
                Graphics cards are mainly used for advanced graphical elements within software or games, most home users won't have this 
                problem due to the fact that onboard graphics is usually sufficient. The level of card used usually determins the 
                underpining problem, most high powered graphics cards are rather resourceful which generally leads to system errors. 
                When diagnosing graphical related problems, the graphics card is the first point of call after a connection test. 
                Many home built computers have some serious kit inside (Mainly Gamers), and the faults generally lie with inproper 
                configuration of the system. Upon the purchase of a new graphics card you should always check the specification required 
                to run the device efficiently.
                <br><br>
                The higher the spec of the card generally requires a higher specification of other key components, this MUST be researched 
                prior to purchase. You will find lots of forums around the Internet about specific issues relating to the chosen graphics 
                card.
                <br><br>
                If you find out your graphics card is a driver fault and finding the correct driver is to much of a hassle, then why not try
                <a href="http://pcrhull.drivershq.hop.clickbank.net/">Driver Detective</a>, it will locate and install the latest driver for your system at an extremely affordable price. One final 
                word of warning when using powerful graphics cards is to ensure you have a concurent airflow throughout the system stopping 
                system crashing by heat problems. Use additional fans to cool the system and make sure your computer is not sat directly on 
                the floor, raise the PC to improve clean air intake. Make sure you regulary clean out the system of excess dust which may 
                form static charge or simply reduce the original airflow causing system over heating.
                <br><br>
                If you feel as though the troubleshooting may exceed your knowledge and experience then why not start with our 
                <a href="index.php">health centre troubleshooter.</a>
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