<?php

class File{
    function showFileInfo($filename){
        echo "The name of the file that will open is <b> $filename</b>";
        echo PHP_EOL;
        $content =file_get_contents($filename);
        echo "<hr> file content is : {$content}";
    }
}

$file1 = new File();
$file1->showFileInfo("test.txt");