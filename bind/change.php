<?php





$slct = $_GET['oget'];
$arquivo = $slct.".txt";





$dir    = 'C:\\xampp\\htdocs\\esp32panel\\InfoESP\\';
 
    $fp = fopen($dir.$arquivo, "r");
    $recebe = fread($fp, filesize($dir.$arquivo));
    fclose($fp);
     

print_r($recebe);



