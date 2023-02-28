<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
<!--cambios de githib-->
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="author" content="Facultad de Ingenieria"/>
<meta http-equiv="Expires" content="0"/>
<meta http-equiv="Pragma" content="no-cache"/>
<!-- Stylesheets
    ============================================= -->
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/estilosFI.css" type="text/css"/>
<link rel="stylesheet" href="css/acordion.css" type="text/css"/>
<link rel="stylesheet" href="css/dark.css" type="text/css"/>
<link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
<link rel="stylesheet" href="css/animate.css" type="text/css"/>
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>
<link rel="stylesheet" href="css/colors.css" type="text/css"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- External JavaScripts
    ============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>


<script type="text/javascript">

  if(history.forward(1)){
    location.replace( history.forward(1) );
  }
  
   function deshabilita() {
				 
		     document.getElementById("username").disabled = true; 
		     document.getElementById("password").disabled = true;// habilitar
   }
   
</script>

 
<!-- Titulo
    ============================================= -->
<title>Sistema de Archivos </title>
</head>
<body class="stretched">
<!-- Document Wrapper
    ============================================= -->
<div id="wrapper" class="clearfix">
	<!-- Header
        ============================================= -->
	<header id="header" class="sticky-style-2">
	<div class="container clearfix">
		<!-- Logo
                ============================================= -->
		<div id="logo" class="divcenter">
			<img src="images/banner_principalsin.jpg" width="1024" height="103">
		</div>
		<!-- #logo end -->
	</div>
	<div id="header-wrap">
		<!-- Menu 
                ============================================= -->
		<nav id="primary-menu" class="style-2 center">
		<div class="container clearfix">
			<div id="primary-menu-trigger">
				<i class="icon-reorder"></i>
			</div>
		</div>
		</nav>
		<!-- #primary-menu end -->
	</div>
	</header>
	<!-- #header end -->
	<!-- Titulo
        ============================================= -->
	<section id="page-title">
	<!--<div class="container clearfix">-->
	<div class="container">
		<div class="titulo-interfaz">
			<h1>Sistema de Archivos Inventario General</h1>
		</div>
	</div>
	</section>
	<!-- Titulo end -->
	<!-- Contenido
        ============================================= -->
	<section id="content">
	<!--<div class="content-wrap">-->
	<div class="container">
		<div class="clear"></div>
		<!--<div class="line"></div>-->
        <br>
		 <br>
		<div class="card formulario-sesion">
			<!--<div class="col-12 px-0">-->
				<div class="card-header titulo-formulario-login">
					 Iniciar Sesión
				</div>
				
					<?php /*$estado = 'oculto';
 
                     if ($_GET['log'] == 'no') {
                         $usuario  = $_GET['usr'];
                         $rusuario = $_GET['usr'];
                         $estado   = 'visible';
                    } elseif ($_GET['log'] == 'rest') {
                            $usuario  = $_GET['usr'];
                            $rusuario = $_GET['usr'];
                            $estado   = 'restringe';
                        } else {
                          $usuario = '';
                    } */ ?>
                 <div class="card-body">
					<form action="mod/autentica.mod.php"  method="post" name="formlog" autocomplete="off" enabled="on"  >
						
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div><!--"input-group-prepend"-->
							<input class="form-control" id="username" name="username" type="text" value="<?php echo $_GET['usr']; ?>" placeholder="Usuario" /> <!--required-->
						</div><!--input-group-->
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-lock"></i></span>
							</div><!--"input-group-prepend"-->
							<input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" />
						</div><!--input-group mt-3-->
						<br>
                       <div style="text-align:center;">
                    
						     <button class="btn btn-local btn-block" type="submit" name="entrar" id="btn-entrar" value="Entrar" />Ingresar</button>
					  </div><!--div style="text-align:center; -->
                    </div><!-- input-group-->
                    </form>
		      </div>
        </div>
        <br>
        <br>
					<?php /*if ($estado == 'visible') {
?>
 <?php
                      echo '<script type="text/javascript">'
                               , 'deshabilita();'
                       , '</script>'
                         ;*/
                     
                   ?>
              <!--      <div id="bgalerta">
					</div>
					<div id="advertencia" style="box-shadow: 10px 10px 30px #000000;">
					  
				        <div class="card-header titulo-adv" >
					       <p>El nombre de usuario o contraseña son incorrectos</p>
				        </div>
                       
                        <div class="card-body">
						     <div class="btn btn-adv">
							   <a href="./?usr=<?php //echo $rusuario; ?>">Cerrar</a>
						     </div>
                        </div>  
					</div>-->
                   
					<?php
                   // }
                     // if ($estado == 'restringe') { ?>
				<!--	<div id="bgalerta">
					</div>
					<div id="advertencia" style="box-shadow: 10px 10px 30px #000000;">
						<p>
							El ingreso está restringido
						</p>
                         <div class="card-body">
						   <div  class="btn btn-adv">
							  <a href="./?usr=<?php //echo $rusuario; ?>">Cerrar</a>
						   </div>
                         </div>  
					</div>-->
					<?php
                     // }
                   ?>
		

</div>
</div>
</section>
<!-- #contenido end -->
<!-- Footer
        ============================================= -->
<footer id="footer" class="dark">
<div class="container">
<!-- Footer Widgets
                ============================================= -->
<div class="footer-widgets-wrap clearfix">
<div class="col_full">
	<div class="widget clearfix">
		<div class="col_one_third">
			<img src="images/logofooter.png" alt="" class="footer-logo">
			<div style="padding-left:40px">
				<!--         <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn-contacto" value="submit">Contacto</button> -->
			</div>
		</div>
		<div class="col_one_third col_last">
			<address class="nobottommargin">
			<abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Universidad Nacional Autónoma de México</strong></abbr><br>
			 Facultad de Ingeniería, Av. Universidad 3000, Ciudad Universitaria, Coyoacán, México D. F., CP 04510<br>
			</address>
			<abbr title="Phone Number"><strong>Teléfono:</strong></abbr> 56 22 08 66<br>
			<abbr title="Fax"><strong>Fax:</strong></abbr> 56 16 28 90<br>
		</div>
	</div>
</div>
</div>
</div>
<!-- .footer-widgets-wrap end -->
</div>
<!-- Copyrights
            ============================================= -->
<div id="copyrights2">
<div class="container clearfix">
<div class="copyrights2">
 Copyrights &copy; 2018 / <a href="http://www.ingenieria.unam.mx">Facultad de Ingeniería</a>/<a href="http://www.unam.mx">UNAM</a>/
</div>
</div>
</div>
<!-- #copyrights end -->
</footer>
<!-- #footer end -->
</div>
<!-- #wrapper end 'images/footer-bg.jpg'-->
<!-- Go To Top
    ============================================= -->
<div id="gotoTop" class="icon-angle-up">
</div>
<!-- Footer Scripts
    ============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>
