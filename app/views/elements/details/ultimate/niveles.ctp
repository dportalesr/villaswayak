<?php
$visible = !empty($visible);
echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_niveles')),
		$html->div('column'),
			$html->div('separator',''),
			$html->div('pad'),
				$html->tag('h2','THE ULTIMATE TOWER','title'),
				$html->tag('h3','Niveles 1, 2 y 3','subtitle'),
				$html->para(null,'Más detalles... más espectacular.'),
				$html->para(null,'Cerramos con broche de oro el Sueño Wayak con nuestra última generación de apartamentos con espacios diseñados exclusivos para vivir al máximo comfort a la orilla del mar.'),

				$this->element('hidden_gallery',compact('album')),
				$html->link('Ver Planta Arquitectónica','/img/plantas/palm/departamento.png',array('class'=>'pulsembox','rel'=>'departamento','name'=>'Departamento')),

			'</div>',
		'</div>',
		//-----
		$html->div('column',null,array('id'=>'column1')),
			$html->div('pad'),
				$html->div('title title3','Planta Baja'),
				$html->tag('ul'),
					$html->tag('li','Terraza techada al frente.'),
					$html->tag('li','Cocina integral con acabados de lujo.'),
					$html->tag('li','Recámara principal con Walk in closet.'),
					$html->tag('li','Dos recámaras secundarias.'),
					$html->tag('li','Cuarto de servicio.'),
					$html->tag('li','Tres baños completos.'),
					$html->tag('li','Baño de visitas.'),
					$html->tag('li','Cuarto de máquinas.'),
					$html->tag('li','Bodega.'),
				'</ul>',

				$html->div('title title3','Penthouse / Solarium'),
				$html->tag('ul'),
					$html->tag('li','Exclusivo Solarium.'),
					$html->tag('li','Área social con pérgola.'),
					$html->tag('li','Bar con parrilla asador y tarja.'),
					$html->tag('li','Cuatro baños completos.'),
					$html->tag('li','Jacuzzi. (Opcional)'),
				'</ul>',

				$html->div('title title3','Equipamiento'),
				$html->tag('ul'),
					$html->tag('li','Closet de blancos.'),
					// $html->tag('li','Estufa con horno y campana.'),
					// $html->tag('li','Refrigerador.'),
					// $html->tag('li','Centro de lavado.'),
					// $html->tag('li','Calentador.'),
					// $html->tag('li','Ventiladores de techo.'),
					// $html->tag('li','Instalación preparada para A.C. y TV Satelital.'),
					// $html->tag('li','Sistema de iluminación inteligente (opcional).'),
				'</ul>',
			'</div>',
		'</div>',
	'</div>';
?>