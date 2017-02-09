<?php
$page_title = "Hard Drive Isn't Working";
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
            <h1>Hard Drive Isn't Working</h1>
            <p>
                The hard drive is in essense the most important part of the computer, it stores all the valuable information regarding the 
                computers operations and personal data. Like most internal components the system will not function without it nor will you be 
                able to use common operating systems such as "Windows".
                <br><br>
                A hard drive fault in most cases can be catastrophic if they havn't made sufficient back-ups and data retrieval straight from 
                the ribon will be extremely costly due to the process required. If you do have valuable data never rely on the hard drive 
                alone as they are prone to faults. Now that technology has moved on from conventional hardware such as standard drives 
                (ribbon based), we now have a new technology which is much faster and extremely durable, ideal for an ever progressing 
                business. SSD's (Solid State Drives) do not use the conventional ribon method, they have been completely redesigned for access 
                and performance but more importantly reliability. If you decide on moving accross to this type of hard drive you are less 
                likely to loose data unless caused by human error of coarse.
                <br><br>
                With such a cumbersome delicate piece of hardware we recommend that if you notice any signs of fault from the hard drive then 
                please follow the steps provided within the <a href="index.php">Health Centre</a> to find any faults that can occur.
                <br><br>
                It must be stressed the importance of a healthy hard drive to keep systems optimal, you must run system cleaning at least once 
                per month. Some users do tend to forget to clean their drives for many reasons, but it is worth taking 5 minutes out to 
                perform the tasks. The 3 main tasks to help with performance are "Disc Defragmentation", "Disc Clean Utility" and "msconfig" 
                command. Msconfig can be input in to "Windows" via -> Start -> Run-> type msconfig, locate "start-up" tab, click "Disable 
                all", reboot and you will see an instant improvement within the system. Then run the defragmentation and system cleaner to 
                clear any unwanted clusters, now you should be left with a smooth running system. All else fails re-install the OS of choice 
                to give your computer that "out of the box" feeling.
                <br><br>
                If you feel like any of the tasks here are more advanced than your capabilities don't hesitate to call PC Repairs UK on 
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