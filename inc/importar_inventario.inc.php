

<?php
//require_once('../conexion.php');
//$cadena_con = "host=132.248.52.241 port=5432 dbname=recfi_pru user=sieldi_user password=s13ld1";

$cadena_con = "host=localhost port=5432 dbname=archivos user=sieldi_user password=s13ld1";

//$cadena_con = "host=localhost port=5432 dbname=sieldi_dbp user=sieldi_user password=s13ld1";

$con = pg_connect($cadena_con) or die('Falló la conexion');



function utf8_string_array_encode(&$array){
    $func = function(&$value,&$key){
        if(is_string($value))
            $value = utf8_encode($value);
         
        if(is_string($key))
            $key = utf8_encode($key);
        
        if(is_array($value))
            utf8_string_array_encode($value);
        
    };
    array_walk($array,$func);
    return $array;
}
?>


<div class="container">  
    <br/>
    <br/>
    <br>
        <div class="col_four_fifth panel panel-default">
               <div class="panel-heading">
					      <div style="text-align:center;"><h1 class="panel-title"> Importa Inventario General</h1></div>
                </div>
                    <div class="panel-body">
                          <p>
                            <table  class="table">
                                     
                         

                              <form  method="POST" enctype="multipart/form-data">
                                <tr>
                                  <td width="20%" align="center" >Subir archivo:</td>
                                  <td align="left" ><input type="file" name="archivo_txt" id='archivo'></td>
                                </tr>
                                <br>
                               <tr>
                                    <td colspan="2" align="center">
                                     <!--<div style="text-align:center;"> -->
                                        <button class="btn btn-local" type="submit" name="accioni" id="accioni" value="ImportaV" />Importar</button>
                                        <input  class="btn btn-local" type="reset" name="accionp"  value="Cancelar" />
	                                 <!-- </div> -->
                                   </td>
                               </tr>
                           </form>
                    </table>
                   </p>

                  </div>
             </div>
 </div>
 
 <?php

  $file_upload = $_FILES["archivo_txt"]["name"];
  $tmp_name = $_FILES["archivo_txt"]["tmp_name"];
  $size = $_FILES["archivo_txt"]["size"];
  $tipo = $_FILES["archivo_txt"]["type"];
  $cuenta=0;
  $importa=0;
  echo 'valores Files';
  print_r ($_FILES);

 
 if($size > 0){
	
 
 //if((pathinfo(basename($file_upload),PATHINFO_EXTENSION)=='txt')){
 
    $fp = fopen($tmp_name, "r");
	
    while($datos = fgetcsv ($fp, 1000, "\t"))
	 {
		  $cuenta++;
		  $datosdec=utf8_string_array_encode($datos);
		  
	    /*  $query= "INSERT INTO archivoinvent(id_inv,
		  serie,codigo,
		  nomb_expediente,desc_expediente,
		  fecha_apertura,fecha_cierre,
		  plazo_conserv_tram,plazo_conserv_concen,
		  ubica_fisica,observacion,
		  tipo_entrega,anio) VALUES (%d,
		   '%s','%s',
		   '%s','%s',
	       '%s','%s', 
	       '%s',%d, 
	       '%s','%s', 
		   '%s','%s')";
		
		   $queryi=sprintf($query,$cuenta, 
                 NULL,$datosdec[0],
				 $datosdec[1],$datosdec[2],
				 $datosdec[3],$datosdec[4],
				 $datosdec[5],$datosdec[6],
				 $datosdec[7],$datosdec[8],
				 NULL,NULL);*/
		 $codcont = substr($datosdec[0], 5,-16); // devuelve "de"
         //echo 'obtiene',$codcont;
		 $long=strlen($codcont);
		 $anio=substr($datosdec[0],5+$long+9,-3);
		
	  
		$query= "INSERT INTO archivoinventc(id_inv,anio,
		  codcont,codigo,
		  nomb_expediente,desc_expediente,
		  fecha_apertura,fecha_cierre,
		  plazo_conserv_tram,plazo_conserv_concen,
		  ubica_fisica,observacion,
		  plazo_cierre,plazo_trans,
		  fecha_ent_ac,validacion) 
		  VALUES ($cuenta,$anio,
		   '$codcont','$datosdec[0]',
		   '$datosdec[1]',E'$datosdec[2]',
	       '$datosdec[3]','$datosdec[4]', 
	       '$datosdec[5]',$datosdec[6], 
	       E'$datosdec[7]',E'$datosdec[8]',
		   NULL,NULL,
		   NULL,NULL)";
		 
		 //$nueva=$anio+$datosdec[5];
		 //echo 'Nuevo',$nueva;
		
		   
		echo $query."\n";
		
		
		$result=pg_query($con,$query) or die('ERROR AL INSERTAR Archivo: ' . pg_last_error());
        
	 } // fin while
  include_once("../view/inicio.html.php");
 }
	//fclose($fp);
 ?>
