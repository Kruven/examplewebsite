<?php
$page_title = 'PC Repairs UK';
include ($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');

$diagnostic = 0;
if (isset($_POST['submit'])) {
    $diagnostic = $_POST['diagnoseSelect'];
}
?> 

<div class="contentArea">
    <ul class="pageContent" style="padding: 24px 24px 0 24px">
        <li id="healthCentreMainContent" class="pageText">
            <img src="/includes/images/pcHealthCentre.png" alt="Health Centre">

            <form method="post" id="diagnosticForm">
                <select name="diagnoseSelect" id="diagnoseSelect">
                    <option value="0">Please Select...</option>
                    <option value="1">Disc drive isn't working</option>
                    <option value="2">Screen isn't working</option>
                    <option value="3">Disc drive isn't working</option>
                    <option value="4">Keyboard & mouse are unresponsive</option>
                    <option value="5">Webcam isn't working properly</option>
                    <option value="6">Sound card isn't working</option>
                    <option value="7">Graphics card isn't working</option>
                    <option value="8">Hard drive isn't working properly</option>
                </select>

                <input type="submit" name="submit" value="Diagnose" class="infoButton" style="float: left; width: 100px; height: 29px">
            </form>

            <div id="diagnostic">
            <?php
                switch ($diagnostic) {
                    case 1:
                        ?>
                        <p>Your power supply unit could be unplugged or faulty. Your voltage switch could be pointed to the 110v option rather
                           than the 230v option. You may have a loose connection (if this is the case DO NOT try fix it yourself, this could 
                           result in electrocution or you could damage your system permanently, and should only be fixed by a trained 
                           engineer). Your fuse in your power supply could of burnt out. Your battery may be faulty.</p>
                        <p>Your power connection for the on/off switch could have a loose connection to the motherboard and/or power supply 
                           unit.</p>
                        <p>You could have a virus which has penetrated internal BIOS system and is preventing a successful initiation.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <?php           
                        break;
                    case 2:
                        ?>
                        <p>Your screens VGA/HDMI output cable might not be plugged in properly. Check both ends of the cable. Your power 
                           supply to your monitor may not be plugged in. If you have a laptop however this is either a battery issue or 
                           hardware issue.</p>
                        <p>Hardware Diagnosis – Graphics connection to motherboard may be faulty or loose. Your screen may have broken. Or you 
                           may have other internal issues such as incompatibility.</p>
                        <p>Your drivers may not be installed correctly. You could have a virus which has penetrated internal BIOS system or 
                           your graphics memory which is stopping your graphics displaying on screen.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <?php
                        break;
                    case 3:
                        ?>
                        <p>Your disc drive may not be closed properly, check that nothing is obstructing the closing mechanism. If you are 
                           using an external disc drive, check that it is connected via USB or Firewire and that your drivers are 
                           installed.</p>
                        <p>Your laser could be faulty, scratched or the mechanism which supports and moves the laser could be jammed or 
                           broken. Your connection to the motherboard could be loose or faulty. Your USB/Firewire cable could be faulty or 
                           not plugged in. Your disc drive may be broken and need replacing.</p>
                        <p>Software Diagnosis – You could have a virus which has penetrated your internal memory with your disc drive. Your 
                           drivers may not be installed properly.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <?php
                        break;
                    case 4:
                        ?>
                        <p>Basic Troubleshooting – If your keyboard/mouse is not working and is a wired set-up, check that they are plugged 
                           in correctly. If you use a PS/2 connection make sure they are in their specific input ports. If you use a USB 
                           set-up please make sure they are plugged in properly. However if you use a wireless set-up make sure your 
                           receiver is plugged in and that the batteries are charged sufficiently.</p>
                        <p>Hardware Diagnosis – Your PS/2 I/O connection on your motherboard could be faulty. Your USB ports could be 
                           faulty or need replacement. Your keyboard and mouse may be broken.</p>
                        <p>Hardware Diagnosis – Your PS/2 I/O connection on your motherboard could be faulty. Your USB ports could be 
                           faulty or need replacement. Your keyboard and mouse may be broken.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <?php
                        break;
                    case 5:
                        ?>
                        <p>Basic Troubleshooting – Your webcam may not be plugged in properly (USB), and if you use an internal 
                           manufacturer’s webcam you may need to reinstall drivers or have a loose internal connection.</p>
                        <p>Hardware Diagnosis – Your laser could be faulty, scratched or the mechanism which supports and moves the laser 
                           could be jammed or broken. Your connection to the motherboard could be loose or faulty. Your USB/Firewire 
                           cable could be faulty or not plugged in. Your disc drive may be broken and need replacing.</p>
                        <p>Software Diagnosis – You could have a virus which has penetrated your internal memory with your disc drive. 
                           Your drivers may not be installed properly.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <?php   
                        break;
                    case 6:
                        ?>
                        <p>Check that your line-out cable is connected to the audio input connection (Usually Green), it is a common 
                           mistake that users plug the cable into the wrong port.</p>
                        <p>If you are using an internal PCI sound card then you must ensure that the sound card is fully connected in the 
                           correct slot.</p>
                        <p>Make sure you have the correct drivers installed, you may need to locate your maunfacturers website for 
                           additional support.</p>
                        <p>Check that your sound card is compatible with your current OS, many users re-use old sound cards in newer 
                           systems, this can cause compatabilty problems.</p>
                        <p>Has your card been unplugged and left outside of an anti-static packaging, you may have cause static shock to 
                           the device making it unusable.</p>
                        <p>A computer virus may be stopping the output, some viruses can implement themselves into the systems 
                           arcitechture causing no signal.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <?php
                        break;
                    case 7:
                        ?>
                        <p>Check that your Graphics card is connected correctly to your AGP/ PCI slot and the power cable is plugged 
                           into the card correctly.</p>
                        <p>Ensure you have the correct drivers installed, please use the manufacturers website to locate the correct 
                           drivers for your graphics card.</p>
                        <p>Make sure your graphics card is compatible with your current OS, older cards generally won't be supported with 
                           newer operating systems.</p>
                        <p>Is your graphics card compatible with the motherboard, some cheaper boards don't support more powerful cards.</p>
                        <p>Your PSU (Power Supply Unit) may not supply adequate power to the system, this can cause misbehaviour from the 
                           graphics card. It is a common fault with custom builds to use the PSU supplied within the case, more often than 
                           not it is not adequate.</p>
                        <p>A computer virus may be stopping the output, some viruses can implement themselves into the systems arcitechture 
                           causing no signal.</p>
                        <p>Check the card is recognised by the system upon boot intitiation, most motherboards supply information about 
                           connected devices at this stage.</p>
                        <p>Has your card been unplugged and left outside of an anti-static packaging, you may have cause static shock to the 
                           device making it unusable.</p>
                        <p>You could have a virus which has penetrated internal BIOS system and is preventing a successful initiation.</p>
                        <p>Your screens VGA/HDMI output cable might not be plugged in properly. Check both ends of the cable. Your power 
                           supply to your monitor may not be plugged in. If you have a laptop however this is either a battery issue or 
                           hardware issue.</p>
                        <p>A computer virus may be stopping the output, some viruses can implement themselves into the systems arcitechture 
                           causing no signal.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <p>If your trying to run a new game/ software, check the software/ games manual to check graphical specifications, 
                           you may need to update your graphics card.</p>
                        <p>Performance issues in the bios to ensure all devices are running at optimal levels.</p>
                        <p>If you have more than one graphics cards installed in the system, check power usage and the bridge connection 
                           between the card and check all connections.</p>
                        <?php
                        break;
                    case 8:
                        ?>
                        <p>If you have a new hard drive installed make sure you have the correct firmware, this can cause drive errors within 
                           the system.</p>
                        <p>Listen carefully upon starting the computer as you may hear a ticking noise, this is known as the "Tick of Death". 
                           Usually when you here this sound it indicates that the hard drive has a serious fault within the internal 
                           mechanism. If you can get the hard drive bootable retrieve any valuable information imediatley before the 
                           device no longer works at all.</p>
                        <p>Sometimes the problem may not be the hard drive directly, it can be OS corruptions or the simple need to clean 
                           cluster tables and system registry.</p>
                        <p>You may have a virus that has infected the OS which can appear as though the hard drive is unresponsive.</p>
                        <p>Check all power connections and SATA/ IDE connections to ensure the hard drive is correctly configured 
                           internally.</p>
                        <p>Load up the BIOS to check that the system recognises the hard drive.</p>
                        <p>Within the BIOS check that you have allocated the drives to their specific placement, ie primary, secondry.</p>
                        <p>If your hard drive is a master/ slave ensure you have allocated the correct pin configuration, many users 
                           forget about this step. This is usually more important on older computers.</p>
                        <p>Has your hard drive been partioned? If so then you should possibly re-format the drive and start again due to 
                           partition errors.</p>
                        <p>As a final check reformat the drive to create a new bootable copy of your OS, this can sometimes fix many known 
                           issues.</p>
                        <p>Has the hard drive been dropped? If so then the chances are you have severley damaged the internal components 
                           and it will not boot again. Valuable data can still be retrieved at a higher cost, but you should always keep 
                           a secondry back-up of data just in case.</p>
                        <p>If your hard drive is within a Laptop/ Notebook and you have dropped the system on the floor then it is likely 
                           that the drive is damaged beyond repair, you should get a new hard drive and reinstall it.</p>
                        <p>Whilst installing other operating systems such "Ubuntu" or Apples "Lion/ Leopard OSX", some users create 
                           "Swap files" that are either to big or to small, causing hard drive failures or corruptions.</p>
                        <p>Virus/Spyware/Adware/Malware Software Section</p>
                        <p>What should I do now! – If your system is still showing the symptoms after performing our basic troubleshooting 
                           routine, we suggest you book your computer for collection. <b>Call 01234 123456 Now!</b></p>
                        <?php
                        break;
                }
            ?>
            </div>
        </li>

        <li id="healthCentreSidebar" class="sidebar">
            <img src="/includes/images/quickHelp.png" alt="Quick Help">

            <div>
                <p class="title">Computer isn't turning on</p>
                <div class="box">
                    <p>Here at PC Repairs Hull we often see many computers suffering from power failure, although there are many checks that 
                       can be performed to…</p>
                    <a href="computerIsntTurningOn.php">Learn More</a>
                </div>
            </div>

            <div>
                <p class="title">Screen isn't working</p>
                <div class="box">
                    <p>It can be really frustrating trying to troubleshoot a broken screen, the problem can lie in several places such as 
                       connections or hardware failure.…</p>
                    <a href="screenIsntWorking.php">Learn More</a>
                </div>
            </div>

            <div>
                <p class="title">Disc drive isn't working</p>
                <div class="box">
                    <p>Although a disc drive is not a fundamental component to run the computer it does have its requirements when trying to 
                       perform some of…</p>
                    <a href="discDriveIsntWorking.php">Learn More</a>
                </div>
            </div>

            <div>
                <p class="title">Keyboard & mouse are unresponsive</p>
                <div class="box">
                    <p>To have the ability to perform common tasks on a computer requires the use of a mouse and keyboard, without it you 
                       basically have…</p>
                    <a href="keyboardAndMouseAreUnresponsive.php">Learn More</a>
                </div>
            </div>

            <div>
                <p class="title">Webcam isn't working properly</p>
                <div class="box">
                    <p>The webcam in modern times is a window to the world and allows us as computer users to contact and see people all 
                       over…</p>
                    <a href="webcamIsntWorkingProperly.php">Learn More</a>
                </div>
            </div>

            <div>
                <p class="title">Sound card isn't working</p>
                <div class="box">
                    <p>In todays society it is almost essential that your computer/ laptop or Mac will require sound to perform some of the 
                       most basic features…</p>
                    <a href="soundCardIsntWorking.php">Learn More</a>
                </div>
            </div>

            <div>
                <p class="title">Graphics card isn't working</p>
                <div class="box">
                    <p>Graphics cards are mainly used for advanced graphical elements within software or games, most home users won’t have
                       this problem due to the fact…</p>
                    <a href="graphicsCardIsntWorking.php">Learn More</a>
                </div>
            </div>

            <div>
                <p class="title">Hard drive isn't working properly</p>
                <div class="box">
                    <p>The hard drive is in essense the most important part of the computer, it stores all the valuable information regarding 
                       the computers operations and…</p>
                    <a href="hardDriveIsntWorkingProperly.php">Learn More</a>
                </div>
            </div>

            <img src="/includes/images/healthCentreMascot.png" alt="Health Centre Mascot">
        </li>
    </ul>

    <br class="clear">
</div>

<script src="healthCentreSidebar.js"></script>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
?>