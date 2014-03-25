<?php
echo
	$this->element('top',array('wide'=>true)),
	$html->div('section_nav'),
		$html->link('Niveles 1, 2 y 3',array('controller'=>'palm','action'=>'niveles'),array('id'=>'niveles','class'=>$visible == 'niveles' ? 'selected' : '')),
		$html->link('Penthouse / Solarium',array('controller'=>'palm','action'=>'penthouse'),array('id'=>'penthouse','class'=>$visible == 'penthouse' ? 'selected' : '')),
	'</div>',
	$html->div('sections clear'),
		$this->element('details/ultimate/niveles',array('album'=>$albums['niveles'],'visible'=>$visible == 'niveles')),
		$this->element('details/ultimate/penthouse',array('album'=>$albums['penthouse'],'visible'=>$visible == 'penthouse')),
	'</div>';

	$moo->scroll(array('column1','column2'));
	$moo->addEvent('.section_nav > a','click','myScrolls.each(function(el){ el.refresh.delay(100,el); });',array('css'=>1));
?>
</div>
</div><!-- .content -->