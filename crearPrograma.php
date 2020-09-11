 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/consultarFicha.php");


 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/guardarPrograma.php">
    <div>
       <h4>Por favor seleccione a qué ficha pertenece el programa que desea crear<select class="form-control form-control-lg" name="idFicha" id="idFicha">
          <?php
            if ($totalRegistros1>0) {
                echo "<option value='-1'>Seleccione una ficha...</option>" ;
                while($fila1 = mysqli_fetch_array($resul1)){ 
              echo "<option value=".$fila1['id_ficha'].">".$fila1['numero_ficha']."</option>";
       
              }
            }
            ?>

            </select>
            <br>


    <label for="input">Ingrese el nombre del programa que desea crear: </label>
    <input type="text"  name="namePrograma" id="input" aria-describedby="ficha" placeholder="Ejemplo: Técnico en Software" required style="width: 400px;"> 
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
