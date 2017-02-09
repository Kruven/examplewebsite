<?php
$page_title = 'PC Repairs UK';
include ('./includes/header.php');

// Get the page
$pageNumber = 1;
if (isset($_GET['p']) && is_numeric($_GET['p'])) {
    $pageNumber = $_GET['p'];
}
// Get the category
$category = "ALL";
if (isset($_GET['c']) && is_numeric($_GET['c'])) {
    $category = $_GET['c'];
}
$postsPerPage = 5;

// Get all the blog posts
$ids = array();
$titles = array();
$thumbnails = array();
$dates = array();
$contents = array();
$categoryIds = array();

$query = "SELECT * FROM blogposts";
$result = $mysqli->query($query) or die('Could not get blog posts');
// Go through every blog post
while ($row = mysqli_fetch_array($result)) {
    // If the category of this blog post matches the one searched for, or if all blog categories is searched for
    if ($row['categoryId'] == $category || $category == "ALL") {
        // Collect all the data from it
        $ids[] = $row['id'];
        $titles[] = $row['title'];
        $thumbnails[] = $row['thumbnail'];
        $dates[] = $row['date'];
        $categoryIds[] = $row['categoryId'];

        // Decode the text and shorten it to fit in the box
        $finalText = htmlspecialchars_decode($row['text']);
        if (strlen($finalText) > 200) {
            $words = explode(" ", $finalText, 31);
            $finalText = "";
            for ($x = 0; $x < 30; $x++) {
                $finalText .= $words[$x] .= " ";
            }
            $finalText = substr($finalText, 0, strlen($finalText) - 1);
            $finalText .= "...";
        }
        $contents[] = $finalText;
    }
}

// Get all the categories
$query = 'SELECT * FROM blogCategories';
$result = $mysqli->query($query);
$categories = array();

while ($row = mysqli_fetch_array($result)) {
    $categories[] = $row['name'];
}

// Calculate the variables needed for the page selection choices
$firstId = ($pageNumber - 1) * $postsPerPage + 1;
$lastId = $firstId + $postsPerPage - 1;

// Get how many blog posts there are
$blogPostsAmount = sizeof($ids);

// Calculate how many pages there are
$pagesAmount = $blogPostsAmount / $postsPerPage;
$pagesAmount = ceil($pagesAmount);

// Calculate the highest page choice
$highPageChoice = $pageNumber + 20;
if (($highPageChoice % 10) > 0) {
    $highPageChoice += 10;
    $highPageChoice -= $highPageChoice % 10;
}
while ($highPageChoice > $pagesAmount) {
    $highPageChoice--;
}
if ($highPageChoice <= $pageNumber + 2) {
    $highPageChoice = -1;
}

// Calculate the nearby page choices
$middlePageChoices = array($pageNumber - 2, $pageNumber - 1, $pageNumber, $pageNumber + 1, $pageNumber + 2);
foreach ($middlePageChoices as &$choice) {
    if ($choice <= 0 || $choice > $pagesAmount) {
        $choice = -1;
    }
}
unset($choice);

// Calculate the lowest page choice
$lowPageChoice = $pageNumber - 20;
if (($lowPageChoice % 10) > 0) {
    $lowPageChoice -= 10;
    $lowPageChoice += 10 - ($lowPageChoice % 10);
}
while ($lowPageChoice <= 0) {
    $lowPageChoice++;
}
if ($lowPageChoice >= $pageNumber - 2) {
    $lowPageChoice = -1;
}

// Check to see if there is a next page
$nextPagePossible = TRUE;
if ($pageNumber >= $pagesAmount) {
    $nextPagePossible = FALSE;
}

// Check to see if there is a previous page
$previousPagePossible = TRUE;
if ($pageNumber == 1) {
    $previousPagePossible = FALSE;
}

// Calculate the first blog post id
$firstId = (($pageNumber - 1) * $productsPerPage) + 1;
?> 

<div class="contentArea">
    <ul class="pageContent">
        <li class="blogPosts">
            <?php
            // Go through every blog post for this page and create a box for them
            for ($x = (sizeof($titles) - 1) - ($postsPerPage * ($pageNumber - 1)); 
                 $x >= 0 && $x > (sizeof($titles) - 6) - ($postsPerPage * ($pageNumber - 1)); 
                 $x--) {
                ?>
                <a href="<?php echo 'http://localhost:12864/blogPost.php?p=' . $ids[$x]?>">
                    <ul>
                        <li class="thumbnail">
                            <img src="includes/images/blogThumbnails/<?php echo $thumbnails[$x] ?>" alt="#">
                        </li>
                        <li class="content">
                            <h2><?php echo $dates[$x] ?></h2>
                            <h1><?php echo $titles[$x]?></h1>
                            <p><?php echo $contents[$x] ?></p>
                        </li>
                    </ul>
                </a>
                <?php
            }

            // If there are no posts for this category
            if (sizeof($titles) == 0) {
                echo '<p>No Posts were found</p>';
            }
            ?>

            <!-- Create all the page choice options -->
            <div class="pageChoiceContainer">
                <?php
                    // Next page choice
                    if ($nextPagePossible) {
                        $link = 'blog.php?p=' . ($pageNumber + 1);
                        if ($category != "ALL") {
                            $link .= '&c=' . $category;
                        }
                        ?>
                        <a href="<?php echo $link ?>" class="pageChoice">Next ></a>
                        <?php
                    }

                    // Highest page choice
                    if ($highPageChoice != -1) {
                        $link = 'blog.php?p=' . $highPageChoice;
                        if ($category != "ALL") {
                            $link .= '&c=' . $category;
                        }
                        ?>
                        <a href="<?php echo $link ?>" class="pageChoice"><?php echo $highPageChoice ?></a>
                        <div class="pageChoiceDots">...</div>
                        <?php
                    }

                    // Nearby page choices
                    foreach (array_reverse($middlePageChoices) as $choice) {
                        if ($choice != -1) {
                            if ($choice == $pageNumber) {
                                ?>
                                    <div class="currentPageChoice"><?php echo $choice ?></div>
                                <?php
                            }
                            else {
                                $link = 'blog.php?p=' . $choice;
                                if ($category != "ALL") {
                                    $link .= '&c=' . $category;
                                }
                                ?>
                                <a href="<?php echo $link ?>" class="pageChoice"><?php echo $choice ?></a>
                                <?php
                            }
                        }
                    }

                    // Lowest page choice
                    if ($lowPageChoice != -1) {
                        $link = 'blog.php?p=' . $lowPageChoice;
                        if ($category != "ALL") {
                            $link .= '&c=' . $category;
                        }
                        ?>
                        <div class="pageChoiceDots">...</div>
                        <a href="<?php echo $link ?>" class="pageChoice"><?php echo $lowPageChoice ?></a>
                        <?php
                    }

                    // Previous page choice
                    if ($previousPagePossible) {
                        $link = 'blog.php?p=' . ($pageNumber - 1);
                        if ($category != "ALL") {
                            $link .= '&c=' . $category;
                        }
                        ?>
                        <a href="<?php echo $link ?>" class="pageChoice">< Previous</a>
                        <?php
                    }
                ?>
            </div>
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