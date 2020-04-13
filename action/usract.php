<?php

$dir    = 'C:\\xampp\\htdocs\\esp32panel\\InfoESP';
$files2 = scandir($dir, 1);


for($i = 0; $i < (sizeof($files2)-2); $i++){
    $lasts[$i] = str_replace(".txt","",$files2[$i]);
}


$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
switch($req){
    
    case 1:

        $url = @file_get_contents('http://192.168.0.111');
        $url = json_decode($url,true);
        if(isset($url['Temperature'])){
        date_default_timezone_set('America/Sao_Paulo');
        $arquivo = date("d-m-Y H'i's").".txt";
        $fp = fopen("C:\\xampp\\htdocs\\esp32panel\\InfoESP\\".$arquivo, "w");
        $ndata = str_replace('.txt','', $arquivo);
        $texto = $url['Temperature'].','.$url['Luminosity'].','.$ndata;
        fwrite($fp,   print_r($texto, TRUE));
        fclose($fp);
        echo $texto;
        }
        else{
            echo "0";
        }

    break;
    
    case 2:

        $dir    = 'C:\\xampp\\htdocs\\esp32panel\\InfoESP';
        $files2 = scandir($dir, 1);
        $arquivo = $files2[0];
        if($fp = @fopen("C:\\xampp\\htdocs\\esp32panel\\InfoESP\\".$arquivo, "r")){
            $recebe = fread($fp, filesize("C:\\xampp\\htdocs\\esp32panel\\InfoESP\\".$arquivo));
            fclose($fp);
            echo $recebe;
        }
        else{
            echo "0";
        }
        
    break;

    case 3:

        $slct = $_GET['oget'];
        $divid = explode(",", $slct);
        $arquivo = $divid[0].".txt";
        $dir    = 'C:\\xampp\\htdocs\\esp32panel\\InfoESP\\';        
        $fp = fopen($dir.$arquivo, "r");
        if($recebe = fread($fp, filesize($dir.$arquivo))){
            fclose($fp);
            echo $divid[1].",".$recebe;
        }
        else{
            fclose($fp);
            echo "0";
        }
        
    break;

    default:
        echo "0";
    break;
    
} 



?>
