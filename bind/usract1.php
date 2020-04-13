<?php

    $dir    = 'C:\\xampp\\htdocs\\esp32panel\\InfoESP';
    $files2 = scandir($dir, 1);


    for($i = 0; $i < (sizeof($files2)-2); $i++){
    $lasts[$i] = str_replace(".txt","",$files2[$i]);
    }

    
?>
