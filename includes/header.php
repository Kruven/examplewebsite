<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../includes/StyleSheet.css">

        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <script src="../Flux-Slider/js/flux.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="../headerScript.js"></script>

        <title><?php echo $page_title; ?></title>
    </head>

    <body>
        <?php
        // Get all the images for the main slider
        $slides = array();
        include($_SERVER['DOCUMENT_ROOT'].'/mysqlConnect.php');

        $result = $mysqli->query("SELECT * FROM headerSlides");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $slides[] = $row['slide'];
        }
        ?>

        <div id="background">
            <div id="header">
                <ul id="topHeader">
                    <li class="leftHeader">
                        <img src="../includes/images/facebookButton.png" alt="fb" id="facebookButton">
                        <img src="../includes/images/twitterButton.png" alt="fb" id="twitterButton">
                        <p>10% Off. Facebook & Twitter Subscribers.</p>
                    </li>

                    <li class="rightHeader">
                        <p>
                            <img src="../includes/images/phone.png" id="phone" alt="phone">
                            <a href="../businessServices/index.php">BUSINESS SERVICES</a>
                            |
                            <a href="javascript:;" id="requestCallbackLink">REQUEST A CALLBACK</a>
                        </p>
                    </li>
                </ul>

                <div id="bottomHeader">
                    <div id="headerSlider">
                        <?php
                        for ($x = 0; $x < sizeof($slides); $x++) {
                            ?>
                            <img src="../includes/images/headerSlides/<?php echo $slides[$x] ?>" alt="#">
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <ul id="navBar">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../aboutUs.php">About Us</a></li>
                    <li><a href="../productsAndServices.php">Products & Services</a></li>
                    <li><a href="../healthCentre">Health Centre</a></li>
                    <li><a href="../blog.php">Blog</a></li>
                    <li style="float: right; margin-right: 40px"><a href="../contactUs.php">Contact Us</a></li>
                </ul>

                <div id="callbackContainer">
                    <img src="../includes/images/crossButton.png" alt="Exit" id="exitButton">
                    <img src="../includes/images/requestCallback.png" alt="#" id="requestCallback">

                    <form method="post" class="fancyForm">
                        <ul>
                            <li>
                                <p>Name:</p>
                                <div class="inputContainer"><input type="text"></div>
                            </li>
                            <li>
                                <p>E-mail:</p>
                                <div class="inputContainer"><input type="text"></div>
                            </li>
                            <li>
                                <p>Telephone:</p>
                                <div class="inputContainer"><input type="text"></div>
                            </li>

                            <li class="buttonsContainer">
                                <input type="button" name="send" value="Send" class="infoButton" style="line-height: 0; float: right">
                            </li>
                        </ul>
                    </form>
                </div>
            </div>

            <script>
                $("#exitButton").click(function () {
                    $("#callbackContainer").hide();
                })

                $("#requestCallbackLink").click(function () {
                    $("#callbackContainer").show();
                })
            </script>

