<?php
$page_title = 'Search Engine Optimisation';
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
            <h1>Search Engine Optimisation</h1>

            <p>
                Search Engine Optimisation is something we take very seriously when it comes to our clients websites. As a business 
                ourselves we understand just how important that #1 place in Google, Yahoo & Bing can be.
                <br><br>
                With every company under the Sun fighting for that spot, you need to stand out from the crowd when it comes to letting the 
                Search Engines choose exactly who they wish to appear for that particular search query. It can literally mean the difference 
                between the phone ringing and not being able to afford your phone utility bill.
                <br><br>
                Our Web Team applies every known method of SEO to ensure our customers get calls, but not only calls, ensure they get 
                customers. Our Search Engine Optimisation methods are one of the only proven services in the UK to have an almost guaranteed 
                ROI. Don't be fooled by 'cheap' agencies conning customers by promising them results that are simply just too good to be true, 
                we hear stories of this every day, and can be frustrating to Directors and Business Proprietors alike.
                <br><br>
                We use state of the art tracking technologies to record the improvements our clients websites, which can determine advanced 
                demographical information, making your advertisement campaigns strategically more effective. We potentially save our business 
                clients tens of thousands of pounds a year, making our SEO packages next to nothing.
                <br><br>
                Included with our SEO packages, is a FREE Consultation, Map Implementation on all Major Search Engines and a Brief so 
                customers can carry on their campaigns, time and time again.
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