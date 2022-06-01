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

  <title>DATOS</title>
  </head>
  <body>
    <h1>DATOS</h1>
    <h2>Añadir Datos</h2>
    <form action="registrodatos.php" method="POST">

      <div class="mb-3">
        <label for="form-label">nombre</label>
        <input
          type="text"
          class="form-control"
          name="Nombre"
        />
      </div>

      <div class="mb-3">
        <label for="form-label">apellido paterno</label>
        <input
          type="text"
          class="form-control"
          name="ApePaterno"
        />
      </div>
      <div class="mb-3">
        <label for="form-label">apellido materno</label>
        <input
          type="text"
          class="form-control"
          name="ApeMaterno"
        />
      </div>

      <div class="mb-3">
        <label for="form-label">numero</label>
        <input
          type="text"
          class="form-control"
          name="Telefono"
        />
      </div>

      <div class="mb-3">
        <label for="form-label">correo</label>
        <input
          type="text"
          class="form-control"
          name="Correo"
        />
      </div>

      <div class="mb-3">
        <label for="form-label">usuario</label>
        <input
          type="text"
          class="form-control"
          name="Usuario"
        />
      </div>

      <div class="mb-3">
        <label for="form-label">contraseña</label>
        <input
          type="text"
          class="form-control"
          name="Contra"
        />
      </div>


      <button type="submit" name="enviar" class="btn btn-primary"value="añade usuario">Añadir usuario
      </button>
    </form>
      <!-- inicio de la tabla -->
  <table class="table">
    <thead>
      <tr>
        <th scope="row">#</th>
        <th scope="col">nombre</th>
        <th scope="col">apellido_paterno</th>
        <th scope="col">apellido_materno</th>
        <th scope="col">numero</th>
        <th scope="col">correo</th>
        <th scope="col">usuario</th>
        <th scope="col">contraseña</th>

      </tr>
    </thead>
    <tbody>
<?php  
  include('conec.php');
  $consulta = "SELECT * FROM Datos";

  $resultado = mysqli_query($conexion,$consulta);
  while($fila = mysqli_fetch_array($resultado)){
  ?>
  <tr>
  <th scope="row"><?php echo $fila ['Codigo'] ?></th>
  <td><?php echo $fila ['Nombre'] ?></td>
  <td><?php echo $fila ['ApePaterno'] ?></td>
  <td><?php echo $fila ['ApeMaterno'] ?></td>
  <td><?php echo $fila ['Telefono'] ?></td>
  <td><?php echo $fila ['Correo'] ?></td>
  <td><?php echo $fila ['Usuario'] ?></td>
  <td><?php echo $fila ['Contra'] ?></td>
  <!--boton eliminar-->
  <!-- <td> <a target="_self"href="acciones/eliminarRegistro.php?id=<?php echo $fila ['Codigo'] ?>"><i class="bi bi-trash text-danger"></i></td> -->

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