<?php
$page_title = "Disc Drive Isn't Working";
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
            <h1>Disc Drive Isn't Working</h1>
            <p>
                Although a disc drive is not a fundamental component to run the computer it does have its requirements when trying to perform 
                some of the most common tasks. Trying to back up certain data such as pictures, can be a cumbersome task without the use of a 
                disc drive as it provides a safe way for you to store and protect valuable data, that may not be retrievable when facing such 
                occurrence's as hard drive failure.
                <br><br>
                Not all software and games are available as downloads but it is a common known fact that ALL media is available in DVD format. 
                Now without the use of a disc drive you may be restricted on available software such OEM software which comes provided by your
                parts manufacturer. If you have children that love to watch their favourite Disney DVD's on the computer then you'll have some 
                unhappy little children so avoid the screams and tantrums.
                <br><br>
                Here at PC Repairs UK we can either assess your current broken drive for common faults and fix accordingly at an affordable 
                cost. Alternatively we can replace the entire unit for a reasonable price to allow you to enjoy all the benefits of a disc 
                drive.
                <br><br>
                Make sure you take advantage of our “Help Centre Troubleshooter” to gather some fundamental information to see if you can find 
                the problem yourself.
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