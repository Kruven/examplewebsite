<?php
$page_title = 'Landline to SIM';
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
        <li class="businessServicesText">
            <h1>Landline to SIM</h1>

            <p>
                Imagine having an office number literally wherever you went. Whether you work stationary or transit, from home or away. 
                Not only can this technology redirect all landline calls to another number, it can do this to several – ideal to larger 
                companies, making sure that calls always gets answered.
                <br><br>
                This technology is already saving your competitors money, allowing them to make local rate calls to mobile phones, suited 
                for companies who have several employees on the move using mobile phones.
            </p>

            <h2>Several Identities</h2>
            <p>
                As well as getting landline redirection to your mobile SIM, you have the ability to have several number to one phone, 
                great for businesses looking for improving their corporate brand image. This can either be multiple local geographical 
                numbers or a range of national numbers. It's entirely up to you.
            </p>

            <h2>Saving You and your Customer Money</h2>
            <p>
                Currently, landline to Mobile call rates average between 16p-25p per minute. Very expensive for incoming business calls from 
                customers, often deterring them from calling, only to choose your competitors. For as little as £5, it could well be the most 
                important decision you could make for your business.
                <br><br>
                We have genuine feedback from customers, who claim this Landline to SIM technology has paid itself off, usually within the 
                first few weeks. Which is always a weight off the shoulders, particularly smaller start-up businesses and entrepreneurs with 
                little starting capital.
            </p>

            <h2>Why Wait?</h2>
            <p>
                We can have your business ready to receive calls within 24 hours usually, with full propagation taking usually a maximum of 
                48 hours. Effective turnaround giving you flexible time scale to recuperative the costs. No long waiting times and 
                administrative Jargon!
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