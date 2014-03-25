
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
        
        <script>
		function login(){
			//alert('llege');
		var info = $('#log').serialize();
		$.ajax
		({
		type: "POST",
		url: "operaciones.login.php?",
		data: "accion2=logme&"+info,
		success: function(info){
		if (info == '1') {
                     alert('success');
					 window.location = "admin/index.php";
                }if (info == '2'){
                     alert('Usurio o contraseña no validas');
                }
				
		//alert(info);
		}
		
		});
		
	//alert(info)
}
</script>
        
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body class="fixed fixed-topbar"><!-- .fixed or .fluid -->
		<div class="single">
			<div id="logo">
				<img src="./images/logo.png" alt="logo" />
			</div>
			<section id="content">
				<div class="box">
					<form id="log" method="post" action="operaciones.login.php" class="validate-engine" />
						<label>
							<i class="fugue-user"></i>
							<input type="text" data-validation-engine="validate[required]" id="login" name="usuario" placeholder="Login" autofocus />
						</label>
						<span class="divider"></span>
						<label>
							<i class="fugue-lock"></i>
							<input type="password" data-validation-engine="validate[required]" id="pass" name="pass" placeholder="Password" />
						</label>
						
						<input type="submit" name="action" class="bt large full-bt"  value="Login" />
					</form>
				</div>
				<footer>
					
				</footer>
			</section>
		</div>
	</body>
</html>