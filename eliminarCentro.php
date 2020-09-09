 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/deleteCentro.php");

 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/deleteCentroBackend.php">

        <h4>Por favor seleccione el centro que desea eliminar<select class="form-control form-control-lg" name="centro" id="centro">
          <?php
            if ($totalRegistros>0) {

                while($fila = mysqli_fetch_array($resul)){ 
              echo "<option value=".$fila['id_cent'].">".$fila['nombre_cent']."</option>";
       
              }
            }else{
                echo "No hay datos en la base de datos";
            }
            ?>

            </select>
            <br>


    <br>
    <button type="submit" class="btn btn-primary">Eliminar</button>
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
