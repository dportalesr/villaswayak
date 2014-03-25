<?php
$visible = !empty($visible);
echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_jaal_ha')),
		$html->div('column'),
			$html->div('separator',''),
			$html->div('pad'),
				$html->tag('h2','Villas Jaal-Há','title'),
				$html->para(null,'Místicos amaneceres y majestuosos atardeceres, Las Villas Jaal-Há son para aquellos que quieren vivir el sueño Wayak al máximo. Ideada para los que no quieren escatimar en comodidades. Su exclusivo Penthouse y todo el equipamiento que una residencia de lujo puede aspirar, hacen de la vida a la orilla del mar una experiencia única.'),
				$html->para(null,'Fusión entre belleza y lujo. Cuatro habitaciones y un penthouse, todas con terraza, dos balcones y vista al mar en todas las habitaciones.'),

				$this->element('hidden_gallery',compact('album')),
				$html->link('Ver Planta Arquitectónica','/img/plantas/desarrollos/villas1.png',array('class'=>'pulsembox','rel'=>'jaal_ha','name'=>'Planta Baja')),
				$html->div('hide',$html->link('','/img/plantas/desarrollos/villas2.png',array('class'=>'pulsembox','rel'=>'jaal_ha','name'=>'Segunda Planta'))),

			'</div>',
		'</div>',
		//-----
		$html->div('column',null,array('id'=>'column1')),
			$html->div('pad'),
				$html->tag('ul'),
					$html->tag('li','3 Plantas'),
					$html->tag('li','300 m2 de construcción.'),
					$html->tag('li','Terreno de 8 x 25 metros.'),
				'</ul>',

				$html->div('title title3','Planta Baja'),
				$html->tag('ul'),
					$html->tag('li','Terraza techada al frente.'),
					$html->tag('li','Sala y comedor.'),
					$html->tag('li','Estudio o habitación con baño.'),
					$html->tag('li','Cocina con meseta de granito.'),
					$html->tag('li','Medio baño.'),
					$html->tag('li','Área de lavado.'),
					$html->tag('li','Patio de Servicio y tendido.'),
					$html->tag('li','Área para asar carnes.'),
					$html->tag('li','Garage privado para cuatro vehículos.'),
				'</ul>',

				$html->div('title title3','Planta Alta'),
				$html->tag('ul'),
					$html->tag('li','Tres habitaciones con clóset (caoba y cedro).'),
					$html->tag('li','Balcón techado en cada habitación.'),
					$html->tag('li','Dos baños con lavabo de piedra maya independiente.'),
					$html->tag('li','Clóset de blancos.'),
				'</ul>',
					
				$html->div('title title3','Penthouse'),
				$html->tag('ul'),
					$html->tag('li','Amplia recámara Principal.'),
					$html->tag('li','Sala privada en recámara principal.'),
				'</ul>',
			'</div>',
		'</div>',
	'</div>';
?>