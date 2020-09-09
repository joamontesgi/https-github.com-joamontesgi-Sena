 <?php
include("header.php");
include("backend/activeSession.php");
 ?>


<main id="main">
  

  <br>
  <br>
  <br>
  <div class="col text-center">
      <h3>Cordial saludo <?php echo $nombreApre;?>, te damos la bienvenida. </h3>
      <br>
      <p class="font-italic">Por medio de esta aplicación podrás evaluar a tus instructores, con el objetivo de generar procesos que mejoren la calidad institucional.</p>
      <a href="evaluacion.php" class="btn btn-primary">Evaluar instructor</a>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

</main><!-- End #main -->

<?php
include("footer.php");
?>
