<?php
$page_title = 'Delivery';
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
            <h1>Collection & Delivery Services</h1>
            <p>
                Our Delivery Service is amongst the best in the City. Offering Morning, Mid Day & Afternoon Slots 
                (Late Night Express Available). We can collect and deliver within a 4 mile radius for FREE*!
                <br><br>
                Each Collection is performed by a Qualified Technician who can assist you further with your equipment. Whether it can be 
                fixed on site or at one of our workshops, where we can perform almost any form of technical fix. We can have this done for 
                you and returned usually within 48 hours, sometimes on the same day!
                <br><br>
                Collections can usually be arranged for the same day, and can be booked in for a time slot which suits you. We offer 4 
                flexible options for pick ups.
            </p>

            <h3>Computer Collection & Delivery Times</h3>

            <ul class="bulletPoints">
                <li><b>10:00 – 11:00 (Morning)*</b></li>
                <li><b>13:00 – 14:00 (Midday)*</b></li>
                <li><b>16:00 – 17:00 (Afternoon)*</b></li>
                <li><b>20:00 – 21:00 (Late Night Express £4.95 Fee)</b></li>
            </ul>

            <p>
                <br>
                Because we offer a No Fix, No Fee structure, if we cannot fix your problem, we don't charge you a thing. Excludes 
                Collection/Delivery Fee.
                <br><br>
                All our Staff carry I.D. Cards from PC Repairs Hull which can be verified by calling 00000 999999 should you feel necessary. 
                They are also dressed out in branded uniforms ensuring a professional has come and not a cowboy.
                <br><br>
                Should you suspect anything suspicious, or the technician cannot show identification, DO NOT exchange monies nor equipment 
                with the driver and report this to us immediately. All our staff driver and technicians are fully trained and should show 
                this on request. We CANNOT be held responsible for you exchanging your monies nor equipment with another 3rd party.
                <br><br>
                *Thereafter there is a £2.50 charge for each additional 3 miles.
            </p>
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