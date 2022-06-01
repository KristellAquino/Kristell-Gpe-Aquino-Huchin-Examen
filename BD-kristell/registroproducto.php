<?php

include('conec.php');

if(isset($_POST['enviar'])){

    $nomProducto = $_POST['nomProducto'];
    $Precio = $_POST['Precio'];
    $Codigo = $_POST['Codigo'];

    $insertarProducto = "INSERT INTO producto (nombre,precio,codigo_fabricante) VALUES( '$nomProducto','$Precio','$Codigo')";

    $resultado = mysqli_query($conexion,$insertarProducto);

    if(!$resultado){
        echo '<script>alert("Los datos no se insertaron")</script>';
    }else{
        echo '<script>alert("Los datos se insertaron")</script>';
    }
}

header('location: index.html');
?>