<?php
session_start();
if($_SESSION['usuario']==''){
header("location:login.php");
//echo 'no hay';
} 
include_once('clases/marca.class.php');

if(isset($_REQUEST['id']))
{
	$idmarca = $_REQUEST['id'];
	$operaciones='Modificar';
	$botones_up= '<input name="operaciones" type="submit" value="'.$operaciones.'" class="bt grey1">';
	
	$operaciones2='Eliminar';
	$botones_delete ='<input name="operaciones" type="submit" value="'.$operaciones2.'" class="bt grey1">';
	$botones_add ='';
	
	
	$marca_final = new Marca($idmarca);
	$marca_final->obtener_marca();
}
else
{
	$botones_up='';
	$botones_delete='';
	$idmarca=0;
	$operaciones='Guardar';
	$botones_add='<input name="operaciones" type="submit" value="'.$operaciones.'" class="bt grey1">';
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Mighty - Premium Admin Panel</title>
        <meta name="description" content="Mighty - Premium Admin Panel" />
        <meta name="author" content="Lucas Pelegrino" />
        <meta name="keywords" content="mighty admin, admin, themeforest, panel, administrator, theme, template, html template" />

        <!-- Optimized mobile viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- CSS -->
        <link rel="stylesheet" href="./css/icomoon.css" />
        <link rel="stylesheet" href="./css/websymbols.css" />
        <link rel="stylesheet" href="./css/formalize.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/theme-blue.css" />
        <link rel="stylesheet" href="./plugins/chosen/chosen.css" />
        <link rel="stylesheet" href="./plugins/ui/ui-custom.css" />
        <link rel="stylesheet" href="./plugins/tipsy/tipsy.css" />
        <link rel="stylesheet" href="./plugins/validationEngine/validationEngine.jquery.css" />
        <link rel="stylesheet" href="./plugins/elrte/css/elrte.min.css" />
        <link rel="stylesheet" href="./plugins/miniColors/jquery.miniColors.css" />
        <link rel="stylesheet" href="./plugins/fullCalendar/fullcalendar.css" />
        <link rel="stylesheet" href="./plugins/elfinder/css/elfinder.css" />
        <link rel="stylesheet" href="./plugins/farbtastic/farbtastic.css" />

        <!-- JAVASCRIPTs -->
        <!--[if lt IE 9]>
            <script language="javascript" type="text/javascript" src="./js/html5shiv.js"></script>
        <![endif]-->
        <script src="./js/jquery.js"></script>
        <script src="./js/browserDetect.js"></script>
        <script src="./js/jquery.formalize.min.js"></script>
        <script src="./js/less.js"></script>
        <script src="./js/jquery.watch.js"></script>
        <script src="./js/main.js"></script>
        <script src="./js/demo.js"></script>
        <script src="./js/respond.min.js"></script>
        <script src="./plugins/prefixfree.min.js"></script>
        <script src="./plugins/jquery.uniform.min.js"></script>
        <script src="./plugins/jquery.window-modal.js"></script>
        <script src="./plugins/chosen/chosen.jquery.min.js"></script>
        <script src="./plugins/ui/ui-custom.js"></script>
        <script src="./plugins/ui/multiselect/js/ui.multiselect.js"></script>
        <script src="./plugins/ui/ui.spinner.min.js"></script>
        <script src="./plugins/datables/jquery.dataTables.min.js"></script>
        <script src="./plugins/jquery.metadata.js"></script>
        <script src="./plugins/progressbar.js"></script>
        <script src="./plugins/feedback.js"></script>
        <script src="./plugins/farbtastic/farbtastic.js"></script>
        <script src="./plugins/tipsy/jquery.tipsy.js"></script>
        <script src="./plugins/jquery.maskedinput-1.3.min.js"></script>
        <script src="./plugins/jquery.validate.min.js"></script>
        <script src="./plugins/validationEngine/languages/jquery.validationEngine-en.js"></script>
        <script src="./plugins/validationEngine/jquery.validationEngine.js"></script>
        <script src="./plugins/jquery.elastic.js"></script>
        <script src="./plugins/elrte/elrte.min.js"></script>
        <script src="./plugins/miniColors/jquery.miniColors.min.js"></script>
        <script src="./plugins/fullCalendar/fullcalendar.min.js"></script>
        <script src="./plugins/elfinder/elfinder.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body class="fixed fixed-topbar"><!-- .fixed or .fluid -->
		<div id="wrapper">
			<section id="top">
				<header>
					<nav id="menu-bar">
						<ul>
							<li>
								<a href="#">Notifications <span class="note">7</span></a>
							</li>
							<li class="with-submenu">
								<a href="#">System settings</a>
								<nav class="submenu">
									<ul>
										<li><a href="#">Maintenance Mode</a></li>
										<li><a href="#">General Settings</a></li>
										<li><a href="#">SEO configurations</a></li>
									</ul>
								</nav>
							</li>
							<!-- .keep makes the element aways visible (even in smaller screens) -->
							<li class="keep"><a href="./login.php.html" class="bold">Logout</a></li>
							<li class="keep"><a href="#" class="bt-alt"><span>visit website »</span></a></li>
						</ul>
					</nav>
				</header>
			</section>
			<section id="page">
				<aside id="sidebar">
					<div id="logo">
						<a href="./index.php.html"><img src="./images/logo.png" alt="Mighty Admin" /></a>
					</div>
					<div class="menus">
						<!-- menu #1 -->
							<nav>
							<h2>Main Menu</h2>
							
							<ul>
                            <li>
									<a href="listado_galeria.php">
										<i class="glyph-cloud"></i>
										<div class="label">Galeria</div>
									</a>
								</li>
                            
								<li>
									<a href="listado_patrosinadores.php">
										<i class="glyph-cloud"></i>
										<div class="label">Patrocinadores</div>
									</a>
								</li>
                                 <li>
									<a href="form_folleto.php">
										<i class="glyph-cloud"></i>
										<div class="label">Folleto</div>
									</a>
								</li>
                               <li>
									<a href="listado_banner.php">
										<i class="glyph-cloud"></i>
										<div class="label">Banners</div>
									</a>
								</li>
                                <li>
									<a href="listado_mails.php">
										<i class="glyph-cloud"></i>
										<div class="label">Correos recibidos</div>
									</a>
								</li>
                                 <li>
									<a href="listado_schedules.php">
										<i class="glyph-cloud"></i>
										<div class="label">Schedules</div>
									</a>
								</li>
                             <li>
									<a href="form_textos.php">
										<i class="glyph-cloud"></i>
										<div class="label">Textos</div>
									</a>
								</li>
                                 <li>
									<a href="form_status.php">
										<i class="glyph-cloud"></i>
										<div class="label">Versión del idioma</div>
									</a>
								</li>
                                
                                    
                                
							</ul>
						</nav>
						<!-- /menu -->
						
						<!-- menu #2 -->
						
						<!-- /menu -->

						<!-- menu #3 -->
						
						<!-- /menu -->
					</div>
				</aside>
				<section id="content">
					<section id="content-top">
						<div class="search-field-entry">
							<input type="text" placeholder="Search" />
							<input type="submit" class="search-button" value="L" /><!-- L is the glyph for the search icon -->
						</div>
						
						<nav class="quick-actions">
							<ul>
								<li>
									<a href="#">
										<i class="glyph-attachment"></i>
									</a>
								</li>
								<li class="with-submenu">
									<a href="#">
										<i class="glyph-favorite"></i>
									</a>
									<nav class="submenu">
										<ul>
											<li><a href="#">Subitem 1</a></li>
											<li><a href="#">Subitem 2</a></li>
											<li><a href="#">Subitem 6</a></li>
										</ul>
									</nav>
								</li>
								<li>
									<a href="#">
										<i class="glyph-settings"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="glyph-search"></i>
									</a>
								</li>
								<li class="alt with-submenu">
									<nav>
										<ul>
											<li><a href="#">account settings</a></li>
											<li class="active"><a href="#">edit profile</a></li>
											<li><a href="#">balance</a></li>
										</ul>
									</nav>
								</li>
							</ul>
						</nav>
					</section>
					<div class="cf"></div>
					
						
			<section id="pane">
						<header>
							<h1>Form Elements</h1>
							<nav class="breadcrumbs">
								<ul>
									<li class="alt"><a href="#"><i class="icon-home"></i></a></li>
									<li><a href="listado_marca.php">Listado</a></li>
									<li><a href="form_marcas.php">Formulario</a></li>
								</ul>
							</nav>
						</header>
						<div id="pane-content">
													<div class="widget minimizable g4">
								<header>
									<i class="icon-clipboard"></i>
									<h2>Form</h2>
								</header>
								<div class="widget-section">
                              
									<div class="content">
                                       <!--inicio formilacion -->
                                   <form action="operaciones.marcas.php" class="js-validate" />
                                    <input type="hidden" name="idmarca" value="<?php echo $marca_final->idmarca ?>">
										<div class="field g1">
												<label>Nombre de la marca</label>
												<div class="entry">
													<input type="text" name="marca" class="required" value="<?php echo $marca_final->marca ?>" placeholder="Marca"  />
												</div>
                                                </div>
                                                <div class="field g3">
											<label>Correo de contacto</label>
											<div class="entry">
												<input type="text" name="correo" value="<?php echo $marca_final->correo?>"  placeholder="Placeholder" />
											</div>
										</div>
                                        
                                        <div class="field g2">
											<label>Direcciones<span></label>
											<div class="entry">
												<textarea class="elastic" name="direccion" placeholder="You keep writing and I keep growing..."><?php echo $marca_final->direccion ?></textarea>
											</div>
                                        </div>
                                        
                                        <div class="field g3">
											<label>Website</label>
											<div class="entry">
												<input type="text" name="web" value="<?php echo $marca_final->web; ?>"  placeholder="Placeholder" />
											</div>
										</div>
                                        
                                        <div class="field g3">
											<label>Nombre del contacto</label>
											<div class="entry">
												<input type="text" name="nombre" value="<?php echo $marca_final->nombre; ?>"  placeholder="Placeholder" />
											</div>
										</div>
                                        
                                        <div class="field g3">
											<label>Numero de telefono</label>
											<div class="entry">
												<input type="text" name="telefono" value="<?php echo $marca_final->telefono; ?>"  placeholder="Placeholder" />
											</div>
										
                                        

                                             <?php echo $botones_up.'&nbsp'.$botones_delete.'&nbsp;'.$botones_add; ?>
										</div>   
              
                 				   </form>
                                      <!--termina el  formilacion -->
										<div class="cf"></div>
									</div>
								</div>
							</div>
							<div class="cf"></div>
						</div>
					</section>
				</section>
			</section>
		</div>
		<a href="#" id="top-scroller" title="back to top of the page">back to top</a>
	</body>
</html>