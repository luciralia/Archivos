 
 <link rel="stylesheet" type="text/css" href="../css/acordion.css">
 <script
  src="https://code.jquery.com/jquery-1.11.3.js"
  integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0="
  crossorigin="anonymous">
  
 </script>


<?php 
session_start();

require_once('../inc/encabezado.inc.php'); 

?>

        <!-- Titulo
        ============================================= -->
        <section id="page-title">

           <!--<div class="container clearfix">-->
           <div class="container">
                
                <div class="titulo-interfaz">
                   <h2>-Sistema de Archivos- </h2>
                    <?php  //echo "<h1>" . $usuario->getDepto($_SESSION['id_usuario']) . "</h1>"; ?> 
                  </div>
         
              
          </div>
        </section><!-- Titulo end -->

        <!-- Contenido
        ============================================= -->
      
 <?php 

	/*	if ($_GET['qn']=='alu'){?>
         <meta http-equiv="Expires" content="0" /> 
         <meta http-equiv="Pragma" content="no-cache" />
           <script>
		   if(history.forward(1)){
               location.replace( history.forward(1) );
           }
		   </script>
        
        <?php
		include_once("../view/configuraEncuesta.html.php");
		}
else */
       if (($_GET['mod']=='impat'))
		   include_once("../view/importar_transferencia.html.php");
	   else if (($_GET['mod']=='imp'))
		   include_once("../view/importar_inventario.html.php");
       else if (($_GET['mod']=='ver'))
		   include_once("../view/verificar_inventario.html.php");
	   else 
           include_once("../view/inicio.html.php");
		  //header("Location: inicio.html.php");

	?>           
            
  

<?php require_once('../inc/pie.inc.php'); ?>