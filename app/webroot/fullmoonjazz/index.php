<?php
include_once('admin/clases/textos.class.php');
include_once ('admin/clases/galeria.class.php');
include_once ('admin/clases/banner.class.php');
include_once ('admin/clases/patrocinadores.class.php');
include_once('admin/clases/schedules.class.php');
include_once('admin/clases/folleto.class.php');

$textos= new Textos();
$textos->obtener_textos(); 
$galeria= new Carrucel();
$lista_galeria= $galeria->listar_carrucel();
$banner = new Banner();
$lista_banner= $banner->listar_banner();
$patrocinadores= new Patrocinadores();
$lista_patrocinador= $patrocinadores->listar_patrocinador();
$schedules= new  Schedule();
$listado_schedules_bus =$schedules->listar_schedule_bus();
$listado_schedules_coast=$schedules->listar_schedule_cost();
$folleto = new Folleto();
$lista_folleto= $folleto->listar_folleto();

if(isset($_REQUEST['i'])){
	$i=$_REQUEST['i'];
	if($i=='es'){
		include_once('es.php');
	
		$texto_principal=$textos->principal_ing;	  
		$texto_tickets=$textos->tickets_ing;
		$texto_tickets_bus=$textos->tickets_bus_ing;
		$texto_schedule=$textos->schedule_ing;	  
		
		
		$btn_menu='<li style=" background:#00a8bd;" class="visible-phone"><a href="index.php?i=en" style="color:#FFF" >Español</a></li>
                <li class="dropdown hidden-phone" style=" background:#00a8bd;">
                  <a href="#" class="dropdown-toggle" style="color:#FFF" data-toggle="dropdown">Español <b class="caret"></b></a>
                  <ul class="dropdown-menu" >
                    <li><a href="index.php?i=en">Ingles</a></li>
                    </li>';
				 
				   
				   }
	if($i=='en'){
		include_once('En.php');
	$texto_principal=$textos->principal;	  
		$texto_tickets=$textos->tickets;
		$texto_tickets_bus=$textos->tickets_bus;
		$texto_schedule=$textos->schedule;	  
		$btn_menu='<li style=" background:#00a8bd;" class="visible-phone"><a href="index.php?i=es" style="color:#FFF" >
Spanish</a></li>
                <li class="dropdown hidden-phone" style=" background:#00a8bd;">
                  <a href="#" class="dropdown-toggle" style="color:#FFF" data-toggle="dropdown">Ingles <b class="caret"></b></a>
                  <ul class="dropdown-menu" >
                    <li><a href="index.php?i=es">Español</a></li>
                    </li>';
			 
		}	
	
}else{
	include_once('En.php');
	$texto_principal=$textos->principal;	  
		$texto_tickets=$textos->tickets;
		$texto_tickets_bus=$textos->tickets_bus;
		$texto_schedule=$textos->schedule;	  
	$btn_menu='<li style=" background:#00a8bd;" class="visible-phone"><a href="index.php?i=es" style="color:#FFF" >
Spanish</a></li>
                <li class="dropdown hidden-phone" style=" background:#00a8bd;">
                  <a href="#" class="dropdown-toggle" style="color:#FFF" data-toggle="dropdown">Ingles <b class="caret"></b></a>
                  <ul class="dropdown-menu" >
                    <li><a href="index.php?i=es">Español</a></li>
                    </li>';
	}	
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Full moon jazz 2014</title>
<link href="bootstrap-2.3.2/docs/assets/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap-2.3.2/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/full-width-pics.css" rel="stylesheet">
<link rel="stylesheet" href="css/responsiveslides.css">
<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="owl-carousel/owl.theme.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script src="js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
		
      });
	  });
	  
	  /* Smooth scrolling para anclas */
$("a.smooth").live("click", function(e) {
e.preventDefault();
var $link = $(this);
var anchor = $link.attr("href");
$("html, body").stop().animate({
scrollTop: $(anchor).offset().top
}, 1000);
});
	  
</script>
<script>
	function mailtome(){
	
	//var div = $('#campo_mail');
	var info = $('#form').serialize();
	//alert(info)
	$.ajax
		({
		type: "POST",
		url: "mail.php?",
		data: "accion=mail&"+info,
		success: function(info){
			alert(info);
		}
		});
}</script>  
</head>

<body>
 
 <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper text-left" >
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse  collapse" style="float:right; ">
              <ul class="nav" >
                <li style="background:#bb1d6d;" ><a href="#tickets" class="smooth" style="color:#FFF">Where to buy tickets</a></li>
                <li style=" background:#a44d96;"><a href="#schedule" class="smooth" style="color:#FFF" >Transportation schedules</a></li>
               <?php echo $btn_menu ?>
               </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

 
<div class="full-width-image-1">

<div class="logo-wrapper">
 <ul class="rslides" id="slider1">
 <?php
 foreach($lista_banner as $elemento_banner)
 $banners=$elemento_banner['banner'];
{
echo '<li><img src="admin/galeria/banner/'.$banners.'" alt=""></li>';	
}
  ?>
  
    </ul>    
</div>   
        <div class="row">
        <div class="col-lg-12 section" >
          <h2  class="section-heading fontz" style="color:#FFF"><?php echo $frase1; ?></h2>
          
          <div class="span7 fontz text-left  center" >
                <p class="section-paragraph" ><?php echo str_replace("\n", "<br>",$texto_principal) ?></p>
                     

        </div>
        
        </div>
</div>
    

</div>
<?php 

foreach($lista_folleto as $elemento_folleto)
								{
$img=$elemento_folleto['imagen'];

echo '<div id="folleto">
  <div class="container fontz">
        <div class="row ">
       
        <div class="col-lg-12 section">
       
         
          <div class="row-fluid center" >
      
       
    
          <a class="links" target="new" href="admin/galeria/folleto/'.$img.'"><h1 class="text-center" style=" font-weight:300; color:#fff">'.$frase14.'</h1></a>
          
          
		</div>
        </div>
        </div>
    </div>
        

</div>';}
?>

<div id="tickets">
           
            <div class="container fontz">
        <div class="row ">
       
        <div class="col-lg-12 section">
         <h2 class="section-heading fontz" style="color:#FFF"><?php echo $frase2; ?></h2>
         <p>
          <div class="row-fluid" >
      
        <div class="span3">
         
        </div>
        <div class="span3 tic fontz">
          <h4 style=" font-weight:300; color:#ffcc00">FULL MOON JAZZ  TICKETS</h4>
          <p class="lista fontz"><?php echo str_replace("\n", "<br>",$texto_tickets) ?></p>
          
        </div>

        <div class=" fontz span3 tic">           
			<h4 class="fontz" style=" font-weight:300; color:#ffcc00"><?php echo $frase3; ?></h4>
          <p class="lista fontz"><?php echo str_replace("\n", "<br>",$texto_tickets_bus) ?></p>
                   
        </div>
        <div class="span3">
          
        </div>
        

     </p>  
    </div>
          
          
		</div>
        </div>
    </div>
        
    </div>
    
    <div id="carrucel">
    <div id="owl-demo" class="owl-carousel owl-theme" >
    <?php
	foreach($lista_galeria as $elemento_galeria)
		{
		$imagen=$elemento_galeria['imagen'];
		echo '<div class="item"><img src="admin/galeria/galeria/'.$imagen.'"></div>';
		}
			 ?>
</div>
 </div>
 
    
   <div id="schedule">
     <div class="container-fluid fontz " > 
     <div class="row-fluid fontz "> 
     <div class="span12 fontz"  >
     <div class="span3 hidden-phone fontz"  >
     </div>
     <div class="span6 fontz center" style="margin-top:5px;">
     <div class="span4 fontz tic centering">
     <h4 style="font-weight:300; color:#FFF; font-size:28px"><?php echo $frase4; ?></h4><span id="round" class="fontz" style="color:#FFF"><?php echo $frase5; ?></span>
     </div>
     <div class="span8 fontz"  style=" background:#efa92a;  height:60px">
     <table align="center"  class="table noneborder fontz"  >
        <thead>
  		<tr>
            <td  class="noneborder fontz">
          <h4 class="text-center fontz" style="font-weight:300; color:#FFF; font-size:50px; " > <?php echo $frase6; ?></h2>
			</td>
       </tr>
      </thead>
      </table>
     
     
     </div>
     <div class="span12 fontz text-left tic" style="font-size:16px; color:#FFF"><?php echo $frase7; ?></div>
     </div>
     <div class="span3 hidden-phone"  >
     </div>
     </div>
      <div class="row-fluid">
      
       <div class="span3" ></div>
        <div class="span3 fontz">
        <table align="center"  class="table noneborder fontz"  >
        <thead>
  		<tr>
            <td bgcolor="#00a8bd" class="noneborder">
          <h2 class="text-center fontz" style="font-weight:300;color:#FFF;"> <?php echo $frase8; ?></h2>
			</td>
       </tr>
      </thead>
      </table>
        <table align="center" class="table table-borderless table-condensed table-hover">
        <thead>
          <tr>
            <th class="fontz" ><?php echo $frase10; ?></th>
            <th class="borde class fontz"><?php echo $frase11; ?></th>
            <th class="fontz"><?php echo $frase12; ?></th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($listado_schedules_bus as $elemento_schedules_bus){
		echo '<tr>
            <td class="fontz" >'.$elemento_schedules_bus['hora'].'</td>
            <td class="borde fontz"><a target="_blank"  class="links fontz" href="'.$elemento_schedules_bus['codigo'].'"><div style="width:100%;height:100%" class="fontz">'.$elemento_schedules_bus['locacion'].'</a></div></td>
            <td class="fontz">'.$elemento_schedules_bus['tipo'].'</td>
            
          </tr>';}
		 ?>
         
        </tbody>
      </table>
      
       <table align="center" style="width:90%" class="table-bordered visible-desktop visible-tablet fontz"   >
  		<tr>
            <td  class="fontz small" style="color:#FFF">
            <?php echo str_replace("\n", "<br>",$texto_schedule); ?>
			</td>
          </tr>
      
      </table>
      
      
      
        </div>
        
        <div class="span3 fontz" >
        <table align="center"  class="table noneborder"  >
  		<thead>
        <tr>
            <td bgcolor="#00a8bd" class="noneborder">
          <h2 class="text-center fontz"  style="font-weight:300;color:#FFF"> <?php echo $frase9; ?></h2>
			</td>
       </tr>
      </thead>
      </table>
      <table  align="center" class="table table-borderless ">
        <thead>
          <tr>
            <th class="fontz"><?php echo $frase10; ?></th>
            <th class="borde fontz"><?php echo $frase11; ?></th>
            <th class="fontz"><?php echo $frase12; ?></th>
          </tr>
         
        </thead>
        <tbody>
        
                 <?php
				
		foreach($listado_schedules_coast as $elemento_schedules_coast){
		echo '<tr>
            <td class="fontz" >'.$elemento_schedules_coast['hora'].'</td>
            <td class="borde fontz">

<a class="links fontz" target="_blank" href="'.$elemento_schedules_coast['codigo'].'"><div style="width:100%;height:100%">'.$elemento_schedules_coast['locacion'].'</div></td>
            <td class="fontz">'.$elemento_schedules_coast['tipo'].'</td>
            
          </tr>';}
		 ?>
         
        </tbody>
      </table>
    <table align="center" style="width:90%" class="table-bordered visible-phone fontz"   >
  		<tr class="fontz">
            <td class="fontz" style="color:#FFF">
            <?php echo str_replace("\n", "<br>",$texto_schedule); ?>
			</td>
          </tr>
      
      </table>
        </div>
        <div class="span3" ></div>
      </div>
    </div>      
   </div>
   
   
   
    <div id="contacto">
    
 	<div class="container" >
      <div class="row-fluid">
        <div class="offset4 span2 fontz">
<h2 class="section-heading fontz" style="color:#FFF ;margin-top:15px" ><?php echo $frase13; ?> </h1>
         
         <form id="form" class="form-horizontal" role="form" method="post" style="margin-top:25px;">
          
          
           
            
            
              <div class="control-group form-group center">
                <div id="nuevo" class="l text-right  " style="background:#bb1d6d; " >Who are you? &nbsp;</div> <div class="field"><input type="text" style="height:100%" id="txtnombre" name="txtnombre" ></div>
              </div>
              <div class="control-group center">
                <div id="nuevo" class="l text-right " style="background:#00a8bd;">whats your email? &nbsp;</div> <div class="field"><input type="text" id="txtmail" name="txtmail" ></div>
              </div>
              <div class="control-group center">
                <div id="about"  class="l text-right " style="background:#664075; color:#FFF">About? &nbsp;</div> <div class="field"><textarea name="txtabout" id="txtabout"></textarea></div>
              </div>
              <div class="control-group center">
                <input type="button" onclick="mailtome()" value="send" id="enviar"  >
              </div>
          </form>

      </div>
    </div>
    </div>
 </div>
 <div id="patrosinadores">
 <div class="container" >
        <div class="row">
            <div class="col-lg-12 section">
                <div class="span7 center">
                <?php
				foreach($lista_patrocinador as $elemento_patrocinador)
								{
						echo '<td> <img src="admin/galeria/logo/'.$elemento_patrocinador['logo'].'">';}
				 ?>
              
                </div>
            </div>
        </div>
    </div>  
 </div>  

<script src="owl-carousel/owl.carousel.js"></script>
<style>
   

    #owl-demo .item{
    margin: 3px;
	
    }
    #owl-demo .item img{
    display: block;
	width: 100%;
	height: auto;
    }


    </style>
<script src="bootstrap-2.3.2/docs/assets/js/bootstrap-transition.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-alert.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-modal.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-tab.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-popover.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-button.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-collapse.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="bootstrap-2.3.2/docs/assets/js/bootstrap-typeahead.js"></script>



    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

items : 3, //10 items above 1000px browser width
itemsDesktop : [1000,], //5 items between 1000px and 901px
itemsDesktopSmall : [900,3], // betweem 900px and 601px
itemsTablet: [600,2], //2 items between 600 and 0
itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
autoPlay : true,
		 navigation : false,
	
		rewindNav : true,
		
		transitionStyle:"fade"
      });
    });

    </script>
     
    
</body>
</html>
