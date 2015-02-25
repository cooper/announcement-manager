<?php

// this directory should be protected with authentication
    require('secure.php');
    require_once('../video-manager.php');

?>

<!doctype html>
<html>
    
<head>
    <title>FHS1 Upload</title>
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
            
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select video
                <input type="file" name="uploadFile" id="uploadFile" />
                <input type="submit" value="Upload" name="submit" />
            </form>

        </div>
        <div style="clear: both;"></div>

    </div>
</body>
    
</html>