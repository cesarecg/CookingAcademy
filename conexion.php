<?php

function retornarConexion() {
    $server="mysql5042.site4now.net";
    $usuario="a6976d_leconca";
    $clave="danteandvergil1";
    $base="db_a46df8_port";
    $con=mysqli_connect($server,$usuario,$clave,$base) or die("problemas") ;
    mysqli_set_charset($con,'utf8'); 
    return $con;
}
function file_name($string) {

    // Tranformamos todo a minusculas

    $string = strtolower($string);

    //Rememplazamos caracteres especiales latinos

    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

    $repl = array('a', 'e', 'i', 'o', 'u', 'n');

    $string = str_replace($find, $repl, $string);

    // Añadimos los guiones

    $find = array(' ', '&', '\r\n', '\n', '+');
    $string = str_replace($find, '-', $string);

    // Eliminamos y Reemplazamos otros carácteres especiales

    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

    $repl = array('', '-', '');

    $string = preg_replace($find, $repl, $string);

    return $string;
}
?>