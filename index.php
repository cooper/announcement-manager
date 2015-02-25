<?php
/*
    in this file, we will show the most recent
    video and a list of older videos
*/

require_once('video-manager.php');
$video_files = get_video_filenames();
$latest_file = isset($_GET['file']) ? $_GET['file'] : array_shift($video_files);

?>
<!doctype html>
<html>
    
<head>
    <title>FHS1 News</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css" />
    <script src="mootools.js" type="text/javascript"></script>
    <script src="announce.js" type="text/javascript"></script>
</head>
    
<body>
    <div id="container">
        
        <!-- announcements text -->
        <div id="right">
            <!--<img id="to-sidebar-logo" src="images/header.png" alt="Frontier" />-->
            <div id="to-sidebar-info">
                <div id="to-sidebar-temp"></div>
                <h2 id="to-announcements-header">Announcements</h2>
            </div>
            <div class="th-sidebar-section" id="to-announcements">
                <div id="sad-falcon">
                    <img src="images/sad-falcon.jpg" alt=":(" /><br /><br />
                    <!--<b>Today's announcements have not been posted.</b>-->
                </div>
            </div>
            
            <h2 id="to-meetings-header">
                Meetings<span style="color: #ffb0b0; font-size: 60%">&nbsp;&nbsp;this week</span>
            </h2>
            <div class="th-sidebar-section" id="to-meetings"></div>

            <div class="th-sidebar-section" id="to-meals">
                <table id="to-menu-table">
                <tr style="background-color: #d64141">
                    <th>Breakfast</th>
                    <th>Lunch</th>
                </tr>
                <tr>
                    <td id="to-breakfast"></td>
                    <td id="to-lunch"></td>
                </tr>
                </table>
            </div>
            
        </div>
        
        <!-- announcements video -->
        <div id="left">
            <div id="header">
                <img src="images/falcon.png" alt="Frontier" id="logo-falcon" />
                <h1>FHS1</h1>
            </div>
            
            <!-- this works on Chrome on Windows -->
            <video id="player" width="320" height="240" controls>
                <source src="uploads/<?= $latest_file ?>">
                This browser doesn't support video tag. Please use Chrome.
            </video>
            <div id="footer">
                <div style="float: right;">
                    <a href="past/">Past announcements</a>
                    &nbsp;&nbsp;
                </div>
                &nbsp;&nbsp; &copy;
                <?php echo date('Y') ?> FHS1 Productions
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
</body>
    
</html>