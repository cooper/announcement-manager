<?php

function get_video_filenames () {
    return get_files_in_order('uploads', 'MOV');
}

// returns files of a directory with most recent first
function get_files_in_order ($dir, $ext) {
    $ignored = array('.', '..', '.git', '.htaccess', 'web.config');
    $files   = array();   
    
    foreach (scandir($dir) as $file) {
        
        // ignored file
        if (in_array($file, $ignored))
            continue;
        
        // extension not allowed
        $file_ext = pathinfo($file, PATHINFO_EXTENSION);
        if (strlen($ext) && $ext != $file_ext)
            continue;
        
        // get the modification time
        $files[$file] = filemtime("$dir/$file");
        
    }

    // return filenames
    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
}

?>