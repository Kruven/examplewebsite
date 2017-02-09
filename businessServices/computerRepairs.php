<?php
$page_title = 'Computer Repairs';
include ('../includes/header.php');

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
        <li class="pageText">
            <h1>Computer Repairs</h1>
            <p>
                In the modern business era, Computer Repairs is an essential service. Information is now transmitted electronically speeding 
                things up, saving costs on administration giving employees more time to get on with things that are more important. Because 
                these machines are a vital key point to keeping businesses working these days, when they break they must be fixed fast.
                <br><br>
                We have designed our services to be as fast as possible for businesses offering fixes usually within 24 hours, if we can 
                commit sometimes on the same day. These computer repairs can be performed either on site or off site, whatever suits the 
                client. We tailor our services to simply make it less stressful for you. At the end of the day, we are a technologically 
                driven company ourselves, so we understand the situation completely.
                <br><br>
                If you're interested in adopting our services for your business, simply call us for more information, we have packages that 
                are designed to suit companies of all sizes, from sole traders to large national organisations. Get a quote now.
            </p>
        </li>

        <li class="sidebar">
            <?php
            for ($x = 0; $x < sizeof($sidebarImages); $x++) {
                ?>
                <img src="<?php echo '../includes/images/sidebarImages/' . $sidebarImages[$x] ?>" alt="#">
                <?php
            }
            ?>
        </li>
    </ul>

    <br class="clear">
</div>

<?php
include ('../includes/footer.php');
?>