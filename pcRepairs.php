<?php
$page_title = 'PC Repairs';
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
            <h1>PC Repairs</h1>
            <p>
                In today's world, owning a computer and needing a repair service at some point is inevitable. Even the best branded computers
                will eventually suffer from wear and tear damage, especially as computers are being used more excessively and are becoming an 
                indispensible part of the working world. The word "repair" however doesn't always mean a hardware failure, sometimes it is 
                simply a software issue, either way it is a stressful ordeal.
                <br><br>
                This is where "PC Repairs UK" comes in. We're the professionals, and we're here to take that boulder from your shoulder, 
                when you could be dealing with more important things within your life. We can also pick-up and deliver your computer to you, 
                for free of charge.
            </p>

            <h3>Common Faults & Issues</h3>

            <ul class="bulletPoints">
                <li><b>Running Slow or Crashing</b></li>
                <li><b>Spyware/Malware/Virus Infections</b></li>
                <li><b>Low Hard Drive & Memory Space</b></li>
                <li><b>Hardware & Software Failure</b></li>
                <li><b>Software Upgrades</b></li>
                <li><b>Operating System Errors</b></li>
                <li><b>Health Scan & Tune Up</b></li>
            </ul>

            <br>
            <p>If you're experiencing any of these problems, you may want to consider booking your computer in immediately for repair. 
                Leaving faults on your system can develop into more serious and sometime irreversible effects.</p>

            <h3>Computer Repairs Price List</h3>

            <ul class="bulletPoints">
                <li>
                    <b>OS Installations</b>
                    <span>£39.95 (within 24 hours)</span>
                </li>
                <li>
                    <b>PC Hardware Repairs</b>
                    <span>£29.95 + Additional Parts Costs</span>
                </li>
                <li>
                    <b>PC Software Repairs</b>
                    <span>£24.95</span>
                </li>
                <li>
                    <b>Virus Removal</b>
                    <span>£49.95</span>
                </li>
                <li>
                    <b>Computer Cleaning Service</b>
                    <span>£14.95 (per System)</span>
                </li>
                <li>
                    <b>PC Troubleshoot & Health Scan</b>
                    <span>£7.95</span>
                </li>
                <li>
                    <b>The Full Monty (Windows Install, Full Clean, Health Scan)</b>
                    <span>£54.95 (within 48 hours)</span>
                </li>
            </ul>
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