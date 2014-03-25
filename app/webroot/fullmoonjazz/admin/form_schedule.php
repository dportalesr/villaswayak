<?php
session_start();
if($_SESSION['usuario']==''){
header("location:login.php");
//echo 'no hay';
} 
include_once("clases/schedules.class.php");

if(isset($_REQUEST['id']))
{
	$id = $_REQUEST['id'];
	$schedule= new Schedule($id,'','','','','');
	$schedule->obtener_schedule();
	
	
	$operaciones='Modificar';
	$botones_up= '<input name="operaciones" type="submit" value="'.$operaciones.'" class="bt grey2">';
	
	$operaciones2='Eliminar';
	$botones_delete ='<input name="operaciones" type="submit" value="'.$operaciones2.'" class="bt grey2">';
	$botones_add ='';
	
	
	
}
else
{
	$botones_up='';
	$botones_delete='';
	$id = $_REQUEST['id'];
	$operaciones='Guardar';
	$botones_add='<input name="operaciones" type="submit" value="'.$operaciones.'" class="bt grey2">';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Imagik - Admin Panel 2.0</title>
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
								
							</li>
							<li class="with-submenu">
								
								<nav class="submenu">
									<ul>
										<li><a href="#">Maintenance Mode</a></li>
										<li><a href="#">General Settings</a></li>
										<li><a href="#">SEO configurations</a></li>
									</ul>
								</nav>
							</li>
							<!-- .keep makes the element aways visible (even in smaller screens) -->
							<li class="keep"><a href="logout.php" class="bold">Logout</a></li>
							<li class="keep"><a href="../index.php" class="bt-alt"><span>visit website »</span></a></li>
						</ul>
					</nav>
				</header>
			</section>
			<section id="page">
				<aside id="sidebar">
					<div id="logo">
						<a href="http://imagik.com.mx/"><img src="./images/logo.png" alt="Imagik Admin" /></a></div>
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
									<a href="listado_banner.php">
										<i class="glyph-cloud"></i>
										<div class="label">Banners</div>
									</a>
								</li>
                                 <li>
									<a href="form_folleto.php">
										<i class="glyph-cloud"></i>
										<div class="label">Folleto</div>
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

						<!-- menu #3 --><!-- /menu -->
					</div>
                    
                    
				</aside>
				<section id="content">
					<section id="content-top">
						
						
						<nav class="quick-actions" style="visibility:hidden;">
							<ul>
								
								<li>
									<a href="#">
										<i class="glyph-settings"></i>
									</a>
								</li>
								
							</ul>
						</nav>
					</section>
					<div class="cf"></div>
					
						
			<section id="pane">
						<header>
							<h1>Modulo Schedules</h1>
							<nav class="breadcrumbs">
								<ul>
									<li class="alt"><a href="index.php"><i class="icon-home"></i></a></li>
									<li><a href="listado_schedules.php">Listado</a></li>
									<li><a href="form_schedule.php">Formulario</a></li>
									
								</ul>
							</nav>
						</header>
						<div id="pane-content">
													<div class="widget minimizable g4">
								<header>
									<i class="icon-clipboard"></i>
									<h2>Formulario schedule </h2>
								</header>
								<div id="pane-content">
											<div class="g4">
						<div class="table-wrapper">
                       <form action="schedules.operaciones.php" method="post" enctype="multipart/form-data" class="js-validate" />	
							
                  			<input type="hidden" name="id" value="<?php echo $schedule->id ?>" placeholder="Placeholder" />          
                            <div class="field g1">
											<label>Lugar</label>
											<div class="entry">
												<input type="text" name="lugar" value="<?php echo $schedule->lugar; ?>" placeholder="Placeholder" />
											</div>
										</div>
                            <div class="field g1">
											<label>Hora</label>
											<div class="entry">
												<input type="text" name="hora" value="<?php echo $schedule->hora ?>" placeholder="Placeholder" />
											</div>
										</div>
                            <div class="field g2">
											<label>estatus</label>
											<div class="entry">
												<select name="estatus" class="chosen">
													
													<option value="Merida" <?php if($schedule->estatus=="Merida"){echo "selected ";} ?> />Merida bus</option>
													<option value="Coast" <?php if($schedule->estatus=="Coast"){echo "selected ";}  ?> />Coast bus</option>
													
												</select>
											</div>
										</div>
                            
                            <div class="field g2">
											<label>Tipo</label>
											<div class="entry">
												<select name="tipo" class="chosen">
													
													<option value="Departing" <?php if($schedule->tipo=="Departing"){echo "selected ";} ?> />Departing</option>
													<option value="Arriving" <?php if($schedule->tipo=="Arriving"){echo "selected ";}  ?> />Arriving</option>
													<option value="Picking up" <?php if($schedule->tipo=="Picking up"){echo "selected ";}  ?>  />Picking up</option>
                                               <option value="Dropping off" <?php if($schedule->tipo=="Dropping off"){echo "selected ";}  ?> />Dropping off</option>
												</select> 
											</div>
										</div>
                            
                            <div class="field g1">
											<label>Codigo</label>
											<div class="entry">
												<input name="codigo" type="text" value="<?php echo $schedule->codigo; ?>" placeholder="Placeholder" />
											</div>
										</div>
                            
                            
                             
								</div>       
									
                                    </div>
                                     <div class="field g1">
                                        <?php echo $botones_up.'&nbsp'.$botones_delete.'&nbsp;'.$botones_add;?>
                                        </div>
								</div>
                               
							</div>
                            
                            </form>
							<div class="cf"></div>
						</div>
					</section>
				</section>
			</section>
		</div>
		<a href="#" id="top-scroller" title="back to top of the page">back to top</a>
	</body>
</html>