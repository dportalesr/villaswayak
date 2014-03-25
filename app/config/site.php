<?php
$config['Site'] = array(
	'name'=>'Villas Wayak',
	'domain'=>$_SERVER['SERVER_NAME'],
	'email'=>'info@'.$_SERVER['SERVER_NAME'],
	'slogan'=>'Visions of a Dream',
	'keywords'=>'',
	'description'=>'Disfrute de majestuosas vista al mar desde nuestras lujosas unidades que ofrecen a su familia amplios espacios y una ubicación privilegiada; donde la calidez del entorno, el ambiente familiar y resort nos abrazan armónicamente.',
	'tw'=>'http://twitter.com/villaswayak',
	'fb'=>'http://facebook.com/VillasWayak'
);

$config['Site']['og'] = array(
	'title'=>$config['Site']['name'],
	'type'=>'company',// blog, article
	'url'=>'http://'.$config['Site']['domain'],
	'image'=>'http://'.$config['Site']['domain'].'/img/logo.png',
	'site_name'=>$config['Site']['name'],
	'description'=>$config['Site']['description'],

	'itemtype'=>'organization' //article
);

/**
 * Modos de uso:
 * Crea por elemento (nombre de controlador) un array asociativo compuesto de las siguientes claves
 * - label: Nombre general del catálogo para el usuario; puede establecerse sin la clave si es el primer elemento del array
 * - route: URL personalizada del controlador; si no se especifica, lo toma de 'label'
 * - menu: Nombre del catálogo en el menú principal de navegación; Sólo los elementos que cuenten con esta clave aparecerán en el menú
 * - admin: Nombre del catálogo en el menú del panel de administración, o si es array: Si tiene 1 elemento indica la clase del botón, o si son 2 elementos, el label y la clase; si no se especifica, lo toma de 'menu', sino de 'label'; especificar a false para omitir
*/
$modules = array(
	'carousels'=>array(
		'Carrusel',
		'admin'=>array('photos')
	),
	'banners'=>array('admin'=>array('banner')),
	'desarrollo'=>array('menu','admin'=>false),
	'palm'=>array('The Ultimate Tower','menu','route'=>'ultimate','admin'=>false),
	'events'=>array(
		'comunidad',
		'menu',
		'admin'=>array('')
	),
	'eventimgs'=>array('imágenes','admin'=>false),
	'albums'=>array(
		'galería',
		'admin'=>array('photos')
	),
	'albumimgs'=>array('imágenes','admin'=>false),
	'contacto'=>array('menu','admin'=>false),
	/*
	'about'=>array(
		'nosotros',
		'menu',
		'admin'=>array('pages')
	),
	'banners'=>array(
		'admin'=>array('banners')
	),
	'posts'=>array(
		'Noticias',
		'menu',
		'admin'=>array('posts')
	),
	*/
	'contacto'=>array('menu','admin'=>false),
	'users'=>array(
		'Usuarios',
		'admin'=>array('users')
	),
);

$cached_modules = Cache::read('sitemodules');

if((!$cached_modules) || Configure::read('debug')){
	foreach($modules as $idx => $mod){
		$mod = Set::normalize($mod);
		
		if((!isset($mod['label']))){
			if(in_array($label = key($mod),array('admin','menu','singu'))){
				$mod['label'] = $idx;
			} else {
				$mod['label'] = $label;
				unset($mod[$label]);
			}
		}
		
		if(array_key_exists('menu',$mod) && (!isset($mod['menu']))) $mod['menu'] = $mod['label'];
		if(!isset($mod['admin'])){
			if(isset($mod['menu']) && $mod['menu'])
				$mod['admin'] = $mod['menu'];
			else
				$mod['admin'] = $mod['label'];
		} elseif(is_array($mod['admin'])) {
			if(sizeof($mod['admin'])>1){
				$mod['admin'] = array('label'=>$mod['admin'][0],'class'=>$mod['admin'][1]);
			} else {
				$mod['admin'] = array('label'=>$mod['label'],'class'=>$mod['admin'][0]);
			}
		}
		
		if(!array_key_exists('route',$mod)) $mod['route'] = strtolower(Inflector::slug($mod['label']));
		
		if(is_numeric($idx)){
			unset($modules[$idx]);
			$modules[$mod['label']] = $mod;
		} else
			$modules[$idx] = $mod;
	}
	
	Cache::write('sitemodules',$modules);
} else
	$modules = $cached_modules;

$config['Modules'] = $modules;
?>