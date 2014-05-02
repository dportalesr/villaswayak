<?php
echo
	$this->element('top',array('wide'=>true)),
	$html->div('section_nav'),
		$html->link('Departamentos',array('controller'=>'desarrollo','action'=>'departamentos'),array('id'=>'departamentos','class'=>$visible == 'departamentos' ? 'selected' : '')),
		$html->link('Penthouse',array('controller'=>'desarrollo','action'=>'penthouse'),array('id'=>'penthouse','class'=>$visible == 'penthouse' ? 'selected' : '')),
	'</div>',
	$html->div('sections clear'),
		$this->element('details/desarrollo/departamentos',array('album'=>$albums['departamentos'],'visible'=>$visible == 'departamentos')),
		$this->element('details/desarrollo/penthouse',array('album'=>$albums['penthouse'],'visible'=>$visible == 'penthouse')),
	'</div>';
	$moo->scroll(array('column1','column2'));
	$script = 'myScrolls.each(function(el){ el.refresh.delay(100,el); });';
	$moo->addEvent('.section_nav > a','click',$script,array('css'=>1));
?>
</div>
</div><!-- .content -->