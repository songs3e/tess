<?php



$url = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/222579/Kevin_MacLeod_-_Camille_Saint-Sans_Danse_Macabre_-_Finale.mp3";



// Crear opciones de la petición HTTP
$opciones = array(
    "http" => array(
        "header" => "Content-type: application/x-www-form-urlencoded\r\n",
        "method" => "GET",
    ),
);
# Preparar petición
$contexto = stream_context_create($opciones);
# Hacerla
$resultado = file_get_contents($url, false, $contexto);
if ($resultado === false) {
    echo "Error haciendo petición";
    exit;
}

# si no salimos allá arriba, todo va bien
var_dump($resultado);