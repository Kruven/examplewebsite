<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <link href='adminStyle.css' rel='stylesheet' type='text/css'>

        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <title>Admin</title>
    </head>
    <body>
        <?php
        // Start the session
        session_start(); 
        
        // If there is no session set, redirect the user to the log in page
        if (!isset($_SESSION['userId'])) {
            include('../redirect.php');
            redirect("index.php");
        }           

        // -------------------- Set the duration of sessions -------------------- \\
        // The default session life time - 30 minutes
        ini_set(session.gc_maxlifetime, 1800);

        // Create an activity tracker to destroy session data after a certain amount of inactivity
        // If the time is being tracked and the user has not been active for over 30 minutes
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
            // Unset the session
            session_unset();
            // Destroy the session data
            session_destroy();
        }
        // Update the activity timer
        $_SESSION['LAST_ACTIVITY'] = time();

        // Automatically regenerate session ids to prevent session fixation
        // Create a session time tracker if there isn't already one
        if (!isset($_SESSION['CREATED'])) {
            $_SESSION['CREATED'] = time();
        } 
        // If the session has been active for more than 30 minutes
        else if (time() - $_SESSION['CREATED'] > 1800) {
            // Change the session id
            session_regenerate_id(true);
            // Update the timer
            $_SESSION['CREATED'] = time();
        }
        // ---------------------------------------------------------------------- \\
        ?>

        <div id="header">
            <h1>Admin Panel</h1>
            <a href="signOut.php">Sign Out</a>
        </div>

        <div id="sidebar">
            <ul>
                <li><a href="headerPanel.php">Header</a></li>
                <li><br></li>
                <li><a href="homePagePanel.php">Home</a></li>
                <li><a href="aboutUsPanel.php">About Us</a></li>
                <li><br></li>
                <li><a href="sidebarPanel.php">Sidebar</a></li>
                <li><br></li>
                <li><a href="blogPanel.php">Blog</a></li>
                <li><br><br></li>
                <li><a href="sourcePanel.php">View Source</a></li>
            </ul>
        </div>
