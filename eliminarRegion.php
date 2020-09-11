 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/baseDatos.php");
include("backend/consultarRegional.php");

 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/delete.php">
    <input type="text" name="nameRegion"> 
    
        <h4>Por favor seleccione la regional que desea eliminar<select class="form-control form-control-lg" name="region" id="region">
          <?php
            if ($numReg>0) {

                while($fila = mysqli_fetch_array($resultado)){ 
              echo "<option value=".$fila['id_regi'].">".$fila['nombre_regi']."</option>";
       
              }
            }else{
                echo "No hay datos en la base de datos";
            }
            ?>

            </select>
            <br>


    <br>
    <button type="submit" class="btn btn-primary" name="eliminar">Eliminar</button>
    <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
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
