<?php
$page_title = 'Business Services';
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
            <h1>Business Services</h1>

            <h2>Computer Repairs</h2>
            <p>Getting your business working electronically could be the best thing you ever did, improving data flow within the workforce, 
                archiving information effectively and in a nutshell, working when you need it to. This is not the 1980's, Computer are now 
                affordable for almost anyone, thanks to the explosion of home users, and now more then ever. Whether you need a Computer, 
                Laptop, Notebook or Netbook, switching today could be cost effective.</p>
            <a href="computerRepairs.php" class="plainLink"><div class="infoButton">More Info</div></a>

            <h2>Corporate Branding</h2>
            <p>
                There are many key elements to making a businesses work via the World Wide Web. And without implementing them all, you can 
                never accomplish your maximum pay out potential. One main fundamental point to business is the art to make money, why not 
                apply this knowledge online?
                <br><br>
                One point is the branding, and this is one of the most important. Do people know who you are? And if not, would they 
                recognise you if they saw you?
            </p>
            <a href="corporateBranding.php" class="plainLink"><div class="infoButton">More Info</div></a>

            <h2>Bespoke Websites</h2>
            <p>
                The next is to appear professional, and one way to do this is by getting a bespoke website. It is your doorway to the Web 
                but more importantly it is your shop front to potential customers, and potential customers they will stay until you stand 
                out from the crowd.
            </p>
            <a href="bespokeWebsites.php" class="plainLink"><div class="infoButton">More Info</div></a>

            <h2>Landline to SIM</h2>
            <p>
                Another common issue we come across is people using their mobile phone numbers as their main business contact number. 
                There are extremely cheap methods to getting a landline connection without the hassle of a contract, built most 
                conveniently for the businesses on the go, called a Landline to SIM solution. To you it seems like another number, 
                but to your audience it appears more secure and is reassuring especially to customers using payment details online.
            </p>
            <a href="landlineToSim.php" class="plainLink"><div class="infoButton">More Info</div></a>

            <h2>Search Engine Optimisation</h2>
            <p>
                Once you have achieved the above you are good to go, but first you must think about exposing yourself and your 
                business online. You can do this simply by following some steps and getting your website optimised by a Professional 
                SEO Practitioner. The last thing any business owner would want, would be to foot a bill for something that didn't 
                give a reasonable ROI, and this is why it is the last vital step to making this work. By accomplishing Search Engine 
                Dominance your business with thrive online earning your business valuable money that you was once before letting go 
                to the competition.
            </p>
            <a href="searchEngineOptimisation.php" class="plainLink"><div class="infoButton">More Info</div></a>

            <br><br>
            <p>Use our "Business Services" Today. Earn Maximum Profits!</p>
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