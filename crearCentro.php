 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/consultarRegional.php");


 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/guardarCentro.php">
    <div>
       <h4>Por favor seleccione a qué regional pertenece el centro a crear<select class="form-control form-control-lg" name="region" id="region">
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


    <label for="input">Ingrese el nombre del centro que desea crear: </label>
    <input type="text"  name="centro" id="input" aria-describedby="centro" placeholder="Ejemplo: Centro de software" required> 
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <br>
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
