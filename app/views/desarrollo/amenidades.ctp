<?php
echo
	$this->element('top',array('wide'=>true)),
	$html->div('sections clear'),
		$html->div('column'),
			$html->div('separator',''),
			$html->div('pad'),
				$html->tag('h2','Amenidades','title'),
				$html->para(null,'Villas Wayak ofrece a sus residentes lujosas instalaciones recreativas y de esparcimiento familiar para disfrutar de un estilo de vida privilegiado.'),
				$html->para(null,'Nuestras áreas han sido creadas para todos los gustos y necesidades, desde diversión hasta encontrar un espacio único para relajarse dentro de un entorno natural.'),
				
				$this->element('hidden_gallery',compact('album')),
			'</div>',
		'</div>',
		$html->div('column',null,array('id'=>'column1')),
			$html->div('pad'),
				$html->tag('ul'),
					$html->tag('li','146 mts. de frente de playa'),
					$html->tag('li','6 piscinas.'),
					$html->tag('li','Canal de nado semi-olímpico.'),
					$html->tag('li','Casa Club.'),
					$html->tag('li','Restaurante.'),
					$html->tag('li','Gimnasio / Spa.'),
					$html->tag('li','Área de juegos infantiles.'),
					$html->tag('li','Marina seca.'),
					$html->tag('li','Cancha de usos múltiples.'),
				'</ul>',
				$html->tag('ul'),
					$html->tag('li','Elevadores.'),
					$html->tag('li','Caseta de vigilancia 24 hrs. / 365 días del año.'),
					$html->tag('li','Mantenimiento / Recolección de Basura.'),
				'</ul>',
			'</div>',
		'</div>',
	'</div>';
	$moo->scroll(array('column1'));
?>
</div>
</div><!-- .content -->