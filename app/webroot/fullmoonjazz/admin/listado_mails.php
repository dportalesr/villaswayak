<?php 
session_start();
if($_SESSION['usuario']==''){
header("location:login.php");
//echo 'no hay';
} 
include_once ('clases/mails.class.php');

$mails= new InfoMail();
$listado_mails =$mails->listar_InfoMail();
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
						<a href="http://imagik.com.mx/"><img src="./images/logo.png" alt="Imagik Admin" /></a> </div>
                  
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
									<a href="form_destinatarios.php">
										<i class="glyph-cloud"></i>
										<div class="label">Destinatarios</div>
									</a>
								</li> 
                                 <li>
									<a href="form_folleto.php">
										<i class="glyph-cloud"></i>
										<div class="label">Folleto</div>
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
          <h1>Correos recibidos</h1>
          <nav class="breadcrumbs">
            <ul>
              <li class="alt"><a href="#"><i class="icon-home"></i></a></li>
              
            </ul>
          </nav>
        </header>
        <div id="pane-content">
          <div class="widget minimizable g4">
            <header> <i class="icon-clipboard"></i>
              <h2>Lista de correos</h2>
            </header>
            <div class="widget-section">
              <div class="content"> 
                <!--inicio formilacion --> 
                
                &nbsp;
                <div class="table-wrapper">
                  <table>
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Contenido</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
								foreach($listado_mails as $elemento_mail )
								{
								echo '<tr>';	
								echo '<td>'.$elemento_mail['nombre'].'</td>';
								echo '<td>'.$elemento_mail['mail'].'</td>';	
								echo '<td>'.$elemento_mail['about'].'</td>';	
								echo '</tr>';
								}
								 ?>
                    </tbody>
                  </table>
                </div>
                
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