 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
 ?>
 

<main id="main">

  <br>
  <br>
  <br>
  <div style="text-align: center;">
      <h3><?php echo $nombreCalidad;?>, te damos la bienvenida al perfil de Calidad.</h3>
      <p class="justify">Esta aplicación permite gestionar los resultados de las evaluaciones de los intructores, realizadas por cada uno de nuestros aprendices, con el objetivo de mejorar los procesos de enseñanza.</p>

      <div class="container">
          <div class="row">
            <div class="col">
              <a href="gestion.php"><img src="assets/img/gestion.png" class="img-fluid" style="width: 200px; height: 200px;">
             <p>Gestión </p></a>
            </div>
            <div class="col">
              <a href="backend/moduloReportes/pdf/Reporte.php"><img src="assets/img/Reporte.png" class="same" style="width: 200px; height: 200px;">
             <p>Reportes</p></a>
            </div>
          </div>
      </div>
  </div>


  <br>
  <br>
  <br>
</main>

<?php
include("footer.php");
?>
