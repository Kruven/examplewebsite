<?php
$page_title = 'Bespoke Websites';
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
            <h1>Bespoke Websites</h1>

            <p>This page is currently under construction.</p>
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