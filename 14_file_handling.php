<?php
/* -------- File Handling --------- */

/* file handling is the ability to read and write files on the server.
 Php has built in functions reading and writing files. */

 $file = 'extras/files.txt';

 if (file_exists($file)) {
    // echo readfile($file);

    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
 } else {
    $handle = fopen($file, 'w');
    $contents = 'brad' . PHP_EOL . 'MICHAEL' . PHP_EOL .'GRACE';
    fwrite($handle, $contents);
    fclose($handle);
    echo $file;
 }
?>