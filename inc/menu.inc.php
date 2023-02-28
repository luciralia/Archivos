
    <?php //if ($_GET['qn']=='adm' || $_REQUEST['mod']=='exp' || $_REQUEST['mod']=='mtra' || $_REQUEST['mod']=='cfp' || $_REQUEST['id_asig'] || $_REQUEST['mod']=='imp' ){?>  

<ul>
                   
        <li class="current"><a href="../view/inicio.html.php"><div>Inicio</div></a></li>
       
        <li><a href="#"><div>Expedientes <img src="../images/icons/mainsubmenured2.png" alt="Submenu"></div></a>
              <ul>
                        <li><a href="../view/inicio.html.php?mod=cfp"><div>Editar</div></a></li>
                        <li><a href="../view/inicio.html.php?mod=mtra"><div>Muestra </div></a></li>
             </ul> 
        </li>           
        <li><a href="../view/inicio.html.php?mod=exp" ><div>Reportes</div></a></li>
        <li><a href="../view/inicio.html.php?mod=ver" ><div>Verificar</div></a></li>
        <li><a href="#"><div>Importar <img src="../images/icons/mainsubmenured2.png" alt="Submenu"></div></a>
              <ul>
                        <li><a href="../view/inicio.html.php?mod=imp"><div>Inventario</div></a></li>
                        <li><a href="../view/inicio.html.php?mod=impat"><div>Archivo Transferencia</div></a></li>
             </ul> 
        </li>       
        <li><a href="../inc/salir.inc.php" ><div>Salir</div></a></li>
                    
 </ul>
                   
            <?php //}?> 