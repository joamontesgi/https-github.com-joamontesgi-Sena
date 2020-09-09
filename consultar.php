 <?php
include("headerCalidad.php");
include("backend/activeSession.php");
include("backend/consultarRegional.php");
include("ajax_parametros3.php");
 ?>

<main id="main">

  <br>
  <br>



<div class="position-relative  p-3 p-md-5 m-md-2 text-center ">
  <div class="col-md-5 p-lg-3 mx-auto my-2">
    <h2 class="display-5 font-weight-normal">Resultados de Evaluación para la Formación</h2>
    <p class="lead font-weight-normal">Opciones de Consulta</p>
    </div>


    <div class="container bg-light">
      <div class="row">

    <div class="col">
      <form id="formulario">
                   

        <h4>Regional<select class="form-control form-control-lg" name="region" id="region" required="Debes seleccionar una regional para ver los cambios">
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

        
        <h4>Centros<select class="form-control form-control-lg" name="centro" id="centro" required="Debes seleccionar un centro para ver los cambios">
            </select>
            <br>
             <h4>Fichas<select class="form-control form-control-lg" name="fichas" id="fichas" required="Debes seleccionar una ficha para ver los cambios">
            </select>
            <br>
             <h4>Programa<select class="form-control form-control-lg" name="programa" id="programa" required="Debes seleccionar un programa para ver los cambios">
            </select>
            <br>
             <h4>Instructores
            <br>
            <div style="background-color: orange;" name="instructor" id="instructor">
            </div>
            <br>


<script type="text/javascript">
  $(document).ready(function(e){
    $("#region").change(function(){
   
      var parametro="id="+$("#region").val();
            $.ajax({
                data:  parametro,
                url:   'ajax_parametros.php',
                type:  'post',
                beforeSend: function () {
                   $("#centro").html("Procesando");
                },
                success:  function (response) {                 
                    $("#centro").html(response);
                },
                error:function(){
                  alert("error")
                }
            });
    
    });

    // --------------------------------------------


     $("#centro").change(function(){

      var parametro="id="+$("#centro").val();

            $.ajax({
                data:  parametro,
                url:   'ajax_parametros1.php',
                type:  'post',
                beforeSend: function () {
                   $("#fichas").html("Procesando");
                },
                success:  function (response) {                 
                    $("#fichas").html(response);
                },
                error:function(){
                  alert("error")
                }
            });
      
    })


    // --------------------------------------------


     $("#fichas").change(function(){

      var parametro="id="+$("#fichas").val();

            $.ajax({
                data:  parametro,
                url:   'ajax_parametros2.php',
                type:  'post',
                beforeSend: function () {
                   $("#programa").html("Procesando");
                },
                success:  function (response) {                 
                    $("#programa").html(response);
                },
                error:function(){
                  alert("error")
                }
            });
    
    })

    // --------------------------------------------


     $("#programa").change(function(){

      var parametro="id="+$("#programa").val();

            $.ajax({
                data:  parametro,
                url:   'ajax_parametros3.php',
                type:  'post',
                beforeSend: function () {
                   $("#instructor").html("Procesando");
                },
                success:  function (response) {                 
                    $("#instructor").html(response);
                },
                error:function(){
                  alert("error")
                }
            });
    
    })


    
    })
</script>


</main>

<?php
include("footer.php");
?>
