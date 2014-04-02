<?php
$visible = !empty($visible);
echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_niveles')),
		$html->div('column'),
			$html->div('separator',''),
			$html->div('pad'),
				$html->tag('h2','THE ULTIMATE TOWER','title'),
				$html->tag('h3','Niveles 1, 2 y 3','subtitle'),
				$html->para(null,'En la Última Torre, podemos admirar una nueva generación de apartamentos que es el reflejo de nuestra continua búsqueda de la perfección.'),
				$html->para(null,'Cerramos con broche de oro el Sueño Wayak con nuestra última generación de apartamentos con espacios diseñados exclusivos para vivir al máximo comfort a la orilla del mar.'),

				$this->element('hidden_gallery',compact('album')),
				$html->link('Descarga Folleto PDF','/pdfs/folleto_ultimate_tower.pdf',array('target'=>'_blank','rel'=>'nofollow')),
				$html->link('Ver Planta Arquitectónica','/img/plantas/ultimate/niveles.jpg',array('class'=>'pulsembox','rel'=>'departamento','name'=>'Niveles 1, 2 y 3')),

			'</div>',
		'</div>',
		//-----
		$html->div('column',null,array('id'=>'column1')),
			$html->div('pad'),
				$html->div('title title3','Características'),
				$html->tag('ul'),
					$html->tag('li','Terraza techada con vista al mar.'),
					$html->tag('li','Cocina integral con acabados de lujo.'),
					$html->tag('li','Recámara principal con Walk in closet.'),
					$html->tag('li','Dos recámaras secundarias.'),
					$html->tag('li','Cuarto de servicio.'),
					$html->tag('li','Tres baños completos.'),
					$html->tag('li','Baño de visitas.'),
					$html->tag('li','Bodega.'),
				'</ul>',

				$html->div('title title3','Equipamiento'),
				$html->tag('ul'),
					$html->tag('li','Closet de blancos.'),
					$html->tag('li','Alacena.'),
					$html->tag('li','Centro de lavado.'),
					$html->tag('li','Horno y parrilla eléctrica.'),
					$html->tag('li','Ventiladores.'),
					$html->tag('li','Refrigerador.'),
					$html->tag('li','Calentador.'),
				'</ul>',
			'</div>',
		'</div>',
	'</div>';
?>