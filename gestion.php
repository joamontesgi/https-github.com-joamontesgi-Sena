 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/baseDatos.php");
 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">

  <br>  <br>
  <br>  <br>
   
      <p class="justify">En este módulo se pueden gestionar los regionales, centros, programas, fichas</p>
    <a href="crearRegional.php" type="button" class="btn btn-primary">Crear Regional</a>
    <a href="eliminarRegion.php" type="button" class="btn btn-primary">Eliminar Regional</a></a>
    <a href="crearCentro.php" type="button" class="btn btn-primary">Crear Centro</a>
    <a href="eliminarCentro.php" type="button" class="btn btn-primary">Eliminar Centro</a>    
    <a href="crearFicha.php" type="button" class="btn btn-primary">Crear Ficha</a>
    <a href="deleteFicha.php" type="button" class="btn btn-primary">Eliminar Ficha</a>
    


   <!--    <button type="button" class="btn btn-primary">Consultar Ficha</button> -->
  
  </div>
  <br>
  <br>
  <br>  <br>
      <br>  <br>
  <br>
</main>

<?php
include("footer.php");
?>
