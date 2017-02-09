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
        
        // If someone is logged in, redirect them to the admin panel
        if (isset($_SESSION['userId'])) {
            include('../redirect.php');
            redirect("adminPanel.php");
        }       

        // If the log in form has been submitted
        if (isset($_POST['logInSubmit'])) {
            // Connect to the database
            include('../mysqlConnect.php');

            // If an error has occured
            $error = FALSE;
            
            // Get the username
            if (isset($_POST['username'])) {
                $username = testInput($_POST['username']);
            }
            else { $error = TRUE; }

            // Get the password
            if (isset($_POST['password'])) {
                $password = testInput($_POST['password']);
            }
            else { $error = TRUE; }

            // If an error did not occur
            if ($error == FALSE) {
                // Check to see if this account exists
                $query = "SELECT * FROM accounts where username = '$username' AND password = SHA('$password')";
                $result = $mysqli->query($query);
                $row = mysqli_fetch_array($result);

                // If a user was found
                if (@mysqli_num_rows($result) == 1) {
                    // Store the user in a session
                    $_SESSION['userId'] = $row[0];

                    // Redirect the user to the admin page
                    include('../redirect.php');
                    redirect("adminPanel.php");
                }
                // Else; if a user was not found
                else { $error = TRUE; }
            }

            // If an error occured, tell the user
            if ($error = TRUE) {
                echo 'You entered an invalid username or password';
            }
        }
        ?>

        <div id="logInArea">
            <form method="post">
                <ul>
                    <li>
                        <p>Username:</p>
                        <input type="text" name="username">
                    </li>
                    <li>
                        <p>Password:</p>
                        <input type="password" name="password">
                    </li>
                    <li>
                        <input type="submit" name="logInSubmit" value="Log In">
                    </li>
                </ul>
            </form>
        </div>
    </body>
</html>
