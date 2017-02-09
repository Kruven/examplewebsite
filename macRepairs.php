<?php
$page_title = 'Mac Repairs';
include ('./includes/header.php');

// Get all the images
$sidebarImages = array();

$query = "SELECT * FROM sidebarImages";
$result = $mysqli->query($query);
while ($row = mysqli_fetch_array($result)) {
    $sidebarImages[] = $row['image'];
}
?> 

<div class="contentArea">
    <ul class="pageContent">
        <li class="pageText">
            <h1>Apple Mac Repairs</h1>
            <p>
                We get calls every day regarding Apple Mac repairs. In fact we have noticed over the past couple of years, enquiries are 
                on the up. With the introduction of the iPod and iPhone, Apple products are becoming a common household brand.
                <br><br>
                "PC Repairs Hull" is one of the most reputable Apple Mac repair companies in the Hull and East Riding area. We're cheap, 
                efficient and are one of the fastest Mac repair services around.
            </p>

            <h3>Common Faults & Issues</h3>

            <ul class="bulletPoints">
                <li><b>Hard Drive & Memory Faults</b></li>
                <li><b>Cracked/Faulty Mac LCD Screen</b></li>
                <li><b>Apple Mac Speaker Replacement</b></li>
                <li><b>Broken Keyboard or Mouse pad</b></li>
                <li><b>Battery & Power Connector Faults</b></li>
                <li><b>Apple Mac Case Replacement</b></li>
                <li><b>Wi-Fi Connectivity Issues</b></li>
            </ul>

            <br>
            <p>If you're experiencing any of these problems, you may want to consider booking your computer in immediately for repair. 
                Leaving faults on your system can develop into more serious and sometime irreversible effects.</p>
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

<?php
include ('./includes/footer.php');
?>