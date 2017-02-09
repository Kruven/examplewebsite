<?php
$page_title = 'PC Repairs UK';
include ('./includes/header.php');

$post = 1;
if (isset($_GET['p']) && is_numeric($_GET['p'])) {
    $page = $_GET['p'];
}

// Get the blog post
$title = "";
$thumbnail = "";
$dates = "";
$contents = "";
$categories = "";

$query = "SELECT title, thumbnail, date, text FROM blogPosts WHERE id = '$page'";
$result = $mysqli->query($query) or die('Could not get blog post');
$row = mysqli_fetch_assoc($result);

$title = $row['title'];
$thumbnail = $row['thumbnail'];
$date = $row['date'];
$text = nl2br(htmlspecialchars_decode($row['text']));

// Get all the categories
$query = 'SELECT * FROM blogCategories';
$result = $mysqli->query($query);
$categories = array();

while ($row = mysqli_fetch_array($result)) {
    $categories[] = $row['name'];
}
?> 

<div class="contentArea">
    <ul class="pageContent">
        <li class="blogPost">
            <h2><?php echo $date ?></h2>
            <h1><?php echo $title ?></h1>
            <img src="<?php echo '../includes/images/blogThumbnails/' . $thumbnail?>" alt="#">
            <div><?php echo $text ?></div>
        </li>

        <li class="interestingStuff">
            <ul>
                <?php
                for ($x = 0; $x < sizeof($categories); $x++) {
                    ?> <li><a href="http://localhost:12864/blog.php?c=<?php
                    echo $x + 1 ?>
                    "> <?php
                    echo $categories[$x] ?>          
                    </a></li> <?php
                }
                ?>
            </ul>
        </li>
    </ul>

    <br class="clear">
</div>

<?php
include ('./includes/footer.php');
?>