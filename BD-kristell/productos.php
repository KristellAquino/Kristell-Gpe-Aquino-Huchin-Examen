<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

  <title>PRODUCTOS</title>
  </head>
  <body>
    <h1>PRODUCTOS</h1>
    <h2>Insertar Producto</h2>
    <form action="registroproducto.php" method="POST">
      <div class="mb-3">
        <label for="form-label">Producto</label>
        <input
          type="text"
          class="form-control"
          name="nomProducto"
        />
      </div>

      <div class="mb-3">
        <label for="form-label">Precio</label>
        <input
          type="text"
          class="form-control"
          name="Precio"
        />
      </div>

      <div class="mb-3">
        <label class="form-label">ingresa el Fabricante</label>
        <select class="form-label" aria-label="Default select example" name="codigoFabricante">

        <?php 
        include('conec.php');
        $consulta2 = "SELECT * FROM fabricante;";
        $resultado2 = mysqli_query($conexion,$consulta2);
        while($fila2 = mysqli_fetch_array($resultado2)){
        ?>
        <option value="<?php echo $fila2["codigo"]?>">"<?php echo $fila2["nombre"]?>"</option>
        <?php } ?>
        </select>
      </div>

      <button type="submit" name="enviar" class="btn btn-primary"value="Insertar Producto"
      >
        Insertar producto
      </button>
    </form>
      <!-- inicio de la tabla -->
  <table class="table">
    <thead>
      <tr>
        <th scope="row">#</th>
        <th scope="col">Producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Fabricante</th>
        <th scope="col">Eliminar</th>

      </tr>
    </thead>
<tbody>
<?php 
  include('conec.php');
  $consulta = "SELECT producto.codigo, producto.nombre, producto.precio, fabricante.nombre AS NFabricante
  FROM producto INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo ;";
  $resultado = mysqli_query($conexion,$consulta);
  while($fila = mysqli_fetch_array($resultado)){
  ?>
  <tr>
  <th scope="row"><?php echo $fila ['codigo'] ?></th>
  <td><?php echo $fila ['nombre'] ?></td>
  <td><?php echo $fila ['precio'] ?></td>
  <td><?php echo $fila ['NFabricante'] ?></td>
  <!--boton eliminar-->
  <td> <a target="_self"href="acciones/eliminarProductos.php?id=<?php echo $fila ['codigo'] ?>"><i class="bi bi-trash text-danger"></i></td>

 </tr>
  <?php } ?>

</tbody>
<!-- fin de la tabla -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>