<?php
$page_title = 'Corporate Branding';
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
            <h1>Corperate Branding</h1>
            <p>
                Corporate Branding is a very important aspect of business. Especially when it comes to leaving a lasting impression with your 
                audience. Branding is almost as effective as giving someone your business card, except they never knew you did it.
                <br><br>
                On average, a Vinyl wrapped vehicle can have impressions of over 3,000 people in an average city, just by commuting from job 
                to job. That's 3,000 people who never knew your business existed, that's 3,000 people who could become potential customers, 
                and that's 3,000 people that will discover your business, only if you adopt corporate branding properly.
                <br><br>
                Corporate Branding differs from regular Branding as it tries to give the impression of being professional, capable and 
                respectable within any industry. It is an illusion as such, giving people an impression which doesn't necessarily 
                represents the company size or reputation, although looks do count.
                <br><br>
                In today's World, there are thousands upon thousands of brands to choose from, without enough time to try them all. What are 
                their solutions? Judge every book by it's cover! Although we are taught not to do this in every day life, it is simply 
                impossible to apply this when purchasing every product and dealing with various businesses. That is why branding is so 
                important.
                <br><br>
                Many businesses neglect this issue, and simply brush it under the carpet, only to discover that once they outgrow themselves, 
                expansion is very hard, particularly when expanding and acquiring new premises. With your new premises means, more 
                advertisement, more public exposure and again letting people know exactly what your business does and why they need your 
                product. Addresses branding early however eradicates this problem completely, as your audience is already aware of who 
                you are, what you sell and means you don't have to spend as much time trying to build a reputation...you should already 
                have it.
                <br><br>
                We offer several solutions to businesses who require Corporate Branding, and every solution is tailored to suit the customer.
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