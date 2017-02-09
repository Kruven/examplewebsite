<?php
$page_title = 'Laptop Repairs';
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
            <h1>Laptop Repairs</h1>
            <p>
                Portable Computers are now becoming a global phenomenon. Once thought as the tool only for individuals on the go. Laptops 
                are now part of everyday life, used by professionals and home users alike. Although more likely than not, they tend to 
                fail when needed the most. Not convenient when running a business or using your laptop for your day-to-day job.
                <br><br>
                "PC Repairs UK" is the key solution. We're here to save you from your dilemma, with minimal stress, maximum turnaround with 
                a customer sales experience that our customers tell us is second to none.
            </p>

            <h3>Common Faults & Issues</h3>

            <ul class="bulletPoints">
                <li><b>Cracked/Faulty LCD Screen</b></li>
                <li><b>Low Hard Drive & Memory Space</b></li>
                <li><b>CD & DVD Drive Installation</b></li>
                <li><b>Broken Keyboard or Mouse pad</b></li>
                <li><b>Battery & Power Connector Faults</b></li>
                <li><b>Laptop Case Replacement</b></li>
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