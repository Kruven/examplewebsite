<?php
$page_title = 'PC Repairs UK';
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
            <ul class="servicesArea">
                <!-- PC Repairs -->
                <li>
                    <img src="includes/images/pc.png" alt="pc">
                    <ul class="serviceInfo">
                        <li>
                            <h1>PC Repairs</h1>
                            <p>Everyday, customers ask us to fix their computers for a number of different reasons. These include; slow running 
                                systems, persistent crashing, hardware failure, virus/spyware removal plus many more. Our answer is simple. Leave it 
                                to the professionals! We can have the majority of our customer's computer back and working within 24 hours.</p>
                            <a href="pcRepairs.php" class="plainLink"><div class="infoButton">More Info</div></a>
                        </li>
                    </ul>
                </li>
                <!-- Laptop Repairs -->
                <li>
                    <img src="includes/images/laptop.png" alt="laptop">
                    <ul class="serviceInfo">
                        <li>
                            <h1>Laptop Repairs</h1>
                            <p>Laptops are one of our main specialities. We have our own parts store which means we can usually have laptops 
                                fixed faster than other companies. Cracked screen? Broken disc drive? Mousepad or keyboard not working? We 
                                can fix it! Our fully qualified technicians are here to help. We can also pick up & deliver your PC back to 
                                you, for free!</p>
                            <a href="laptopRepairs.php" class="plainLink"><div class="infoButton">More Info</div></a>
                        </li>
                    </ul>
                </li>
                <!-- Mac Repairs -->
                <li>
                    <img src="includes/images/mac.png" alt="mac">
                    <ul class="serviceInfo">
                        <li>
                            <h1>Mac Repairs</h1>
                            <p>Our fully qualified technicians can repairs most common Apple Mac computer faults. This includes laptop and 
                                desktop machines. Usually we can deliver your computer back to you within 48 hours from collection. Common 
                                problems that we have resolved include; hard drive failures, screen replacements, software/hardware 
                                configuration, casing replacement, plus more.</p>
                            <a href="macRepairs.php" class="plainLink"><div class="infoButton">More Info</div></a>
                        </li>
                    </ul>
                </li>
                <!-- Mobile Repairs -->
                <li>
                    <img src="includes/images/mobiles.png" alt="mobiles">
                    <ul class="serviceInfo">
                        <li>
                            <h1>Mobile Repairs</h1>
                            <p>We offer a fully comprehensive mobile repairs service. Designed to get your phone repaired and back in your 
                                hands, where it belongs. Not only will we pick up your handset free of charge, but we will deliver it back 
                                to you all part of our 'no stress' customer service guarantee. Virus? Cracked Touch Screen? Broken Keypad? 
                                Dead Battery? We have a solution!</p>
                            <a href="mobileRepairs.php" class="plainLink"><div class="infoButton">More Info</div></a>
                        </li>
                    </ul>
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