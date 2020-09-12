 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/EliminarFicha.php");


 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/deleteFicha.php">
    <div>
       <h4>Por favor seleccione la ficha que desea eliminar<select class="form-control form-control-lg" name="ficha" id="ficha">
          <?php
            if ($totalRegistros>0) {
                   echo "<option value='-1'>Seleccione una ficha...</option>" ;
                while($fila = mysqli_fetch_array($resul2)){ 
              echo "<option value=".$fila['id_ficha'].">".$fila['numero_ficha']."</option>";
    
              }
            }else{
                echo "No hay datos en la base de datos";
            }
            ?>

            </select>
            <br>


 
    </div>
    <button type="submit" class="btn btn-primary">Eliminar</button>
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
