 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/baseDatos.php");
include("backend/consultarProgramaDelete.php");

 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/deletePrograma.php">
    <!-- <input type="text" name="nameRegion">  -->
    
        <h4>Por favor seleccione el programa que desea eliminar<select class="form-control form-control-lg" name="programa" id="programa">
          <?php
    if ($totalRegistros>0) {

  echo "<option value='-1'>Seleccione un programa...</option>";
    while ($fila=mysqli_fetch_array($resul2)) {

        echo "<option value=".$fila['id_prog'].">".$fila['nombre_prog']."</option>";
    }
}
            ?>

            </select>
            <br>


    <br>
    <button type="submit" class="btn btn-primary" name="eliminar">Eliminar</button>
    <!-- <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button> -->
  </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</main>

<?php
include("footer.php");
?>
