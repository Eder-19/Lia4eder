<?php



$conectarBD=@mysqli_connect("localhost","root","","bancol4");



if (!$conectarBD) {

    die("Conexión exitosa");

} else {

    echo "No hay conexion de la conejera";

}




?>
