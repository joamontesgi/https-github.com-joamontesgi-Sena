 <?php
include("header.php");
include("backend/activeSession.php");
 ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


<main id="main">
  

  <br>
  <br>
  <br>
  <div class="col text-center">
      <h3>Cordial saludo <?php echo $nombreApre;?>   </h3>
 
  <body>  
       
         <form method="POST" action="backend/evaluacion.php" autocomplete="off">
         <br><h1 class="">SERVICIO NACIONAL DE APRENDIZAJE SENA</h1>
         <h3 class="">EVALUACIÓN DE LA FORMACIÓN</h3><br>
    

    
      <table>
        <div style="background-color: orange">  
        <p><b> ÁREA CONOCIMIENTOS </b> </p>
          <tr>
           <th>PREGUNTAS</th>
           <th>SIEMPRE &nbsp;&nbsp;</th>
           <th>CASI SIEMPRE &nbsp;&nbsp;</th>
           <th>ALGUNAS VECES&nbsp;&nbsp;</th>
           <th>CASI NUNCA&nbsp;&nbsp;</th>
           <th>NUNCA</th>
        </tr>

        <!--PRIMERA PREGUNTA CONOCIMIENTO-->
    
        <tr>
          <th>Se Tiene dominio del tema que se está enseñando</th>
          <td><input type="radio" name="pre1" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre1" value="4" id="" title="CASI SIEMPRE"  /></td>
          <td><input type="radio" name="pre1" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre1" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre1" value="1" id="" title="NUNCA"/></td>
        </tr>
  
        <!--SEGUNDA PREGUNTA CONOCIMIENTO-->
        
        <tr>
          <th>Se explican bien los temas y se responde con claridad las preguntas</th>
          <td><input type="radio" name="pre2" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre2" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre2" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre2" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre2" value="1" id="" title="NUNCA"/></td>
        </tr>
        </div>

      </table>
      <hr>

      <!-- PREGUNTAS DIVIDIDAS POR AREA ((METODOLOGIA))-->

    <table class="recuadrointerior">
      <div style="background-color: orange">   
      <p> <b> ÁREA METODOLOGÍA </b> </p>
       </div>
        <tr>
          <th>PREGUNTAS</th>
          <th>SIEMPRE&nbsp;&nbsp;</th>
          <th>CASI SIEMPRE&nbsp;&nbsp;</th>
          <th>ALGUNAS VECES&nbsp;&nbsp;</th>
          <th>CASI NUNCA&nbsp;&nbsp;</th>
          <th>NUNCA</th>
        </tr>

        <!--TERCERA PREGUNTA METODOLOGÍA-->
        <tr>
          <th>Se utilizan diferentes métodos para dar a entender el tema que se está explicando (estudios de casos, juegos, carteleras, foros, talleres etc.)</th>
          <td><input type="radio" name="pre3" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre3" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre3" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre3" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre3" value="1" id="" title="NUNCA"/></td>
        </tr>
        
        <!--CUARTA PREGUNTA METODOLOGIA-->
        <tr>
          <th>La metodología genera interés y motivación por el curso</th>
          <td><input type="radio" name="pre4" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre4" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre4" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre4" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre4" value="1" id="" title="NUNCA"/></td>
        </tr>

        <!--QUINTA PREGUNTA METODOLOGIA-->
        <tr>
          <th>La metodología de la formación genera interés y motivación por el curso, se promueve la formación de valores(respeto, orden, disciplina y otros)</th>
          <td><input type="radio" name="pre5" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre5" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre5" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre5" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre5" value="1" id="" title="NUNCA"/></td>
        </tr>
      </div>
      </table>
       <hr>
        
      <!-- PREGUNTAS DIVIDIDAS POR AREA ((CUMPLIMIENTO Y USO EFICIENTE DEL TIEMPO))-->        

      <table>
        <div style="background-color: orange">   
          <p><b> ÁREA CUMPLIMIENTO Y USO EFICIENTE DEL TIEMPO </b> </p>
          <tr>
            <th>PREGUNTAS</th>
            <th>SIEMPRE&nbsp;&nbsp;</th>
            <th>CASI SIEMPRE&nbsp;&nbsp;</th>
            <th>ALGUNAS VECES&nbsp;&nbsp;</th>
            <th>CASI NUNCA&nbsp;&nbsp;</th>
            <th>NUNCA</th>
        </tr>
        
        <!--SEXTA PREGUNTA CUMPLIMIENTO Y USO EFICIENTE DEL TIEMPO-->

        <th>Las acciones de clase y otras actividades se realizan de manera puntual</th>
          <td><input type="radio" name="pre6" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre6" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre6" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre6" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre6" value="1" id="" title="NUNCA"/></td>
        </tr>

        <!--SEPTIMA PREGUNTA CUMPLIMIENTO Y USO EFICIENTE DEL TIEMPO-->

        <th>La formación cumple con las fechas y los horarios programados</th>
          <td><input type="radio" name="pre7" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre7" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre7" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre7" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre7" value="1" id="" title="NUNCA"/></td>
        </tr>
      </div>
      </table>
       <hr>

      <!-- PREGUNTAS DIVIDIDAS POR AREA ((CALIDAD HUMANA))-->

      <table class="">
        <div style="background-color: orange">   
        <p><b> ÁREA CALIDAD HUMANA </b></p>
        <tr>
          <th>PREGUNTAS</th>
          <th>SIEMPRE&nbsp;&nbsp;</th>
          <th>CASI SIEMPRE&nbsp;&nbsp;</th>
          <th>ALGUNAS VECES&nbsp;&nbsp;</th>
          <th>CASI NUNCA&nbsp;&nbsp;</th>
          <th>NUNCA</th>
        </tr>
        
        <!--OCTAVA PREGUNTA CALIDAD HUMANA-->

        <tr>
          <th>En la formación se trata a los aprendices con igualdad y el respeto</th>
          <td><input type="radio" name="pre8" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre8" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre8" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre8" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre8" value="1" id="" title="NUNCA"/></td>
        </tr>
                
        <!--NOVENA PREGUNTA CALIDAD HUMANA-->

        <tr>
          <th>La fromación se desarrolla de manera responsable con valores y principios</th>
          <td><input type="radio" name="pre9" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre9" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre9" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre9" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre9" value="1" id="" title="NUNCA"/></td>
        </tr>

        <!--DECIMA PREGUNTA CALIDAD HUMANA-->

        <tr>
          <th>Se aceptan las críticas y sugerencias de los aprendices</th>
          <td><input type="radio" name="pre10" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre10" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre10" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre10" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre10" value="1" id="" title="NUNCA"/></td>
        </tr>
      </div>
      </table>
       <hr>
                
      <!-- PREGUNTAS DIVIDIDAS POR AREA ((EVALUACION))-->   

      <table class="">
        <div style="background-color: orange">   
        <p><b> ÁREA  DE EVALUACIÓN </b></p>
        <tr>
          <th>PREGUNTAS</th>
          <th>SIEMPRE&nbsp;&nbsp;</th>
          <th>CASI SIEMPRE&nbsp;&nbsp;</th>
          <th>ALGUNAS VECES&nbsp;&nbsp;</th>
          <th>CASI NUNCA&nbsp;&nbsp;</th>
          <th>NUNCA</th>
        </tr>
                
        <!--ONCEAVA PREGUNTA CALIDAD HUMANA-->  

        <tr>
          <th>Se evalúa lo aprendido durante el curso de acuerdo a lo que se ha enseñado</th>
          <td><input type="radio" name="pre11" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre11" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre11" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre11" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre11" value="1" id="" title="NUNCA"/></td>
        </tr>     
                  
        <!--DOCEAVA PREGUNTA CALIDAD HUMANA-->
                
        <tr>
          <th>Se atiende y resuelve oportunamente los reclamos de los aprendices sobre sus evaluaciones</th>
          <td><input type="radio" name="pre12" value="5" id="" required title="SIEMPRE"/></td>
          <td><input type="radio" name="pre12" value="4" id="" title="CASI SIEMPRE" /></td>
          <td><input type="radio" name="pre12" value="3" id="" title="ALGUNAS VECES" /></td>
          <td><input type="radio" name="pre12" value="2" id="" title="CASI NUNCA"/></td>
          <td><input type="radio" name="pre12" value="1" id="" title="NUNCA"/></td>
        </tr>
      </div>
      </table>
       <hr>
    </div>
      <div class="container">
        <div class="row">
          <div class="col text-center">
              <button type="submit" class="btn btn-primary">Evaluar docente</button>
          </div>
        </div>
      </div>
  </form>
  <br>
  <br>
  <br>




  </body>


  </div>


</main><!-- End #main -->

<?php
include("footer.php");
?>
