
<?php
require_once('../conexion.php');
?>

<div class="container">  
    <br/>
    <br/>
    <br>
        <div class="col_four_fifth panel panel-default">
                         <div class="panel-heading">
					      <div style="text-align:center;"><h1 class="panel-title"> Verificar archivo de transferencia</h1></div>
       </div>
                  
      <?php 
			$query= "SELECT id_inv,codcont,codigo,nomb_expediente,fecha_apertura,fecha_cierre FROM archivoinventc";
			$datos=pg_query($con,$query) or die('ERROR AL mostrar Archivo: ' . pg_last_error());
		      
     ?>            
                   
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                           
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Código Control</th>
                                        <th>Código</th>
                                        <th>Serie</th>
                                        <th>Apertura</th>
                                        <th>Cierre</th>
                                    </tr>
                                </thead>
                                <?php
								while ($archivo = pg_fetch_array($datos, NULL, PGSQL_ASSOC)) 
			 { 
								?>
                                
                                <tbody>
                                    <tr>
                                        
                                        <td><?php echo $archivo['codcont'];?></td>
                                        <td><?php echo $archivo['codigo'];?></td>
                                        <td><?php echo $archivo['nomb_expediente'];?></td>
                                        <td><?php echo $archivo['fecha_apertura'];?></td>
                                        <td><?php echo $archivo['fecha_cierre'];?></td>
                                    </tr>
                                    
                                </tbody>
                                  <?php
			   
				 //$action="../inc/procesaar.inc.php"?>
			    <!--<form action="<?php echo $action ?>" method="post" name="archivos">				
				<?php				
				  /*foreach ($archivo as $campo => $valor) {
				     echo "<input name='".$campo."' type='hidden' value='".$valor."' /> \n";
					
				}*/	?> 
                           </form> -->
                               <?php } ?> 
                            </table>
                           
                        </div>

                    <div class="panel-body">
                          <p>
                            <table  class="table">
                               <tr>
                                    <td colspan="2" align="center">
                                     <!--<div style="text-align:center;"> -->
                                        <button class="btn btn-local" type="submit" name="accionv" id="accionv" value="verificaV" />Verificar</button>
                                        
	                                 <!-- </div> -->
                                   </td>
                             </tr>
                             
                           
                    </table>
                   </p>

                  </div>
             </div>
 </div>
 