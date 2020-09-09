 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/consultarCentro.php");


 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/guardarFicha.php">
    <div>
       <h4>Por favor seleccione a qué centro pertenece la ficha que desea crear<select class="form-control form-control-lg" name="centro" id="centro">
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


    <label for="input">Ingrese el número de la ficha que desea crear: </label>
    <input type="number"  name="ficha" id="input" aria-describedby="ficha" placeholder="Ejemplo: 123456" required> 
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
