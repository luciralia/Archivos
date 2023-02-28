<?php 
//require_once('../inc/encabezado.inc.php'); 
?>
 
        <!-- Contenido
        ============================================= -->
      
         <?php 
	   $cadena = 'UNAM:1S.12/416-01"2015"/1';
       echo 'Antes',$cadena;
	   $cod = substr('UNAM:1S.12/416-01"2015"/1',  5,-15); 
       $long =strlen($cod);
       $anio = substr($cadena,5+$long+8,-3);
       echo 'Codigo',$cod;
       echo 'Anio',$anio;
     
    ?>

    
     
<?php //require_once('../inc/pie.inc.php'); ?>