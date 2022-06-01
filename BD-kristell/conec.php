<?php
//Datos de la db
$hostname = 'localhost'; //127.0.0.1
$username = 'root';
$password = '3128';
$database = 'tienda';
//query para la conexion a la db
$conexion = mysqli_connect($hostname,$username,$password,$database);
//validador de conexion de la db
if(mysqli_connect_error()){
    //echo'conexion fallida';
}else{
    //echo'conexion exitosa';
}

?>