<?php
$page_title = 'PC Repairs UK';
include ('./includes/header.php');

// Get the title and the text
$title = '';
$text = '';
$query = "SELECT * FROM contactUsContent";
$result = $mysqli->query($query);

$row = mysqli_fetch_array($result);
$title = $row['title'];
$text = $row['text'];

// Get all the images
$sidebarImages = array();

$query = "SELECT * FROM sidebarImages";
$result = $mysqli->query($query);
while ($row = mysqli_fetch_array($result)) {
    $sidebarImages[] = $row['image'];
}
?> 

<div class="contentArea">
    <ul class="pageContent">
        <li class="pageText">
            <h1><?php echo $title ?></h1>
            <p><?php echo nl2br($text) ?></p>

            <form class="contactForm">
                <ul>
                    <li>
                        <!-- Name -->
                        <ul>
                            <li class="left1">
                                <p>Name:</p>
                            </li>
                            <li class="right">
                                <div class="inputContainer">
                                    <input type="text" id="name">
                                </div>
                            </li>
                        </ul>
                        <!-- Email -->
                        <ul>
                            <li class="left2">
                                <p>Email:</p>
                            </li>
                            <li class="right">
                                <div class="inputContainer">
                                    <input type="text" id="email">
                                </div>
                            </li>
                        </ul>
                        <!-- Telephone -->
                        <ul>
                            <li class="left1">
                                <p>Telephone:</p>
                            </li>
                            <li class="right">
                                <div class="inputContainer">
                                    <input type="text" id="telephone">
                                </div>
                            </li>
                        </ul>
                        <!-- Reason for Enquiry -->
                        <ul>
                            <li class="left2">
                                <p>Reason for Enquiry:</p>
                            </li>
                            <li class="right">
                                <div class="inputContainer">
                                    <select id="enquiry">
                                        <option value="Select">Please Select...</option>
                                        <option value="PC Repair">PC Repair</option>
                                        <option value="Laptop/Notebook Repair">Laptop/Notebook Repair</option>
                                        <option value="Mac Repair">Mac Repair</option>
                                        <option value="Mobile Phone Repairs">Mobile Phone Repairs</option>
                                        <option value="Virus/Malware/Spyware">Virus/Malware/Spyware</option>
                                        <option value="Hardware/Software">Hardware/Software</option>
                                        <option value="Other Enquiry">Other Enquiry</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                        <!-- Your Message -->
                        <ul class="textarea">
                            <li class="left1">
                                <p>Your Message:</p>
                            </li>
                            <li class="right">
                                <div class="textareaContainer">
                                    <textarea rows="10" cols="35" id="message" style="resize: none"></textarea>
                                </div>
                            </li>
                        </ul>
                        <!-- How did you find us? -->
                        <ul>
                            <li class="left2">
                                <p>How did you find us?:</p>
                            </li>
                            <li class="right">
                                <div class="inputContainer">
                                    <select id="findUs">
                                        <option value="Select">Please Select...</option>
                                        <option value="Google">Google</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Referal">Referal</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                        <!-- Buttons -->
                        <ul>
                            <li class="buttonsContainer">
                                <input type="button" name="send" value="Send" class="infoButton" style="line-height: 0; float: right">
                                <input type="button" name="clear" value="Clear" class="infoButton" id="clearButton" style="line-height: 0; float: right; margin-right: 20px">
                            </li>
                        </ul>
                    </li>
                </ul>
            </form>
        </li>

        <li class="sidebar">
            <?php
            for ($x = 0; $x < sizeof($sidebarImages); $x++) {
                ?>
                <img src="<?php echo 'includes/images/sidebarImages/' . $sidebarImages[$x] ?>" alt="#">
                <?php
            }
            ?>
        </li>
    </ul>

    <br class="clear">
</div>

<script>
    $(document).ready(function () {
        $("#clearButton").click(function () {
            $("#name").val("");
            $("#email").val("");
            $("#telephone").val("");
            $("#enquiry").val("Select");
            $("#message").val("");
            $("#findUs").val("Select");
        });
    });
</script>

<?php
include ('./includes/footer.php');
?>