<?php
// $txt_file = fopen('./lista.txt','r');
// $a = 1;
// while ($line = fgets($txt_file)) {
//  echo($a." ".$line)."<br>";
//  $a++;
// }
// fclose($txt_file);


/**
 *  Path
 */
// $lines = file('./lista.txt');
// foreach ($lines as $num=>$line)
// {
//  echo 'Line '.$num.': '.$line.'<br/>';
// }


/**
 * 
 */
// $contents=file_get_contents("./lista.txt");
// $lines=explode("\n",$contents);
// foreach($lines as $line){
//  echo $line.'<br>';

// }
/**
 *    
 */
// $fp = fopen("./lista.txt", "r");
// while (!feof($fp)){
//     $linea = fgets($fp);
//     echo $linea;
// }
// fclose($fp);
/**
 * 
 */
// $fp = fopen("lista.txt", "r");
// while ($animalinfo = fscanf($fp, "%s\t%s")){
//     list($animal, $nombre) = $animalinfo;
//     echo "El " . $animalinfo[0] . " se llama {$animalinfo[1]} <br>";
// }
// fclose($fp);

/**
 * 
 */
// $fp = fopen("lista.txt","r");
// // Lee la primera línea, que es Esta es la línea 1
// fgets($fp);
// // Envía el resto del archívo al output buffer
// echo fpassthru($fp);
// /* Devuelve el resto de líneas:
// Esta es la línea 2
// Esta es la línea 3
// Esta es la línea 4
// Y el número de caracteres: 59, porque hemos hecho echo
// */
// fclose($fp);

// if($fp = fopen('lista.txt', 'r')) {
//    while (false !== ($caracter = fgetc($fp))) {
//        echo "$caracter\n";
//    }
// }


/**
 * 
 */
// Devuelve el contenido de un archivo
// readfile("lista.txt");
// // Devuelve el contenido y el número de bytes, 79
// $contenido = readfile("miarchivo.txt");
// echo $contenido;
/**
 * 
*/
// $array = file("lista.txt", FILE_IGNORE_NEW_LINES);
// var_dump($array);

/**
 * 
 */
// $array = parse_ini_file("./lista.txt");
// var_dump($array);

/**
 * 
 */
$fp = fopen("lista.txt", "r");
fseek($fp, 28);

while(!feof($fp)){
    $linea = fgets($fp);
    echo $linea;
}
fclose($fp);


?>