<?php
$visible = !empty($visible);

echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_niveles')),
		$html->div('column'),
			$html->div('separator',''),
			$html->div('pad'),
				$html->tag('h2','THE ULTIMATE TOWER','title'),
				$html->para(null,'¡Más detalles... Más espectacular!'),
				$html->para(null,'Podemos admirar una nueva generación de apartamentos que es el reflejo de nuestra continua búsqueda de la perfección.'),
				$html->para(null,'Hemos conjuntado todo nuestro expertise para lograr un diseño más funcional, más detallado, en fin, con nuevos acabados así como espacios más amplios, nuevo closet vestidor en recámara principal, rediseño acceso al baño de recámaras, nuevo baño de visitas, nueva alacena, son solo algunos de los detalles que hacen la experiencia más espectacular.'),

				$this->element('hidden_gallery',compact('album')),
				$html->link('Descarga Folleto PDF','/pdfs/folleto_ultimate_tower.pdf',array('target'=>'_blank','rel'=>'nofollow')),
				$html->link('Ver Planta Arquitectónica','/img/plantas/ultimate/niveles.jpg',array('class'=>'pulsembox','rel'=>'departamento','name'=>'Niveles 1, 2 y 3')),

			'</div>',
		'</div>',
		//-----
		$html->div('column',null,array('id'=>'column2')),
			$html->div('pad'),
				$html->tag('h3','Departamentos','title title1 subtitle'),
        $html->div('title title3','Características'),
        $html->tag('ul'),
          $html->tag('li','Construcción: 160m&sup2;'),
          $html->tag('li','Elevador propio'),
          $html->tag('li','Recámara Principal con acceso al balcón, Walk-in Clóset'),
          $html->tag('li','Recámara secundaria con vista al mar'),
          $html->tag('li','Tres recámaras'),
          $html->tag('li','Cocina integral con meseta de cuarzo'),
          $html->tag('li','Terraza techada con vista al mar'),
          $html->tag('li','Sala | Bar'),
          $html->tag('li','Tres baños completos'),
          $html->tag('li','Baño de visitas'),
          $html->tag('li','Clóset de lavado'),
          $html->tag('li','Cuarto de servicio | Área de lavado'),
          $html->tag('li','Bodega'),
          $html->tag('li','Ducto de servicio'),
        '</ul>',

        $html->div('title title3','Equipamiento'),
        $html->tag('ul',null,'omega'),
          $html->tag('li','Clósets en madera preciosa'),
          $html->tag('li','Alacena'),
          $html->tag('li','Estufa con horno'),
          $html->tag('li','Refrigerador'),
          $html->tag('li','Centro de lavado'),
          $html->tag('li','Calentador'),
          $html->tag('li','Instalaciones preparadas para TV satelital y A/C'),
          $html->tag('li','Sistema de agua purificada'),
        '</ul>',
			'</div>',
		'</div>',
	'</div>';
?>