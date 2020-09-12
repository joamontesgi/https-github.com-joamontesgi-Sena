 <?php
 include("headerCalidad.php");
 include("backend/activeSession.php");
 include("backend/baseDatos.php");
 ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <main id="main">

  <br>

<!--   <table class="table table-bordered table-dark">
  <thead>

  </thead>
  <tbody>
    <tr style="text-align: center;">
      <th scope="row">1</th>
      <td><a href="" type="button" class="btn btn-info btn-lg">  Crear Regional</a><br><br></td>
      <td> <a href="crearFicha.php" type="button"  class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-ok"></span>  Crear Ficha</a><br><br></td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
   
  </tbody>
</table> -->
<div class="list-group" style="text-align: center;" >REGIONAL

  <a href="crearRegional.php" class="list-group-item list-group-item-action list-group-item-success">Crear regional <span class="glyphicon glyphicon-ok"></span> </a>
  <a href="eliminarRegion.php" class="list-group-item list-group-item-action list-group-item-danger">Eliminar regional<span class="glyphicon glyphicon-remove"></span> </a>

</div>

<div class="list-group" style="text-align: center;" >CENTRO

  <a href="crearRegional.php" class="list-group-item list-group-item-action list-group-item-success">Crear regional <span class="glyphicon glyphicon-ok"></span> </a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Eliminar regional<span class="glyphicon glyphicon-remove"></span> </a>

</div>

<div class="list-group" style="text-align: center;" >FICHA
  <a href="crearRegional.php" class="list-group-item list-group-item-action list-group-item-success">Crear regional <span class="glyphicon glyphicon-ok"></span> </a>

  
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Eliminar regional<span class="glyphicon glyphicon-remove"></span> </a>
</div>

<div class="list-group" style="text-align: center;" >PROGRAMA
  <a href="crearRegional.php" class="list-group-item list-group-item-action list-group-item-success">Crear regional <span class="glyphicon glyphicon-ok"></span> </a>

  
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Eliminar regional<span class="glyphicon glyphicon-remove"></span> </a>
</div>

<div class="list-group" style="text-align: center;" >APRENDIZ
  <a href="crearRegional.php" class="list-group-item list-group-item-action list-group-item-success">Crear regional <span class="glyphicon glyphicon-ok"></span> </a>

  
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Eliminar regional<span class="glyphicon glyphicon-remove"></span> </a>
</div>


<div style="text-align: center;">
  <p class="justify" >En este módulo se pueden gestionar los regionales, centros, programas, fichas</p>


  <div class="container">
    <div class="row">
      <div class="col-md-4">

        <a href="eliminarRegion.php" type="button"  class="btn btn-info btn-lg"><span class="glyphicon glyphicon-remove"></span>   Eliminar Regional</a><br><br>
        <a href="crearCentro.php" type="button"  class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-ok"></span>  Crear Centro</a><br><br>
        <a href="eliminarCentro.php" type="button"  class="btn btn-info btn-lg"><span class="glyphicon glyphicon-remove"></span>Eliminar Centro</a>   <br><br> 
      </div>
      <div class="col-md-4">

        <a href="eliminarFicha.php" type="button"  class="btn btn-info btn-lg"><span class="glyphicon glyphicon-remove"></span>Eliminar Ficha</a><br><br>
        <a href="crearPrograma.php" type="button" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-ok"></span>  Crear Programa</a><br><br>
        <a href="eliminarPrograma.php" type="button"  class="btn btn-info btn-lg">Eliminar Programa</a><br><br>
      </div>
      <div class="col-md-4">
        <a href="crearAprendiz.php" type="button" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-ok"></span>  Crear Aprendiz</a><br><br>
<!--     <a href="eliminarAprendiz.php" type="button"  class="btn btn-info btn-lg"><span class="glyphicon glyphicon-remove"></span>Eliminar Aprendiz</a><br><br>
  
    <a href="crearPrograma.php" type="button" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-ok"></span>  Crear Instructor</a><br><br>
    <a href="eliminarFicha.php" type="button"  class="btn btn-info btn-lg"><span class="glyphicon glyphicon-remove"></span>Eliminar Instructor</a><br><br> -->
  </div>


</div>
</div>




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
