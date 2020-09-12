 <?php
include("header.php");
include("backend/activeSession.php");
include("backend/baseDatos.php");
$consultas="SELECT imagen FROM aprendiz
WHERE id_apre='$idApre'
";

$resul2=mysqli_query($mysqli, $consultas) or die("Error");
$totalRegistros=mysqli_num_rows($resul2);

 ?>


<main id="main">
  

  <br>
  <br>
  <br>
  <div class="col text-center">
      <h3>Cordial saludo <?php echo $nombreApre;?>, te damos la bienvenida. </h3>

         <?php
            if ($totalRegistros>0) {
          
                while($fila = mysqli_fetch_array($resul2)){ 
                  ?>
                  <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']); ?>">
                  <?php
    
              }
            }else{
                echo "No hay datos en la base de datos";
            }
            ?>
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
