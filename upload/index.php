<?php

// this directory should be protected with HTTP authentication

?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select video
    <input type="file" name="uploadFile" id="uploadFile" />
    <input type="submit" value="Upload" name="submit" />
</form>

</body>
</html>