<?php
/*
    in this file, we will show the all of the videos,
    from most recent to oldest
*/

require_once('../video-manager.php');

?>


<!doctype html>
<html>
    
<head>
    <title>FHS1 Past Announcements</title>
    <link rel="stylesheet" href="../style.css" type="text/css" />
</head>
    
<body>
    <div id="container" class="white small-width">
        
        <!-- announcements video -->
        <div id="left" class="white full">
            <div id="header">
                <img src="../images/falcon.png" alt="Frontier" id="logo-falcon" />
                <h1>FHS1</h1>
            </div>
            <div style="padding: 20px;">
            <h2>Past announcements</h2>
                <table id="announce-past"><?php
                    $video_files = get_video_filenames('../uploads');
                    foreach ($video_files as $file) {
                        $mtime = date('F j, Y', filemtime("../uploads/$file"));
                        echo "<tr>\n";
                        echo "<td><a href=\"../?file=$file\">$mtime</a></td>";
                        echo "</tr>\n";
                    }
                ?></table>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
</body>
    
</html>