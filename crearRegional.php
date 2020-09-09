 <?php
include("headerCalidad.php");
include("backend/activeSession.php");


 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
  <form method="post" action="backend/guardarRegion.php">
    <div>
    <label for="input">Ingrese el nombre de la regional que desea crear: </label>
    <input type="text"  name="centro" id="input" aria-describedby="centro" placeholder="Ejemplo: Regional Caldas" required>
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
